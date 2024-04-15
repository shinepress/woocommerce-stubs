<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductCatalogTemplate class.
 *
 * @internal
 */
class ProductCatalogTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    const SLUG = 'archive-product';
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
     * Renders the default block template from Woo Blocks if no theme templates exist.
     */
    public function render_block_template()
    {
    }
    /**
     * Update the product archive title to "Shop".
     *
     * @param string $post_type_name Post type 'name' label.
     * @param string $post_type      Post type.
     *
     * @return string
     */
    public function update_product_archive_title($post_type_name, $post_type)
    {
    }
}