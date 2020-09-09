<?php


/**
 * REST API Settings controller class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Settings_V2_Controller
 */
class WC_REST_Settings_Controller extends \WC_REST_Settings_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Makes sure the current user has access to WRITE the settings APIs.
     *
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_Error|bool
     */
    public function update_items_permissions_check($request)
    {
    }
    /**
     * Update a setting.
     *
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
    }
    /**
     * Get the groups schema, conforming to JSON Schema.
     *
     * @since  3.0.0
     * @return array
     */
    public function get_item_schema()
    {
    }
}