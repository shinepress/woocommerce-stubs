<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Block type for grouped product selector in add to cart with options.
 */
class GroupedProductSelector extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-grouped-product-selector';
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