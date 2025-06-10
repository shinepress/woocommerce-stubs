<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Block type for variation selector attribute options in add to cart with options.
 * It's responsible to render the attribute options.
 */
class VariationSelectorAttributeOptions extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-variation-selector-attribute-options';
    /**
     * Get the block's attributes.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return array  Block attributes merged with defaults.
     */
    private function parse_attributes($attributes)
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     * @return string Rendered block output.
     */
    protected function render($attributes, $content, $block): string
    {
    }
    /**
     * Get the normalized version of the attributes.
     *
     * @param array $attributes         The element's attributes.
     * @param array $default_attributes The element's default attributes.
     * @return string The HTML element's attributes.
     */
    public static function get_normalized_attributes($attributes, $default_attributes = array())
    {
    }
    /**
     * Get the default selected attribute.
     *
     * @param array $attribute_terms The attribute's.
     * @return string|null The default selected attribute.
     */
    protected function get_default_selected_attribute($attribute_terms)
    {
    }
    /**
     * Render the attribute options as pills.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     * @return string The pills.
     */
    protected function render_pills($attributes, $content, $block)
    {
    }
    /**
     * Render the attribute options as a dropdown.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     * @return string The dropdown.
     */
    protected function render_dropdown($attributes, $content, $block)
    {
    }
}