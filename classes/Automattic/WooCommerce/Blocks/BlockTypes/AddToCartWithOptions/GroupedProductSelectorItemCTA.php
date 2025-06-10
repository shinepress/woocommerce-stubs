<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Block type for the CTA of grouped product selector items in add to cart with options.
 * It's responsible to render the CTA for each child product, that might be a button,
 * a checkbox, or a link.
 */
class GroupedProductSelectorItemCTA extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-grouped-product-selector-item-cta';
    /**
     * Gets the quantity selector markup for a product.
     *
     * @param \WC_Product $product The product object.
     * @return string The HTML markup for the quantity selector.
     */
    private function get_quantity_selector_markup($product)
    {
    }
    /**
     * Gets the add to cart button markup for a product.
     *
     * @param \WC_Product $product_to_render The product object.
     * @return string The HTML markup for the add to cart button.
     */
    private function get_button_markup($product_to_render)
    {
    }
    /**
     * Gets the checkbox markup for a product.
     *
     * @param \WC_Product $product The product object.
     * @return string The HTML markup for the checkbox input and label.
     */
    private function get_checkbox_markup($product)
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