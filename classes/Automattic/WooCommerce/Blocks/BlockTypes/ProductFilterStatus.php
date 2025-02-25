<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Status Block.
 */
final class ProductFilterStatus extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-status';
    const STOCK_STATUS_QUERY_VAR = 'filter_stock_status';
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
    {
    }
    /**
     * Register the query param keys.
     *
     * @param array $filter_param_keys The active filters data.
     * @param array $url_param_keys    The query param parsed from the URL.
     *
     * @return array Active filters param keys.
     */
    public function get_filter_query_param_keys($filter_param_keys, $url_param_keys)
    {
    }
    /**
     * Register the active filters data.
     *
     * @param array $data   The active filters data.
     * @param array $params The query param parsed from the URL.
     * @return array Active filters data.
     */
    public function register_active_filters_data($data, $params)
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $stock_statuses  Any stock statuses that currently are available from the block.
     *                               Note, this will be empty in the editor context when the block is
     *                               not in the post content on editor load.
     */
    protected function enqueue_data(array $stock_statuses = array())
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
    /**
     * Retrieve the status filter data for current block.
     *
     * @param WP_Block $block Block instance.
     */
    private function get_stock_status_counts($block)
    {
    }
}