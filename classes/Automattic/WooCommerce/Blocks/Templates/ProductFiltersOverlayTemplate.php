<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductFiltersOverlayTemplate class.
 *
 * @internal
 */
class ProductFiltersOverlayTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplatePart
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    const SLUG = 'product-filters-overlay';
    /**
     * The template part area where the template part belongs.
     *
     * @var string
     */
    public $template_area = 'product-filters-overlay';
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
     * Add Filters Overlay to the default template part areas.
     *
     * @param array $default_area_definitions An array of supported area objects.
     * @return array The supported template part areas including the Filters Overlay one.
     */
    public function register_product_filters_overlay_template_part_area($default_area_definitions)
    {
    }
}