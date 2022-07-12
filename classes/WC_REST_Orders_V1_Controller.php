<?php


/**
 * REST API Orders controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Posts_Controller
 */
class WC_REST_Orders_V1_Controller extends \WC_REST_Posts_Controller
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
    protected $rest_base = 'orders';
    /**
     * Post type.
     *
     * @var string
     */
    protected $post_type = 'shop_order';
    /**
     * Initialize orders actions.
     */
    public function __construct()
    {
    }
    /**
     * Register the routes for orders.
     */
    public function register_routes()
    {
    }
    /**
     * Prepare a single order output for response.
     *
     * @param WP_Post $post Post object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $data
     */
    public function prepare_item_for_response($post, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param WC_Order $order Order object.
     * @param WP_REST_Request $request Request object.
     * @return array Links for the given order.
     */
    protected function prepare_links($order, $request)
    {
    }
    /**
     * Query args.
     *
     * @param array $args
     * @param WP_REST_Request $request
     * @return array
     */
    public function query_args($args, $request)
    {
    }
    /**
     * Prepare a single order for create.
     *
     * @param  WP_REST_Request $request Request object.
     * @return WP_Error|WC_Order $data Object.
     */
    protected function prepare_item_for_database($request)
    {
    }
    /**
     * Create base WC Order object.
     * @deprecated 3.0.0
     * @param array $data
     * @return WC_Order
     */
    protected function create_base_order($data)
    {
    }
    /**
     * Only return writable props from schema.
     * @param  array $schema
     * @return bool
     */
    protected function filter_writable_props($schema)
    {
    }
    /**
     * Create order.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return int|WP_Error
     */
    protected function create_order($request)
    {
    }
    /**
     * Update order.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return int|WP_Error
     */
    protected function update_order($request)
    {
    }
    /**
     * Update address.
     *
     * @param WC_Order $order
     * @param array $posted
     * @param string $type
     */
    protected function update_address($order, $posted, $type = 'billing')
    {
    }
    /**
     * Gets the product ID from the SKU or posted ID.
     *
     * @throws WC_REST_Exception When SKU or ID is not valid.
     * @param array           $posted Request data.
     * @param string          $action 'create' to add line item or 'update' to update it.
     * @return int
     */
    protected function get_product_id($posted, $action = 'create')
    {
    }
    /**
     * Maybe set an item prop if the value was posted.
     * @param WC_Order_Item $item
     * @param string $prop
     * @param array $posted Request data.
     */
    protected function maybe_set_item_prop($item, $prop, $posted)
    {
    }
    /**
     * Maybe set item props if the values were posted.
     * @param WC_Order_Item $item
     * @param string[] $props
     * @param array $posted Request data.
     */
    protected function maybe_set_item_props($item, $props, $posted)
    {
    }
    /**
     * Create or update a line item.
     *
     * @param array $posted Line item data.
     * @param string $action 'create' to add line item or 'update' to update it.
     *
     * @return WC_Order_Item_Product
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_line_items($posted, $action = 'create')
    {
    }
    /**
     * Create or update an order shipping method.
     *
     * @param $posted $shipping Item data.
     * @param string $action 'create' to add shipping or 'update' to update it.
     *
     * @return WC_Order_Item_Shipping
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_shipping_lines($posted, $action)
    {
    }
    /**
     * Create or update an order fee.
     *
     * @param array $posted Item data.
     * @param string $action 'create' to add fee or 'update' to update it.
     *
     * @return WC_Order_Item_Fee
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_fee_lines($posted, $action)
    {
    }
    /**
     * Create or update an order coupon.
     *
     * @param array $posted Item data.
     * @param string $action 'create' to add coupon or 'update' to update it.
     *
     * @return WC_Order_Item_Coupon
     * @throws WC_REST_Exception Invalid data, server error.
     */
    protected function prepare_coupon_lines($posted, $action)
    {
    }
    /**
     * Wrapper method to create/update order items.
     * When updating, the item ID provided is checked to ensure it is associated
     * with the order.
     *
     * @param WC_Order $order order
     * @param string $item_type
     * @param array $posted item provided in the request body
     * @throws WC_REST_Exception If item ID is not associated with order
     */
    protected function set_item($order, $item_type, $posted)
    {
    }
    /**
     * Helper method to check if the resource ID associated with the provided item is null.
     * Items can be deleted by setting the resource ID to null.
     *
     * @param array $item Item provided in the request body.
     * @return bool True if the item resource ID is null, false otherwise.
     */
    protected function item_is_null($item)
    {
    }
    /**
     * Create a single item.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function create_item($request)
    {
    }
    /**
     * Update a single order.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function update_item($request)
    {
    }
    /**
     * Get order statuses without prefixes.
     * @return array
     */
    protected function get_order_statuses()
    {
    }
    /**
     * Check if a given request has access to read an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to update an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function update_item_permissions_check($request)
    {
    }
    /**
     * Check if a given request has access to delete an item.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return bool|WP_Error
     */
    public function delete_item_permissions_check($request)
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