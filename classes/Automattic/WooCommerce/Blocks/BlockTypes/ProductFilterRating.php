<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Rating Block
 *
 * @package Automattic\WooCommerce\Blocks\BlockTypes
 */
final class ProductFilterRating extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-rating';
    const RATING_FILTER_QUERY_VAR = 'rating_filter';
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
     * Render the rating label.
     *
     * @param int    $rating The rating to render.
     * @param string $count_label The count label to render.
     * @return string|false
     */
    private function render_rating_label($rating, $count_label)
    {
    }
    /**
     * Get the Rating list items.
     *
     * @param array $ratings     - The rating counts.
     * @param array $selected    - an array of selected ratings.
     * @param bool  $with_counts - Whether to show the counts.
     * @return array The rating items.
     */
    private function get_rating_items($ratings, $selected, $with_counts)
    {
    }
    /**
     * Get the dropdown props.
     *
     * @param mixed  $rating_counts The rating counts.
     * @param mixed  $selected_ratings_query The url query param for selected ratings.
     * @param bool   $show_counts Whether to show the counts.
     * @param string $select_type The select type. (single|multiple).
     * @return array<array-key, array>
     */
    private function get_dropdown_props($rating_counts, $selected_ratings_query, $show_counts, $select_type)
    {
    }
    /**
     * Retrieve the rating filter data for current block.
     *
     * @param WP_Block $block Block instance.
     */
    private function get_rating_counts($block)
    {
    }
}