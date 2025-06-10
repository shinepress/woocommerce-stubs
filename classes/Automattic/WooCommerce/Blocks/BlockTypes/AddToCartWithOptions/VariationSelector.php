<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * Block type for variation selector in add to cart with options.
 */
class VariationSelector extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options-variation-selector';
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
     * Add 'ajax_add_to_cart' support to a Variable Product.
     *
     * This is needed so the ProductButton block could add a Variable Product to
     * the Cart without a page refresh.
     *
     * @param  bool        $supports If features are already supported or not.
     * @param  string      $feature  The feature to check if is supported.
     * @param  \WC_Product $product  The product to check.
     * @return bool True if the product supports the feature, false otherwise.
     * @since  9.9.0
     */
    public function check_product_supports($supports, $feature, $product)
    {
    }
}