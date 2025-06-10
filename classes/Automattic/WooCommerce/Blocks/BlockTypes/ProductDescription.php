<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * BlockifiedProductDetails class.
 */
class ProductDescription extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-description';
    /**
     * Keeps track of seen product IDs to prevent recursive rendering.
     *
     * @var array
     */
    private static $seen_ids = array();
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
     * Disable the frontend stylesheet for this block type. It does not have one.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Disable the frontend script for this block type. It does not have one.
     *
     * @param string|null $key The script key.
     *
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
    }
}