<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Product Filter: Removable Chips Block.
 */
final class ProductFilterRemovableChips extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filter-removable-chips';
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
     * Disable the block type script, this uses script modules.
     *
     * @param string|null $key The key.
     *
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
    }
}