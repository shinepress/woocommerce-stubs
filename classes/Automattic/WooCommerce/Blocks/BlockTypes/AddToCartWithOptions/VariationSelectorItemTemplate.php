<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Block type for variation selector item in add to cart with options.
 * It's responsible to render each child attribute in a form of a list item.
 */
class VariationSelectorItemTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-variation-selector-item';
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
     * Get product row HTML.
     *
     * @param string   $product_attribute_name Product Attribute Name.
     * @param array    $product_attribute_terms Product Attribute Terms.
     * @param WP_Block $block The Block.
     * @return string Row HTML
     */
    private function get_product_row($product_attribute_name, $product_attribute_terms, $block): string
    {
    }
    /**
     * Get product attributes terms.
     *
     * @param string $attribute_name Product Attribute Name.
     * @param array  $attribute_terms Product Attribute Terms.
     * @return array[] Array of term data with structure:
     *                 [
     *                     'label'      => (string) Display label for the term.
     *                     'value'      => (string) Internal value/slug for the term.
     *                     'isSelected' => (bool)   Whether this term is the default selection.
     *                 ]
     */
    protected function get_terms($attribute_name, $attribute_terms)
    {
    }
}