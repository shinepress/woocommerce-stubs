<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductFilters class.
 */
class ProductFiltersOverlayNavigation extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filters-overlay-navigation';
    /**
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Gets the icon to render depending on the triggerType attribute.
     *
     * @param array $attributes Block attributes.
     *
     * @return string Label to render on the block
     */
    private function render_icon($attributes)
    {
    }
    /**
     * Gets the label to render depending on the triggerType.
     *
     * @param array $attributes Block attributes.
     *
     * @return string Label to render on the block
     */
    private function render_label($attributes)
    {
    }
}