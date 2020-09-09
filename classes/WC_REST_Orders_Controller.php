<?php


/**
 * REST API Orders controller class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Orders_V2_Controller
 */
class WC_REST_Orders_Controller extends \WC_REST_Orders_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Calculate coupons.
     *
     * @throws WC_REST_Exception When fails to set any item.
     * @param WP_REST_Request $request Request object.
     * @param WC_Order        $order   Order data.
     * @return bool
     */
    protected function calculate_coupons($request, $order)
    {
    }
    /**
     * Prepare a single order for create or update.
     *
     * @throws WC_REST_Exception When fails to set any item.
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = \false)
    {
    }
    /**
     * Save an object data.
     *
     * @since  3.0.0
     * @throws WC_REST_Exception But all errors are validated before returning any data.
     * @param  WP_REST_Request $request  Full details about the request.
     * @param  bool            $creating If is creating a new object.
     * @return WC_Data|WP_Error
     */
    protected function save_object($request, $creating = \false)
    {
    }
    /**
     * Prepare objects query.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Get the Order's schema, conforming to JSON Schema.
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