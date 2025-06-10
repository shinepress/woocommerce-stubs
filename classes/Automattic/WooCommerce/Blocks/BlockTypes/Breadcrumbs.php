<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Breadcrumbs class.
 */
class Breadcrumbs extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'breadcrumbs';
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
     * Get the frontend script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Gets font size classes and styles for the breadcrumbs block.
     *
     * Note: This implementation intentionally avoids using StyleAttributesUtils::get_font_size_class_and_style()
     * and get_block_wrapper_attributes() to ensure style attributes take precedence over the class attribute fontSize.
     * This is needed because the block.json defines a default fontSize, which is considered an anti-pattern
     * since styles should be defined by themes and plugins instead.
     *
     * @param array $attributes The block attributes.
     * @return array The font size classes and styles.
     */
    private function get_font_size_classes_and_styles($attributes)
    {
    }
}