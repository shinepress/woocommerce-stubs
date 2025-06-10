<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\Reviews;

/**
 * ProductReviewTemplate class.
 */
class ProductReviewTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-review-template';
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
     * Function that recursively renders a list of nested reviews.
     *
     * @since 6.3.0 Changed render_block_context priority to `1`.
     *
     * @param WP_Comment[] $comments        The array of comments.
     * @param WP_Block     $block           Block instance.
     * @return string
     */
    protected function block_product_review_template_render_comments($comments, $block)
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     * @return string Rendered block content.
     */
    protected function render($attributes, $content, $block)
    {
    }
}