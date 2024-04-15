<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CustomerAccount class.
 */
class CustomerAccount extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    const TEXT_ONLY = 'text_only';
    const ICON_ONLY = 'icon_only';
    const DISPLAY_ALT = 'alt';
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'customer-account';
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
     * Gets the icon to render depending on the iconStyle and displayStyle.
     *
     * @param array $attributes Block attributes.
     *
     * @return string Label to render on the block
     */
    private function render_icon($attributes)
    {
    }
    /**
     * Gets the label to render depending on the displayStyle.
     *
     * @param array $attributes Block attributes.
     *
     * @return string Label to render on the block.
     */
    private function render_label($attributes)
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     *
     * @return null This block has no frontend script.
     */
    protected function get_block_type_script($key = null)
    {
    }
}