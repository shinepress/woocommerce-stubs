<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Block type for quantity selector in add to cart with options.
 */
class QuantitySelector extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-quantity-selector';
    /**
     * Render the block.
     *
     * The selector is hidden for:
     * - Simple products that are out of stock.
     * - Not purchasable simple products.
     * - External products with URLs
     * - Products sold individually
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
}