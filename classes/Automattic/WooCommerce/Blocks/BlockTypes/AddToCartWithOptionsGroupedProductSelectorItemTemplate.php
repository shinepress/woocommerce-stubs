<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Block type for grouped product selector item in add to cart with options.
 * It's responsible to render each child product in a form of a list item.
 */
class AddToCartWithOptionsGroupedProductSelectorItemTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-grouped-product-selector-item';
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Get product row HTML.
     *
     * @param string   $product_id Product ID.
     * @param array    $attributes Block attributes.
     * @param WP_Block $block The Block.
     * @return string Row HTML
     */
    private function get_product_row($product_id, $attributes, $block): string
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
}