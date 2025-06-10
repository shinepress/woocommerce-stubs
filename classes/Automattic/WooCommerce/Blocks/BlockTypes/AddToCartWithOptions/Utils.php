<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Utility methods used for the Add to Cart with Options block.
 * {@internal This class and its methods are not intended for public use.}
 */
class Utils
{
    /**
     * Add increment and decrement buttons to the quantity input field.
     *
     * @param string $quantity_html Quantity input HTML.
     * @param string $product_name Product name.
     * @return string Quantity input HTML with increment and decrement buttons.
     */
    public static function add_quantity_steppers($quantity_html, $product_name)
    {
    }
    /**
     * Add classes to the Quantity Selector needed for the stepper style.
     *
     * @param string $quantity_html The Quantity Selector HTML.
     *
     * @return string The Quantity Selector HTML with classes added.
     */
    public static function add_quantity_stepper_classes($quantity_html)
    {
    }
    /**
     * Get standardized quantity input arguments for WooCommerce quantity input.
     *
     * @param \WC_Product $product The product object.
     * @return array Arguments for woocommerce_quantity_input().
     */
    public static function get_quantity_input_args($product)
    {
    }
    /**
     * Make the quantity input interactive by wrapping it with the necessary data attribute.
     *
     * @param string $quantity_html The quantity HTML.
     * @param string $wrapper_attributes Optional wrapper attributes.
     * @return string The quantity HTML with interactive wrapper.
     */
    public static function make_quantity_input_interactive($quantity_html, $wrapper_attributes = '')
    {
    }
    /**
     * Get product from block context.
     *
     * @param \WP_Block        $block The block instance.
     * @param \WC_Product|null $previous_product The previous product (usually from global scope).
     * @return \WC_Product|null The product instance or null if not found.
     */
    public static function get_product_from_context($block, $previous_product)
    {
    }
    /**
     * Check if a product is a simple product that is not purchasable or not in stock.
     *
     * @param \WC_Product $product The product to check.
     * @return bool True if the product is a simple product that is not purchasable or not in stock.
     */
    public static function is_not_purchasable_simple_product($product)
    {
    }
    /**
     * Renders a new block with custom context
     *
     * @param WP_Block $block The block instance.
     * @param array    $context The context for the new block.
     * @return string Rendered block content
     */
    public static function render_block_with_context($block, $context)
    {
    }
}