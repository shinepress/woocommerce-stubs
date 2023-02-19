<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Loads assets related to the new product management experience page.
 */
class NewProductManagementExperience
{
    /**
     * Option name used to toggle this feature.
     */
    const TOGGLE_OPTION_NAME = 'woocommerce_new_product_management_enabled';
    /**
     * Constructor
     */
    public function __construct()
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
}