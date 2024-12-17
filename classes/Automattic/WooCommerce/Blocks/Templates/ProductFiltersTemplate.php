<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductFiltersTemplate class.
 *
 * @internal
 */
class ProductFiltersTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplatePart
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    const SLUG = 'product-filters';
    /**
     * The template part area where the template part belongs.
     *
     * @var string
     */
    public $template_area = 'uncategorized';
    /**
     * Initialization method.
     */
    public function init()
    {
    }
    /**
     * Returns the title of the template.
     *
     * @return string
     */
    public function get_template_title()
    {
    }
    /**
     * Returns the description of the template.
     *
     * @return string
     */
    public function get_template_description()
    {
    }
    /**
     * Add variation for this template part to make it available in the block inserter.
     *
     * @param array         $variations Array of registered variations for a block type.
     * @param WP_Block_Type $block_type The full block type object.
     */
    public function register_block_type_variation($variations, $block_type)
    {
    }
}