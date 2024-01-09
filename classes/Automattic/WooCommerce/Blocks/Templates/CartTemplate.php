<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * CartTemplate class.
 *
 * @internal
 */
class CartTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
{
    /**
     * Template slug.
     *
     * @return string
     */
    public static function get_slug()
    {
    }
    /**
     * Returns the page object assigned to this template/page.
     *
     * @return \WP_Post|null Post object or null.
     */
    protected function get_placeholder_page()
    {
    }
    /**
     * True when viewing the cart page or cart endpoint.
     *
     * @return boolean
     */
    protected function is_active_template()
    {
    }
    /**
     * When the page should be displaying the template, add it to the hierarchy.
     *
     * This places the template name e.g. `cart`, at the beginning of the template hierarchy array. The hook priority
     * is 1 to ensure it runs first; other consumers e.g. extensions, could therefore inject their own template instead
     * of this one when using the default priority of 10.
     *
     * @param array $templates Templates that match the pages_template_hierarchy.
     */
    public function page_template_hierarchy($templates)
    {
    }
}