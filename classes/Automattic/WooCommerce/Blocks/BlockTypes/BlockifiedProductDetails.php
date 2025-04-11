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
}