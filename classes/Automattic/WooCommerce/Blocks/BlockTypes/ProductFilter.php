<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter Block.
 */
final class ProductFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter';
    /**
     * Cache the current response from the API.
     *
     * @var array
     */
    private $current_response = null;
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string|null
     */
    protected function get_block_type_script($key = null)
    {
    }
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
     * Check if the collection data is empty.
     *
     * @param mixed $attributes - Block attributes.
     * @return bool - Whether the collection data is empty.
     */
    private function collection_data_is_empty($attributes)
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
     * Reset the current response, must be done before rendering.
     *
     * @return void
     */
    private function reset_current_response()
    {
    }
    /**
     * Render the block when it's empty.
     *
     * @param mixed $block  - Block instance.
     * @return string - Rendered block type output.
     */
    private function render_empty_block($block)
    {
    }
    /**
     * Generate a unique navigation ID for the block.
     *
     * @param mixed $block - Block instance.
     * @return string - Unique navigation ID.
     */
    private function generate_navigation_id($block)
    {
    }
    /**
     * Render the block when it's not empty.
     *
     * @param string   $content - Block content.
     * @param WP_Block $block   - Block instance.
     * @return string - Rendered block type output.
     */
    private function render_filter_block($content, $block)
    {
    }
    /**
     * Modify the context of inner blocks.
     *
     * @param array    $context The block context.
     * @param array    $parsed_block The parsed block.
     * @param WP_Block $parent_block The parent block.
     * @return array
     */
    public function modify_inner_blocks_context($context, $parsed_block, $parent_block)
    {
    }
    /**
     * Get the aggregated collection data from the API.
     * Loop through inner blocks and build a query string to pass to the API.
     *
     * @param WP_Block $block The block instance.
     * @return array
     */
    private function get_aggregated_collection_data($block)
    {
    }
    /**
     * Remove query array from tax or meta query by searching for arrays that
     * contain exact key => value pair.
     *
     * @param array  $queries tax_query or meta_query.
     * @param string $key     Array key to search for.
     * @param mixed  $value   Value to compare with search result.
     *
     * @return array
     */
    private function remove_query_array($queries, $key, $value)
    {
    }
    /**
     * Get all inner blocks recursively.
     *
     * @param WP_Block_List $inner_blocks The block to get inner blocks from.
     * @param array         $results      The results array.
     *
     * @return array
     */
    private function get_inner_collection_data_params($inner_blocks, &$results = array())
    {
    }
}