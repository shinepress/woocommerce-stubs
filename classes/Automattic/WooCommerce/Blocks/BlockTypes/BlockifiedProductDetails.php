<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * BlockifiedProductDetails class.
 */
class BlockifiedProductDetails extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'blockified-product-details';
    /**
     * Get the frontend style handle for this block type.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Hide empty accordion items.
     *
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string Rendered block output.
     */
    private function hide_empty_accordion_items($content, $block)
    {
    }
    /**
     * Find accordion items.
     *
     * @param array $block Block instance.
     *
     * @return array|false Accordion items.
     */
    private function find_accordion_items($block)
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
}