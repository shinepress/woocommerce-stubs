<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\Reviews;

/**
 * ProductReviewsPaginationPrevious class.
 */
class ProductReviewsPaginationPrevious extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-reviews-pagination-previous';
    /**
     * Render the block.
     *
     * @param array     $attributes Block attributes.
     * @param string    $content    Block content.
     * @param \WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Get the pagination arrow.
     *
     * @param \WP_Block $block Block instance.
     * @return string|null
     */
    protected function get_pagination_arrow($block)
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
     * Get the frontend style handle for this block type.
     *
     * @return string|null
     */
    protected function get_block_type_style()
    {
    }
}