<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Settings Controller.
 *
 * @extends WC_REST_Data_Controller
 */
class Settings extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'legacy-settings';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to update settings.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function save_items_permissions_check($request)
    {
    }
    /**
     * Save settings.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function save_settings($request)
    {
    }
    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function save_items_schema()
    {
    }
}