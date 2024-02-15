<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductTemplate class.
 */
class ProductTemplate extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-template';
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Determines whether a block list contains a block that uses the featured image.
     *
     * @param WP_Block_List $inner_blocks Inner block instance.
     *
     * @return bool Whether the block list contains a block that uses the featured image.
     */
    protected function block_core_post_template_uses_featured_image($inner_blocks)
    {
    }
}