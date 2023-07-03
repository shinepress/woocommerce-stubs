<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Loads assets related to the product block editor.
 */
class Init
{
    /**
     * The context name used to identify the editor.
     */
    const EDITOR_CONTEXT_NAME = 'woocommerce/edit-product';
    /**
     * Constructor
     */
    public function __construct()
    {
    }
    /**
     * Enqueue scripts needed for the product form block editor.
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Enqueue styles needed for the rich text editor.
     */
    public function enqueue_styles()
    {
    }
    /**
     * Update the edit product links when the new experience is enabled.
     *
     * @param string $link    The edit link.
     * @param int    $post_id Post ID.
     * @return string
     */
    public function update_edit_product_link($link, $post_id)
    {
    }
    /**
     * Get the resolved assets needed for the iframe editor.
     *
     * @return array Styles and scripts.
     */
    private function get_resolved_assets()
    {
    }
    /**
     * Enqueue styles needed for the rich text editor.
     *
     * @param array $args Array of post type arguments.
     * @return array Array of post type arguments.
     */
    public function add_product_template($args)
    {
    }
}