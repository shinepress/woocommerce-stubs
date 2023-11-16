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
     * Supported post types.
     *
     * @var array
     */
    private $supported_post_types = array('simple');
    /**
     * Redirection controller.
     *
     * @var RedirectionController
     */
    private $redirection_controller;
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
     * Dequeue conflicting styles.
     */
    public function dequeue_conflicting_styles()
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
     * Enqueue styles needed for the rich text editor.
     *
     * @param array $args Array of post type arguments.
     * @return array Array of post type arguments.
     */
    public function add_product_template($args)
    {
    }
    /**
     * Enables variation post type in REST API.
     *
     * @param array $args Array of post type arguments.
     * @return array Array of post type arguments.
     */
    public function enable_rest_api_for_product_variation($args)
    {
    }
    /**
     * Adds fields so that we can store user preferences for the variations block.
     *
     * @param array $user_data_fields User data fields.
     * @return array
     */
    public function add_user_data_fields($user_data_fields)
    {
    }
    /**
     * Sets the current screen to the block editor if a wc-admin page.
     */
    public function set_current_screen_to_block_editor_if_wc_admin()
    {
    }
}