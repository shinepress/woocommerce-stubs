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
     * Render the chip item of an active filter.
     *
     * @param string $type Filter type.
     * @param array  $item Item data.
     * @return string Item HTML.
     */
    private function render_chip_item($type, $item)
    {
    }
    /**
     * Build HTML attributes string from assoc array.
     *
     * @param array $attributes Attributes data as an assoc array.
     * @return string Escaped HTML attributes string.
     */
    private function get_html_attributes($attributes)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return null
     */
    protected function get_block_type_script($key = null)
    {
    }
}