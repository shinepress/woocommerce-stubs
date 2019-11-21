<?php


/**
 * This class provides functions for converting CSS styles into inline style attributes in your HTML code.
 *
 * For more information, please see the README.md file.
 *
 * @version 2.0.0
 *
 * @author Cameron Brooks
 * @author Jaime Prado
 * @author Oliver Klee <github@oliverklee.de>
 * @author Roman Ožana <ozana@omdesign.cz>
 * @author Sander Kruger <s.kruger@invessel.com>
 * @author Zoli Szabó <zoli.szabo+github@gmail.com>
 */
class Emogrifier
{
    /**
     * @var int
     */
    const CACHE_KEY_CSS = 0;
    /**
     * @var int
     */
    const CACHE_KEY_SELECTOR = 1;
    /**
     * @var int
     */
    const CACHE_KEY_XPATH = 2;
    /**
     * @var int
     */
    const CACHE_KEY_CSS_DECLARATIONS_BLOCK = 3;
    /**
     * @var int
     */
    const CACHE_KEY_COMBINED_STYLES = 4;
    /**
     * for calculating nth-of-type and nth-child selectors
     *
     * @var int
     */
    const INDEX = 0;
    /**
     * for calculating nth-of-type and nth-child selectors
     *
     * @var int
     */
    const MULTIPLIER = 1;
    /**
     * @var string
     */
    const ID_ATTRIBUTE_MATCHER = '/(\w+)?\#([\w\-]+)/';
    /**
     * @var string
     */
    const CLASS_ATTRIBUTE_MATCHER = '/(\w+|[\*\]])?((\.[\w\-]+)+)/';
    /**
     * @var string
     */
    const CONTENT_TYPE_META_TAG = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    /**
     * @var string
     */
    const DEFAULT_DOCUMENT_TYPE = '<!DOCTYPE html>';
    /**
     * @var string
     */
    private $html = '';
    /**
     * @var string
     */
    private $css = '';
    /**
     * @var bool[]
     */
    private $excludedSelectors = [];
    /**
     * @var string[]
     */
    private $unprocessableHtmlTags = ['wbr'];
    /**
     * @var bool[]
     */
    private $allowedMediaTypes = ['all' => \true, 'screen' => \true, 'print' => \true];
    /**
     * @var mixed[]
     */
    private $caches = [self::CACHE_KEY_CSS => [], self::CACHE_KEY_SELECTOR => [], self::CACHE_KEY_XPATH => [], self::CACHE_KEY_CSS_DECLARATIONS_BLOCK => [], self::CACHE_KEY_COMBINED_STYLES => []];
    /**
     * the visited nodes with the XPath paths as array keys
     *
     * @var \DOMElement[]
     */
    private $visitedNodes = [];
    /**
     * the styles to apply to the nodes with the XPath paths as array keys for the outer array
     * and the attribute names/values as key/value pairs for the inner array
     *
     * @var string[][]
     */
    private $styleAttributesForNodes = [];
    /**
     * Determines whether the "style" attributes of tags in the the HTML passed to this class should be preserved.
     * If set to false, the value of the style attributes will be discarded.
     *
     * @var bool
     */
    private $isInlineStyleAttributesParsingEnabled = \true;
    /**
     * Determines whether the <style> blocks in the HTML passed to this class should be parsed.
     *
     * If set to true, the <style> blocks will be removed from the HTML and their contents will be applied to the HTML
     * via inline styles.
     *
     * If set to false, the <style> blocks will be left as they are in the HTML.
     *
     * @var bool
     */
    private $isStyleBlocksParsingEnabled = \true;
    /**
     * Determines whether elements with the `display: none` property are
     * removed from the DOM.
     *
     * @var bool
     */
    private $shouldKeepInvisibleNodes = \true;
    /**
     * @var string[]
     */
    private $xPathRules = [
        // attribute presence
        '/^\[(\w+|\w+\=[\'"]?\w+[\'"]?)\]/' => '*[@\1]',
        // type and attribute exact value
        '/(\w)\[(\w+)\=[\'"]?([\w\s]+)[\'"]?\]/' => '\1[@\2="\3"]',
        // type and attribute value with ~ (one word within a whitespace-separated list of words)
        '/([\w\*]+)\[(\w+)[\s]*\~\=[\s]*[\'"]?([\w-_\/]+)[\'"]?\]/' => '\1[contains(concat(" ", @\2, " "), concat(" ", "\3", " "))]',
        // type and attribute value with | (either exact value match or prefix followed by a hyphen)
        '/([\w\*]+)\[(\w+)[\s]*\|\=[\s]*[\'"]?([\w-_\s\/]+)[\'"]?\]/' => '\1[@\2="\3" or starts-with(@\2, concat("\3", "-"))]',
        // type and attribute value with ^ (prefix match)
        '/([\w\*]+)\[(\w+)[\s]*\^\=[\s]*[\'"]?([\w-_\/]+)[\'"]?\]/' => '\1[starts-with(@\2, "\3")]',
        // type and attribute value with * (substring match)
        '/([\w\*]+)\[(\w+)[\s]*\*\=[\s]*[\'"]?([\w-_\s\/:;]+)[\'"]?\]/' => '\1[contains(@\2, "\3")]',
        // adjacent sibling
        '/\s+\+\s+/' => '/following-sibling::*[1]/self::',
        // child
        '/\s*>\s*/' => '/',
        // descendant
        '/\s+(?=.*[^\]]{1}$)/' => '//',
        // type and :first-child
        '/([^\/]+):first-child/i' => '*[1]/self::\1',
        // type and :last-child
        '/([^\/]+):last-child/i' => '*[last()]/self::\1',
        // The following matcher will break things if it is placed before the adjacent matcher.
        // So one of the matchers matches either too much or not enough.
        // type and attribute value with $ (suffix match)
        '/([\w\*]+)\[(\w+)[\s]*\$\=[\s]*[\'"]?([\w-_\s\/]+)[\'"]?\]/' => '\1[substring(@\2, string-length(@\2) - string-length("\3") + 1) = "\3"]',
    ];
    /**
     * Determines whether CSS styles that have an equivalent HTML attribute
     * should be mapped and attached to those elements.
     *
     * @var bool
     */
    private $shouldMapCssToHtml = \false;
    /**
     * This multi-level array contains simple mappings of CSS properties to
     * HTML attributes. If a mapping only applies to certain HTML nodes or
     * only for certain values, the mapping is an object with a whitelist
     * of nodes and values.
     *
     * @var mixed[][]
     */
    private $cssToHtmlMap = ['background-color' => ['attribute' => 'bgcolor'], 'text-align' => ['attribute' => 'align', 'nodes' => ['p', 'div', 'td'], 'values' => ['left', 'right', 'center', 'justify']], 'float' => ['attribute' => 'align', 'nodes' => ['table', 'img'], 'values' => ['left', 'right']], 'border-spacing' => ['attribute' => 'cellspacing', 'nodes' => ['table']]];
    /**
     * Emogrifier will throw Exceptions when it encounters an error instead of silently ignoring them.
     *
     * @var bool
     */
    private $debug = \false;
    /**
     * The constructor.
     *
     * @param string $html the HTML to emogrify, must be UTF-8-encoded
     * @param string $css the CSS to merge, must be UTF-8-encoded
     */
    public function __construct($html = '', $css = '')
    {
    }
    /**
     * The destructor.
     */
    public function __destruct()
    {
    }
    /**
     * Sets the HTML to emogrify.
     *
     * @param string $html the HTML to emogrify, must be UTF-8-encoded
     *
     * @return void
     */
    public function setHtml($html)
    {
    }
    /**
     * Sets the CSS to merge with the HTML.
     *
     * @param string $css the CSS to merge, must be UTF-8-encoded
     *
     * @return void
     */
    public function setCss($css)
    {
    }
    /**
     * Applies $this->css to $this->html and returns the HTML with the CSS
     * applied.
     *
     * This method places the CSS inline.
     *
     * @return string
     *
     * @throws \BadMethodCallException
     */
    public function emogrify()
    {
    }
    /**
     * Applies $this->css to $this->html and returns only the HTML content
     * within the <body> tag.
     *
     * This method places the CSS inline.
     *
     * @return string
     *
     * @throws \BadMethodCallException
     */
    public function emogrifyBodyContent()
    {
    }
    /**
     * Creates an XML document from $this->html and emogrifies ist.
     *
     * @return \DOMDocument
     *
     * @throws \BadMethodCallException
     */
    private function createAndProcessXmlDocument()
    {
    }
    /**
     * Applies $this->css to $xmlDocument.
     *
     * This method places the CSS inline.
     *
     * @param \DOMDocument $xmlDocument
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    protected function process(\DOMDocument $xmlDocument)
    {
    }
    /**
     * Searches for all nodes with a style attribute, transforms the CSS found
     * to HTML attributes and adds those attributes to each node.
     *
     * @param \DOMXPath $xPath
     *
     * @return void
     */
    private function mapAllInlineStylesToHtmlAttributes(\DOMXPath $xPath)
    {
    }
    /**
     * Searches for all nodes with a style attribute and removes the "!important" annotations out of
     * the inline style declarations, eventually by rearranging declarations.
     *
     * @param \DOMXPath $xPath
     *
     * @return void
     */
    private function removeImportantAnnotationFromAllInlineStyles(\DOMXPath $xPath)
    {
    }
    /**
     * Removes the "!important" annotations out of the inline style declarations,
     * eventually by rearranging declarations.
     * Rearranging needed when !important shorthand properties are followed by some of their
     * not !important expanded-version properties.
     * For example "font: 12px serif !important; font-size: 13px;" must be reordered
     * to "font-size: 13px; font: 12px serif;" in order to remain correct.
     *
     * @param \DOMElement $node
     *
     * @return void
     */
    private function removeImportantAnnotationFromNodeInlineStyle(\DOMElement $node)
    {
    }
    /**
     * Returns a list with all DOM nodes that have a style attribute.
     *
     * @param \DOMXPath $xPath
     *
     * @return \DOMNodeList
     */
    private function getAllNodesWithStyleAttribute(\DOMXPath $xPath)
    {
    }
    /**
     * Applies $styles to $node.
     *
     * This method maps CSS styles to HTML attributes and adds those to the
     * node.
     *
     * @param string[] $styles the new CSS styles taken from the global styles to be applied to this node
     * @param \DOMElement $node node to apply styles to
     *
     * @return void
     */
    private function mapCssToHtmlAttributes(array $styles, \DOMElement $node)
    {
    }
    /**
     * Tries to apply the CSS style to $node as an attribute.
     *
     * This method maps a CSS rule to HTML attributes and adds those to the node.
     *
     * @param string $property the name of the CSS property to map
     * @param string $value the value of the style rule to map
     * @param \DOMElement $node node to apply styles to
     *
     * @return void
     */
    private function mapCssToHtmlAttribute($property, $value, \DOMElement $node)
    {
    }
    /**
     * Looks up the CSS property in the mapping table and maps it if it matches the conditions.
     *
     * @param string $property the name of the CSS property to map
     * @param string $value the value of the style rule to map
     * @param \DOMElement $node node to apply styles to
     *
     * @return bool true if the property cab be mapped using the simple mapping table
     */
    private function mapSimpleCssProperty($property, $value, \DOMElement $node)
    {
    }
    /**
     * Maps CSS properties that need special transformation to an HTML attribute.
     *
     * @param string $property the name of the CSS property to map
     * @param string $value the value of the style rule to map
     * @param \DOMElement $node node to apply styles to
     *
     * @return void
     */
    private function mapComplexCssProperty($property, $value, \DOMElement $node)
    {
    }
    /**
     * Parses a shorthand CSS value and splits it into individual values
     *
     * @param string $value a string of CSS value with 1, 2, 3 or 4 sizes
     *                      For example: padding: 0 auto;
     *                      '0 auto' is split into top: 0, left: auto, bottom: 0,
     *                      right: auto.
     *
     * @return string[] an array of values for top, right, bottom and left (using these as associative array keys)
     */
    private function parseCssShorthandValue($value)
    {
    }
    /**
     * Extracts and parses the individual rules from a CSS string.
     *
     * @param string $css a string of raw CSS code
     *
     * @return string[][] an array of string sub-arrays with the keys
     *         "selector" (the CSS selector(s), e.g., "*" or "h1"),
     *         "declarationsBLock" (the semicolon-separated CSS declarations for that selector(s),
     *         e.g., "color: red; height: 4px;"),
     *         and "line" (the line number e.g. 42)
     */
    private function parseCssRules($css)
    {
    }
    /**
     * Disables the parsing of inline styles.
     *
     * @return void
     */
    public function disableInlineStyleAttributesParsing()
    {
    }
    /**
     * Disables the parsing of <style> blocks.
     *
     * @return void
     */
    public function disableStyleBlocksParsing()
    {
    }
    /**
     * Disables the removal of elements with `display: none` properties.
     *
     * @return void
     */
    public function disableInvisibleNodeRemoval()
    {
    }
    /**
     * Enables the attachment/override of HTML attributes for which a
     * corresponding CSS property has been set.
     *
     * @return void
     */
    public function enableCssToHtmlMapping()
    {
    }
    /**
     * Clears all caches.
     *
     * @return void
     */
    private function clearAllCaches()
    {
    }
    /**
     * Clears a single cache by key.
     *
     * @param int $key the cache key, must be CACHE_KEY_CSS, CACHE_KEY_SELECTOR, CACHE_KEY_XPATH
     *                 or CACHE_KEY_CSS_DECLARATION_BLOCK
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    private function clearCache($key)
    {
    }
    /**
     * Purges the visited nodes.
     *
     * @return void
     */
    private function purgeVisitedNodes()
    {
    }
    /**
     * Marks a tag for removal.
     *
     * There are some HTML tags that DOMDocument cannot process, and it will throw an error if it encounters them.
     * In particular, DOMDocument will complain if you try to use HTML5 tags in an XHTML document.
     *
     * Note: The tags will not be removed if they have any content.
     *
     * @param string $tagName the tag name, e.g., "p"
     *
     * @return void
     */
    public function addUnprocessableHtmlTag($tagName)
    {
    }
    /**
     * Drops a tag from the removal list.
     *
     * @param string $tagName the tag name, e.g., "p"
     *
     * @return void
     */
    public function removeUnprocessableHtmlTag($tagName)
    {
    }
    /**
     * Marks a media query type to keep.
     *
     * @param string $mediaName the media type name, e.g., "braille"
     *
     * @return void
     */
    public function addAllowedMediaType($mediaName)
    {
    }
    /**
     * Drops a media query type from the allowed list.
     *
     * @param string $mediaName the tag name, e.g., "braille"
     *
     * @return void
     */
    public function removeAllowedMediaType($mediaName)
    {
    }
    /**
     * Adds a selector to exclude nodes from emogrification.
     *
     * Any nodes that match the selector will not have their style altered.
     *
     * @param string $selector the selector to exclude, e.g., ".editor"
     *
     * @return void
     */
    public function addExcludedSelector($selector)
    {
    }
    /**
     * No longer excludes the nodes matching this selector from emogrification.
     *
     * @param string $selector the selector to no longer exclude, e.g., ".editor"
     *
     * @return void
     */
    public function removeExcludedSelector($selector)
    {
    }
    /**
     * This removes styles from your email that contain display:none.
     * We need to look for display:none, but we need to do a case-insensitive search. Since DOMDocument only
     * supports XPath 1.0, lower-case() isn't available to us. We've thus far only set attributes to lowercase,
     * not attribute values. Consequently, we need to translate() the letters that would be in 'NONE' ("NOE")
     * to lowercase.
     *
     * @param \DOMXPath $xPath
     *
     * @return void
     */
    private function removeInvisibleNodes(\DOMXPath $xPath)
    {
    }
    /**
     * Parses the document and normalizes all existing CSS attributes.
     * This changes 'DISPLAY: none' to 'display: none'.
     * We wouldn't have to do this if DOMXPath supported XPath 2.0.
     * Also stores a reference of nodes with existing inline styles so we don't overwrite them.
     *
     * @param \DOMXPath $xPath
     *
     * @return void
     */
    private function normalizeStyleAttributesOfAllNodes(\DOMXPath $xPath)
    {
    }
    /**
     * Normalizes the value of the "style" attribute and saves it.
     *
     * @param \DOMElement $node
     *
     * @return void
     */
    private function normalizeStyleAttributes(\DOMElement $node)
    {
    }
    /**
     * Merges styles from styles attributes and style nodes and applies them to the attribute nodes
     *
     * @return void
     */
    private function fillStyleAttributesWithMergedStyles()
    {
    }
    /**
     * This method merges old or existing name/value array with new name/value array
     * and then generates a string of the combined style suitable for placing inline.
     * This becomes the single point for CSS string generation allowing for consistent
     * CSS output no matter where the CSS originally came from.
     *
     * @param string[] $oldStyles
     * @param string[] $newStyles
     *
     * @return string
     */
    private function generateStyleStringFromDeclarationsArrays(array $oldStyles, array $newStyles)
    {
    }
    /**
     * Generates a CSS style string suitable to be used inline from the $styleDeclarations property => value array.
     *
     * @param string[] $styleDeclarations
     *
     * @return string
     */
    private function generateStyleStringFromSingleDeclarationsArray(array $styleDeclarations)
    {
    }
    /**
     * Checks whether $attributeValue is marked as !important.
     *
     * @param string $attributeValue
     *
     * @return bool
     */
    private function attributeValueIsImportant($attributeValue)
    {
    }
    /**
     * Applies $css to $xmlDocument, limited to the media queries that actually apply to the document.
     *
     * @param \DOMDocument $xmlDocument the document to match against
     * @param \DOMXPath $xPath
     * @param string $css a string of CSS
     *
     * @return void
     */
    private function copyCssWithMediaToStyleNode(\DOMDocument $xmlDocument, \DOMXPath $xPath, $css)
    {
    }
    /**
     * Extracts the media queries from $css while skipping empty media queries.
     *
     * @param string $css
     *
     * @return string[][] numeric array with string sub-arrays with the keys "css" and "query"
     */
    private function extractMediaQueriesFromCss($css)
    {
    }
    /**
     * Checks whether there is at least one matching element for $cssSelector.
     * When not in debug mode, it returns true also for invalid selectors (because they may be valid,
     * just not implemented/recognized yet by Emogrifier).
     *
     * @param \DOMXPath $xPath
     * @param string $cssSelector
     *
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    private function existsMatchForCssSelector(\DOMXPath $xPath, $cssSelector)
    {
    }
    /**
     * Returns CSS content.
     *
     * @param \DOMXPath $xPath
     *
     * @return string
     */
    private function getCssFromAllStyleNodes(\DOMXPath $xPath)
    {
    }
    /**
     * Adds a style element with $css to $document.
     *
     * This method is protected to allow overriding.
     *
     * @see https://github.com/jjriv/emogrifier/issues/103
     *
     * @param \DOMDocument $document
     * @param string $css
     *
     * @return void
     */
    protected function addStyleElementToDocument(\DOMDocument $document, $css)
    {
    }
    /**
     * Checks that $document has a BODY element and adds it if it is missing.
     *
     * @param \DOMDocument $document
     */
    private function ensureExistenceOfBodyElement(\DOMDocument $document)
    {
    }
    /**
     * Returns the BODY element.
     *
     * This method assumes that there always is a BODY element.
     *
     * @param \DOMDocument $document
     *
     * @return \DOMElement
     *
     * @throws \BadMethodCallException
     */
    private function getBodyElement(\DOMDocument $document)
    {
    }
    /**
     * Splits input CSS code to an array where:
     *
     * - key "css" will be contains clean CSS code
     * - key "media" will be contains all valuable media queries
     *
     * Example:
     *
     * The CSS code
     *
     *   "@import "file.css"; h1 { color:red; } @media { h1 {}} @media tv { h1 {}}"
     *
     * will be parsed into the following array:
     *
     *   "css" => "h1 { color:red; }"
     *   "media" => "@media { h1 {}}"
     *
     * @param string $css
     *
     * @return string[]
     */
    private function splitCssAndMediaQuery($css)
    {
    }
    /**
     * Creates a DOMDocument instance with the current HTML.
     *
     * @return \DOMDocument
     */
    private function createRawXmlDocument()
    {
    }
    /**
     * Returns the HTML with the unprocessable HTML tags removed and
     * with added document type and Content-Type meta tag if needed.
     *
     * @return string the unified HTML
     *
     * @throws \BadMethodCallException
     */
    private function getUnifiedHtml()
    {
    }
    /**
     * Removes the unprocessable tags from $html (if this feature is enabled).
     *
     * @param string $html
     *
     * @return string the reworked HTML with the unprocessable tags removed
     */
    private function removeUnprocessableTags($html)
    {
    }
    /**
     * Makes sure that the passed HTML has a document type.
     *
     * @param string $html
     *
     * @return string HTML with document type
     */
    private function ensureDocumentType($html)
    {
    }
    /**
     * Adds a Content-Type meta tag for the charset.
     *
     * @param string $html
     *
     * @return string the HTML with the meta tag added
     */
    private function addContentTypeMetaTag($html)
    {
    }
    /**
     * @param string[] $a
     * @param string[] $b
     *
     * @return int
     */
    private function sortBySelectorPrecedence(array $a, array $b)
    {
    }
    /**
     * @param string $selector
     *
     * @return int
     */
    private function getCssSelectorPrecedence($selector)
    {
    }
    /**
     * Maps a CSS selector to an XPath query string.
     *
     * @see http://plasmasturm.org/log/444/
     *
     * @param string $cssSelector a CSS selector
     *
     * @return string the corresponding XPath selector
     */
    private function translateCssToXpath($cssSelector)
    {
    }
    /**
     * Flexibly translates the CSS selector $trimmedLowercaseSelector to an xPath selector.
     *
     * @param string $trimmedLowercaseSelector
     *
     * @return string
     */
    private function translateCssToXpathPass($trimmedLowercaseSelector)
    {
    }
    /**
     * Flexibly translates the CSS selector $trimmedLowercaseSelector to an xPath selector for inline usage.
     *
     * @param string $trimmedLowercaseSelector
     *
     * @return string
     */
    private function translateCssToXpathPassInline($trimmedLowercaseSelector)
    {
    }
    /**
     * Flexibly translates the CSS selector $trimmedLowercaseSelector to an xPath selector while using
     * $matchClassAttributesCallback as to match the class attributes.
     *
     * @param string $trimmedLowercaseSelector
     * @param callable $matchClassAttributesCallback
     *
     * @return string
     */
    private function translateCssToXpathPassWithMatchClassAttributesCallback($trimmedLowercaseSelector, callable $matchClassAttributesCallback)
    {
    }
    /**
     * @param string[] $match
     *
     * @return string
     */
    private function matchIdAttributes(array $match)
    {
    }
    /**
     * @param string[] $match
     *
     * @return string xPath class attribute query wrapped in element selector
     */
    private function matchClassAttributes(array $match)
    {
    }
    /**
     * @param string[] $match
     *
     * @return string xPath class attribute query
     */
    private function matchClassAttributesInline(array $match)
    {
    }
    /**
     * @param string[] $match
     *
     * @return string
     */
    private function translateNthChild(array $match)
    {
    }
    /**
     * @param string[] $match
     *
     * @return string
     */
    private function translateNthOfType(array $match)
    {
    }
    /**
     * @param string[] $match
     *
     * @return int[]
     */
    private function parseNth(array $match)
    {
    }
    /**
     * Parses a CSS declaration block into property name/value pairs.
     *
     * Example:
     *
     * The declaration block
     *
     *   "color: #000; font-weight: bold;"
     *
     * will be parsed into the following array:
     *
     *   "color" => "#000"
     *   "font-weight" => "bold"
     *
     * @param string $cssDeclarationsBlock the CSS declarations block without the curly braces, may be empty
     *
     * @return string[]
     *         the CSS declarations with the property names as array keys and the property values as array values
     */
    private function parseCssDeclarationsBlock($cssDeclarationsBlock)
    {
    }
    /**
     * Find the nodes that are not to be emogrified.
     *
     * @param \DOMXPath $xPath
     *
     * @return \DOMElement[]
     *
     * @throws \InvalidArgumentException
     */
    private function getNodesToExclude(\DOMXPath $xPath)
    {
    }
    /**
     * Handles invalid xPath expression warnings, generated during the process() method,
     * during querying \DOMDocument and trigger \InvalidArgumentException with invalid selector
     * or \RuntimeException, depending on the source of the warning.
     *
     * @param int $type
     * @param string $message
     * @param string $file
     * @param int $line
     * @param array $context
     *
     * @return bool always false
     *
     * @throws \InvalidArgumentException
     * @throws \RuntimeException
     */
    public function handleXpathQueryWarnings($type, $message, $file, $line, array $context)
    {
    }
    /**
     * Sets the debug mode.
     *
     * @param bool $debug set to true to enable debug mode
     *
     * @return void
     */
    public function setDebug($debug)
    {
    }
}