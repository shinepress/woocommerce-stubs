<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTemplatesRegistry class.
 *
 * @internal
 */
class BlockTemplatesRegistry
{
    /**
     * The array of registered templates.
     *
     * @var AbstractTemplate[]|AbstractTemplatePart[]
     */
    private $templates = array();
    /**
     * Initialization method.
     */
    public function init()
    {
    }
    /**
     * Add Add to Cart with Options to the default template part areas.
     *
     * @param array $default_area_definitions An array of supported area objects.
     * @return array The supported template part areas including the Add to Cart with Options one.
     */
    public function register_add_to_cart_with_options_template_part_area($default_area_definitions)
    {
    }
    /**
     * Returns the template matching the slug
     *
     * @param string $template_slug Slug of the template to retrieve.
     *
     * @return AbstractTemplate|AbstractTemplatePart|null
     */
    public function get_template($template_slug)
    {
    }
}