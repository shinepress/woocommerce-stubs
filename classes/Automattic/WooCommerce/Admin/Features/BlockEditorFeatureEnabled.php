<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Loads assets related to the new product management experience page.
 */
class BlockEditorFeatureEnabled
{
    const FEATURE_ID = 'block-editor-feature-enabled';
    /**
     * Option name used to toggle this feature.
     */
    const TOGGLE_OPTION_NAME = 'woocommerce_' . self::FEATURE_ID . '_enabled';
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
     * Updates the product endpoint to use WooCommerce REST API.
     *
     * @param array $post_args Args for the product post type.
     * @return array
     */
    public function add_rest_base_config($post_args)
    {
    }
}