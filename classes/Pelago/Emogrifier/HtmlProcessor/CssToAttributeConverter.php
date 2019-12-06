<?php

namespace Pelago\Emogrifier\HtmlProcessor;

/**
 * This HtmlProcessor can convert style HTML attributes to the corresponding other visual HTML attributes,
 * e.g. it converts style="width: 100px" to width="100".
 *
 * It will only add attributes, but leaves the style attribute untouched.
 *
 * To trigger the conversion, call the convertCssToVisualAttributes method.
 *
 * @internal This class currently is a new technology preview, and its API is still in flux. Don't use it in production.
 *
 * @author Oliver Klee <github@oliverklee.de>
 */
class CssToAttributeConverter extends \Pelago\Emogrifier\HtmlProcessor\AbstractHtmlProcessor
{
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
     * @var string[][]
     */
    private static $parsedCssCache = [];
    /**
     * Maps the CSS from the style nodes to visual HTML attributes.
     *
     * @return CssToAttributeConverter fluent interface
     */
    public function convertCssToVisualAttributes()
    {
    }
    /**
     * Returns a list with all DOM nodes that have a style attribute.
     *
     * @return \DOMNodeList
     */
    private function getAllNodesWithStyleAttribute()
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
     * @return bool true if the property can be mapped using the simple mapping table
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
     * @param \DOMElement $node node to apply styles to
     * @param string $value the value of the style rule to map
     *
     * @return void
     */
    private function mapBackgroundProperty(\DOMElement $node, $value)
    {
    }
    /**
     * @param \DOMElement $node node to apply styles to
     * @param string $value the value of the style rule to map
     * @param string $property the name of the CSS property to map
     *
     * @return void
     */
    private function mapWidthOrHeightProperty(\DOMElement $node, $value, $property)
    {
    }
    /**
     * @param \DOMElement $node node to apply styles to
     * @param string $value the value of the style rule to map
     *
     * @return void
     */
    private function mapMarginProperty(\DOMElement $node, $value)
    {
    }
    /**
     * @param \DOMElement $node node to apply styles to
     * @param string $value the value of the style rule to map
     *
     * @return void
     */
    private function mapBorderProperty(\DOMElement $node, $value)
    {
    }
    /**
     * @param \DOMElement $node
     *
     * @return bool
     */
    private function isTableOrImageNode(\DOMElement $node)
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
}