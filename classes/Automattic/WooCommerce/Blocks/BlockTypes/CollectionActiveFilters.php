<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CollectionAttributeFilter class.
 */
final class CollectionActiveFilters extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'collection-active-filters';
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
     * Render the list items.
     *
     * @param array  $items Items data.
     * @param string $style Display style: list | chips.
     */
    private function render_items($items, $style)
    {
    }
    /**
     * Render the list item of an active filter.
     *
     * @param array $args Item data.
     * @return string Item HTML.
     */
    private function render_list_item($args)
    {
    }
    /**
     * Render the chip item of an active filter.
     *
     * @param array $args Item data.
     * @return string Item HTML.
     */
    private function render_chip_item($args)
    {
    }
    /**
     * Build HTML attributes string from assoc array.
     *
     * @param array $attributes Attributes data as an assoc array.
     * @return string Escaped HTML attributes string.
     */
    private function get_html_attributes($attributes)
    {
    }
    /**
     * Parse the filter parameters from the URL.
     * For now we only get the global query params from the URL. In the future,
     * we should get the query params based on $query_id.
     *
     * @param int $query_id Query ID.
     * @return array Parsed filter params.
     */
    private function get_filter_query_params($query_id)
    {
    }
}