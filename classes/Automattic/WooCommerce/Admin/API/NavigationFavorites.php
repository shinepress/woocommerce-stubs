<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * REST API Favorites controller class.
 *
 * @internal
 * @extends WC_REST_CRUD_Controller
 */
class NavigationFavorites extends \WC_REST_Data_Controller
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
    protected $rest_base = 'navigation/favorites';
    /**
     * Error code to status code mapping.
     *
     * @var array
     */
    protected $error_to_status_map = array('woocommerce_favorites_invalid_request' => 400, 'woocommerce_favorites_already_exists' => 409, 'woocommerce_favorites_does_not_exist' => 404, 'woocommerce_favorites_invalid_user' => 400, 'woocommerce_favorites_unauthenticated' => 401);
    /**
     * Register the routes
     */
    public function register_routes()
    {
    }
    /**
     * Get all favorites.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Add a favorite.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function add_item($request)
    {
    }
    /**
     * Delete a favorite.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function delete_item($request)
    {
    }
    /**
     * Check whether a given request has permission to create favorites.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function add_item_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to delete notes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Always allow for operations that only impact current user
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function current_user_permissions_check($request)
    {
    }
    /**
     * Accept an instance of WP_Error and add the appropriate data for REST transit.
     *
     * @param  WP_Error $error Error to prepare.
     * @return WP_Error
     */
    protected function prepare_error($error)
    {
    }
}