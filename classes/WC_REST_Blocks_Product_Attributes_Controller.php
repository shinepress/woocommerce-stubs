<?php


/**
 * REST API Product Attributes controller class.
 *
 * @package WooCommerce/API
 */
class WC_REST_Blocks_Product_Attributes_Controller extends \WC_REST_Product_Attributes_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-blocks/v1';
    /**
     * Register the routes for products.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to read the attributes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to read a attribute.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check permissions.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @param string          $context Request context.
     * @return bool|WP_Error
     */
    protected function check_permissions($request, $context = 'read')
    {
    }
    /**
     * Prepare a single product category output for response.
     *
     * @param WP_Term         $item    Term object.
     * @param WP_REST_Request $request Request instance.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Get the Product's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}