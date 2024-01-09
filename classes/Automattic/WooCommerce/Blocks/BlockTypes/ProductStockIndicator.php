<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductStockIndicator class.
 */
class ProductStockIndicator extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-stock-indicator';
    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '2';
    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
    {
    }
    /**
     * Register the context.
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Get stock text based on stock. For example:
     * - In stock
     * - Out of stock
     * - Available on backorder
     * - 2 left in stock
     *
     * @param [bool]     $is_in_stock Whether the product is in stock.
     * @param [bool]     $is_low_stock Whether the product is low in stock.
     * @param [int|null] $low_stock_amount The amount of stock that is considered low.
     * @param [bool]     $is_on_backorder Whether the product is on backorder.
     * @return string Stock text.
     */
    protected static function getTextBasedOnStock($is_in_stock, $is_low_stock, $low_stock_amount, $is_on_backorder)
    {
    }
    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
}