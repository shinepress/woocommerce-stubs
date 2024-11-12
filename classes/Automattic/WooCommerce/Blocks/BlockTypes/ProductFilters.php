<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductFilters class.
 */
class ProductFilters extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-filters';
    /**
     * Register the context.
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array())
    {
    }
    /**
     * Return the dialog content.
     *
     * @return string
     */
    protected function render_dialog()
    {
    }
    /**
     * This method is used to render the template part. For each template part, we parse the blocks and render them.
     *
     * @param string $template_part The template part to render.
     * @return string The rendered template part.
     */
    protected function render_template_part($template_part)
    {
    }
    /**
     * Inject dialog into the product filters HTML.
     *
     * @param string $product_filters_html The Product Filters HTML.
     * @param string $dialog_html The dialog HTML.
     *
     * @return string
     */
    protected function inject_dialog($product_filters_html, $dialog_html)
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
     * Generate a unique navigation ID for the block.
     *
     * @param mixed $block - Block instance.
     * @return string - Unique navigation ID.
     */
    private function generate_navigation_id($block)
    {
    }
    /**
     * Parse the filter parameters from the URL.
     * For now we only get the global query params from the URL. In the future,
     * we should get the query params based on $query_id.
     *
     * @param int $query_id Query ID.
     * @return array Parsed filter params.
     */
    private function get_filter_query_params($query_id)
    {
    }
}