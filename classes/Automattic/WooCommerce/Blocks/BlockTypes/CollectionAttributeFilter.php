<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CollectionAttributeFilter class.
 */
final class CollectionAttributeFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'collection-attribute-filter';
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
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Render the dropdown.
     *
     * @param array $options    Data to render the dropdown.
     * @param bool  $attributes Block attributes.
     */
    private function render_attribute_dropdown($options, $attributes)
    {
    }
    /**
     * Render the list.
     *
     * @param array $options    Data to render the list.
     * @param bool  $attributes Block attributes.
     */
    private function render_attribute_list($options, $attributes)
    {
    }
    /**
     * Render the list item.
     *
     * @param array $option      Data to render the list item.
     * @param bool  $show_counts Whether to display the count.
     */
    private function render_list_item_template($option, $show_counts)
    {
    }
}