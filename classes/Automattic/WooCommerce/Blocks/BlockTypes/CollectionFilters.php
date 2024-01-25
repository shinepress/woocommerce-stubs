<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CollectionFilters class.
 */
final class CollectionFilters extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'collection-filters';
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
    /**
     * Get formatted products params for ProductCollectionData route from the
     * query context.
     *
     * @param array $query The query context.
     * @return array
     */
    private function get_formatted_products_params($query)
    {
    }
}