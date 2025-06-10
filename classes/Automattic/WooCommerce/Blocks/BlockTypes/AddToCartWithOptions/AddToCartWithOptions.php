<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\AddToCartWithOptions;

/**
 * AddToCartWithOptions class.
 */
class AddToCartWithOptions extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-with-options';
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Get template part IDs for each product type.
     *
     * @return array Array of product types with their corresponding template part IDs.
     */
    protected function get_template_part_ids()
    {
    }
    /**
     * Modifies the block context for product button blocks when inside the Add to Cart with Options block.
     *
     * @param array $context The block context.
     * @param array $block   The parsed block.
     * @return array Modified block context.
     */
    public function set_is_descendant_of_add_to_cart_with_options_context($context, $block)
    {
    }
    /**
     * Render the block.
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