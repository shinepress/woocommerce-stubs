<?php

namespace Pelago\Emogrifier;

/**
 * This class provides functions for converting CSS styles into inline style attributes in your HTML code.
 *
 * For Emogrifier 3.0.0, this will be the successor to the \Pelago\Emogrifier class (which then will be deprecated).
 *
 * For more information, please see the README.md file.
 *
 * @internal This class currently is a new technology preview, and its API is still in flux. Don't use it in production.
 *
 * @author Cameron Brooks
 * @author Jaime Prado
 * @author Oliver Klee <github@oliverklee.de>
 * @author Roman Ožana <ozana@omdesign.cz>
 * @author Sander Kruger <s.kruger@invessel.com>
 * @author Zoli Szabó <zoli.szabo+github@gmail.com>
 */
class CssInliner
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
    const CACHE_KEY_CSS_DECLARATIONS_BLOCK = 2;
    /**
     * @var int
     */
    const CACHE_KEY_COMBINED_STYLES = 3;
    /**
     * Regular expression component matching a static pseudo class in a selector, without the preceding ":",
     * for which the applicable elements can be determined (by converting the selector to an XPath expression).
     * (Contains alternation without a group and is intended to be placed within a capturing, non-capturing or lookahead
     * group, as appropriate for the usage context.)
     *
     * @var string
     */
    const PSEUDO_CLASS_MATCHER = '\S+\-(?:child|type\()|not\([[:ascii:]]*\)';
    /**
     * @var string
     */
    const CONTENT_TYPE_META_TAG = '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
    /**
     * @var string
     */
    const DEFAULT_DOCUMENT_TYPE = '<!DOCTYPE html>';
    /**
     * @var \DOMDocument
     */
    protected $domDocument = null;
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
    private $allowedMediaTypes = ['all' => true, 'screen' => true, 'print' => true];
    /**
     * @var mixed[]
     */
    private $caches = [self::CACHE_KEY_CSS => [], self::CACHE_KEY_SELECTOR => [], self::CACHE_KEY_CSS_DECLARATIONS_BLOCK => [], self::CACHE_KEY_COMBINED_STYLES => []];
    /**
     * @var CssSelectorConverter
     */
    private $cssSelectorConverter = null;
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
    private $isInlineStyleAttributesParsingEnabled = true;
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
    private $isStyleBlocksParsingEnabled = true;
    /**
     * Determines whether elements with the `display: none` property are
     * removed from the DOM.
     *
     * @var bool
     */
    private $shouldRemoveInvisibleNodes = true;
    /**
     * For calculating selector precedence order.
     * Keys are a regular expression part to match before a CSS name.
     * Values are a multiplier factor per match to weight specificity.
     *
     * @var int[]
     */
    private $selectorPrecedenceMatchers = [
        // IDs: worth 10000
        '\#' => 10000,
        // classes, attributes, pseudo-classes (not pseudo-elements) except `:not`: worth 100
        '(?:\.|\[|(?<!:):(?!not\())' => 100,
        // elements (not attribute values or `:not`), pseudo-elements: worth 1
        '(?:(?<![="\':\w\-])|::)' => 1,
    ];
    /**
     * Emogrifier will throw Exceptions when it encounters an error instead of silently ignoring them.
     *
     * @var bool
     */
    private $debug = false;
    /**
     * @param string $unprocessedHtml raw HTML, must be UTF-encoded, must not be empty
     *
     * @throws \InvalidArgumentException if $unprocessedHtml is anything other than a non-empty string
     */
    public function __construct($unprocessedHtml)
    {
    }
    /**
     * Sets the HTML to process.
     *
     * @param string $html the HTML to process, must be UTF-8-encoded
     *
     * @return void
     */
    private function setHtml($html)
    {
    }
    /**
     * Provides access to the internal DOMDocument representation of the HTML in its current state.
     *
     * @return \DOMDocument
     */
    public function getDomDocument()
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
     * Renders the normalized and processed HTML.
     *
     * @return string
     */
    public function render()
    {
    }
    /**
     * Renders the content of the BODY element of the normalized and processed HTML.
     *
     * @return string
     */
    public function renderBodyContent()
    {
    }
    /**
     * Returns the BODY element.
     *
     * This method assumes that there always is a BODY element.
     *
     * @return \DOMElement
     */
    private function getBodyElement()
    {
    }
    /**
     * Returns the HEAD element.
     *
     * This method assumes that there always is a HEAD element.
     *
     * @return \DOMElement
     */
    private function getHeadElement()
    {
    }
    /**
     * Applies $this->css to the given HTML and returns the HTML with the CSS
     * applied.
     *
     * This method places the CSS inline.
     *
     * @return string
     *
     * @throws SyntaxErrorException
     */
    public function emogrify()
    {
    }
    /**
     * Applies $this->css to the given HTML and returns only the HTML content
     * within the <body> tag.
     *
     * This method places the CSS inline.
     *
     * @return string
     *
     * @throws SyntaxErrorException
     */
    public function emogrifyBodyContent()
    {
    }
    /**
     * Creates a DOM document from the given HTML and stores it in $this->domDocument.
     *
     * The DOM document will always have a BODY element and a document type.
     *
     * @param string $html
     *
     * @return void
     */
    private function createUnifiedDomDocument($html)
    {
    }
    /**
     * Creates a DOMDocument instance from the given HTML and stores it in $this->domDocument.
     *
     * @param string $html
     *
     * @return void
     */
    private function createRawDomDocument($html)
    {
    }
    /**
     * Returns the HTML with added document type and Content-Type meta tag if needed,
     * ensuring that the HTML will be good for creating a DOM document from it.
     *
     * @param string $html
     *
     * @return string the unified HTML
     */
    private function prepareHtmlForDomConversion($html)
    {
    }
    /**
     * Applies $this->css to $this->domDocument.
     *
     * This method places the CSS inline.
     *
     * @return void
     *
     * @throws SyntaxErrorException
     */
    protected function process()
    {
    }
    /**
     * Applies some optional post-processing to the HTML in the DOM document.
     *
     * @param \DOMXPath $xPath
     *
     * @return void
     */
    private function postProcess(\DOMXPath $xPath)
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
     * Extracts and parses the individual rules from a CSS string.
     *
     * @param string $css a string of raw CSS code
     *
     * @return string[][][] A 2-entry array with the key "inlineable" containing rules which can be inlined as `style`
     *         attributes and the key "uninlineable" containing rules which cannot.  Each value is an array of string
     *         sub-arrays with the keys
     *         "media" (the media query string, e.g. "@media screen and (max-width: 480px)",
     *         or an empty string if not from a `@media` rule),
     *         "selector" (the CSS selector, e.g., "*" or "header h1"),
     *         "hasUnmatchablePseudo" (true if that selector contains psuedo-elements or dynamic pseudo-classes
     *         such that the declarations cannot be applied inline),
     *         "declarationsBlock" (the semicolon-separated CSS declarations for that selector,
     *         e.g., "color: red; height: 4px;"),
     *         and "line" (the line number e.g. 42)
     */
    private function parseCssRules($css)
    {
    }
    /**
     * Parses a string of CSS into the media query, selectors and declarations for each ruleset in order.
     *
     * @param string $css
     *
     * @return string[][] Array of string sub-arrays with the keys
     *         "media" (the media query string, e.g. "@media screen and (max-width: 480px)",
     *         or an empty string if not from an `@media` rule),
     *         "selectors" (the CSS selector(s), e.g., "*" or "h1, h2"),
     *         "declarations" (the semicolon-separated CSS declarations for that/those selector(s),
     *         e.g., "color: red; height: 4px;"),
     */
    private function getCssRuleMatches($css)
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
     * @deprecated will be removed in Emogrifier 3.0
     *
     * @return void
     */
    public function disableInvisibleNodeRemoval()
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
     * Applies $cssRules to $this->domDocument, limited to the rules that actually apply to the document.
     *
     * @param \DOMXPath $xPath
     * @param string[][] $cssRules The "uninlineable" array of CSS rules returned by `parseCssRules`
     *
     * @return void
     */
    private function copyUninlineableCssToStyleNode(\DOMXPath $xPath, array $cssRules)
    {
    }
    /**
     * Removes pseudo-elements and dynamic pseudo-classes from a CSS selector, replacing them with "*" if necessary.
     *
     * @param string $selector
     *
     * @return string Selector which will match the relevant DOM elements if the pseudo-classes are assumed to apply,
     *                or in the case of pseudo-elements will match their originating element.
     */
    private function removeUnmatchablePseudoComponents($selector)
    {
    }
    /**
     * Copies $cssRule into the style attribute of $node.
     *
     * Note: This method does not check whether $cssRule matches $node.
     *
     * @param \DOMElement $node
     * @param string[][] $cssRule
     *
     * @return void
     */
    private function copyInlineableCssToStyleAttribute(\DOMElement $node, array $cssRule)
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
     * @throws SyntaxErrorException
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
     * Adds a style element with $css to $this->domDocument.
     *
     * This method is protected to allow overriding.
     *
     * @see https://github.com/jjriv/emogrifier/issues/103
     *
     * @param string $css
     *
     * @return void
     */
    protected function addStyleElementToDocument($css)
    {
    }
    /**
     * Checks that $this->domDocument has a BODY element and adds it if it is missing.
     *
     * @return void
     */
    private function ensureExistenceOfBodyElement()
    {
    }
    /**
     * Splits input CSS code into an array of parts for different media querues, in order.
     * Each part is an array where:
     *
     * - key "css" will contain clean CSS code (for @media rules this will be the group rule body within "{...}")
     * - key "media" will contain "@media " followed by the media query list, for all allowed media queries,
     *   or an empty string for CSS not within a media query
     *
     * Example:
     *
     * The CSS code
     *
     *   "@import "file.css"; h1 { color:red; } @media { h1 {}} @media tv { h1 {}}"
     *
     * will be parsed into the following array:
     *
     *   0 => [
     *     "css" => "h1 { color:red; }",
     *     "media" => ""
     *   ],
     *   1 => [
     *     "css" => " h1 {}",
     *     "media" => "@media "
     *   ]
     *
     * @param string $css
     *
     * @return string[][]
     */
    private function splitCssAndMediaQuery($css)
    {
    }
    /**
     * Removes empty unprocessable tags from the DOM document.
     *
     * @return void
     */
    private function removeUnprocessableTags()
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
     * This method also ensures that there is a HEAD element.
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
     * @throws SyntaxErrorException
     */
    private function getNodesToExclude(\DOMXPath $xPath)
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