<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Classic Template class
 *
 * @internal
 */
class ClassicTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractDynamicBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'legacy-template';
    /**
     * API version.
     *
     * @var string
     */
    protected $api_version = '2';
    const FILTER_PRODUCTS_BY_STOCK_QUERY_PARAM = 'filter_stock_status';
    /**
     * Initialize this block.
     */
    protected function initialize()
    {
    }
    /**
     * Enqueue assets used for rendering the block in editor context.
     *
     * This is needed if a block is not yet within the post content--`render` and `enqueue_assets` may not have ran.
     */
    public function enqueue_block_assets()
    {
    }
    /**
     * Render method for the Classic Template block. This method will determine which template to render.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string | void Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Render method for rendering the order confirmation template.
     *
     * @return string Rendered block type output.
     */
    protected function render_order_received()
    {
    }
    /**
     * Render method for the single product template and parts.
     *
     * @return string Rendered block type output.
     */
    protected function render_single_product()
    {
    }
    /**
     * Render method for the archive product template and parts.
     *
     * @return string Rendered block type output.
     */
    protected function render_archive_product()
    {
    }
    /**
     * Get HTML markup with the right classes by attributes.
     * This function appends the classname at the first element that have the class attribute.
     * Based on the experience, all the wrapper elements have a class attribute.
     *
     * @param string $content Block content.
     * @param array  $block Parsed block data.
     * @return string Rendered block type output.
     */
    public function add_alignment_class_to_wrapper(string $content, array $block)
    {
    }
    /**
     * Filter products by stock status when as query param there is "filter_stock_status"
     *
     * @param array $meta_query Meta query.
     * @return array
     */
    public function filter_products_by_stock($meta_query)
    {
    }
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
}