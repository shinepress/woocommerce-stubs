<?php


/**
 * REST API Tax Classes controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Tax_Classes_V1_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'taxes/classes';
    /**
     * Register the routes for tax classes.
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to read tax classes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access create tax classes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function create_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access delete a tax.
     *
     * @param  WP_REST_Request $request Full details about the request.
     *
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
    {
    }
    /**
     * Get all tax classes.
     *
     * @param WP_REST_Request $request
     * @return array
     */
    public function get_items($request)
    {
    }
    /**
     * Create a single tax class.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
    }
    /**
     * Delete a single tax class.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function delete_item($request)
    {
    }
    /**
     * Prepare a single tax class output for response.
     *
     * @param array $tax_class Tax class data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($tax_class, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @return array Links for the given tax class.
     */
    protected function prepare_links()
    {
    }
    /**
     * Get the Tax Classes schema, conforming to JSON Schema
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}