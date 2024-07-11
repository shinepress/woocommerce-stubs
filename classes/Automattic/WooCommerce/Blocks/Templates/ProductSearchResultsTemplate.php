<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ProductSearchResultsTemplate class.
 *
 * @internal
 */
class ProductSearchResultsTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractTemplate
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    const SLUG = 'product-search-results';
    /**
     * The template used as a fallback if that one is customized.
     *
     * @var string
     */
    public $fallback_template = \Automattic\WooCommerce\Blocks\Templates\ProductCatalogTemplate::SLUG;
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
     * When the search is for products and a block theme is active, render the Product Search Template.
     *
     * @param array $templates Templates that match the search hierarchy.
     */
    public function update_search_template_hierarchy($templates)
    {
    }
}