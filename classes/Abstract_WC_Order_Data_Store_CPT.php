<?php


/**
 * Abstract Order Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
abstract class Abstract_WC_Order_Data_Store_CPT extends \WC_Data_Store_WP implements \WC_Abstract_Order_Data_Store_Interface, \WC_Object_Data_Store_Interface
{
    /**
     * Internal meta type used to store order data.
     *
     * @var string
     */
    protected $meta_type = 'post';
    /**
     * Data stored in meta keys, but not considered "meta" for an order.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('_order_currency', '_cart_discount', '_cart_discount_tax', '_order_shipping', '_order_shipping_tax', '_order_tax', '_order_total', '_order_version', '_prices_include_tax', '_payment_tokens');
    /*
    |--------------------------------------------------------------------------
    | CRUD Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Method to create a new order in the database.
     *
     * @param WC_Order $order Order object.
     */
    public function create(&$order)
    {
    }
    /**
     * Method to read an order from the database.
     *
     * @param WC_Order $order Order object.
     *
     * @throws Exception If passed order is invalid.
     */
    public function read(&$order)
    {
    }
    /**
     * Method to update an order in the database.
     *
     * @param WC_Order $order Order object.
     */
    public function update(&$order)
    {
    }
    /**
     * Method to delete an order from the database.
     *
     * @param WC_Order $order Order object.
     * @param array    $args Array of args to pass to the delete method.
     *
     * @return void
     */
    public function delete(&$order, $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Additional Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Get the status to save to the post object.
     *
     * Plugins extending the order classes can override this to change the stored status/add prefixes etc.
     *
     * @since 3.6.0
     * @param  WC_order $order Order object.
     * @return string
     */
    protected function get_post_status($order)
    {
    }
    /**
     * Excerpt for post.
     *
     * @param  WC_order $order Order object.
     * @return string
     */
    protected function get_post_excerpt($order)
    {
    }
    /**
     * Get a title for the new post type.
     *
     * @return string
     */
    protected function get_post_title()
    {
    }
    /**
     * Get order key.
     *
     * @since 4.3.0
     * @param WC_order $order Order object.
     * @return string
     */
    protected function get_order_key($order)
    {
    }
    /**
     * Read order data. Can be overridden by child classes to load other props.
     *
     * @param WC_Order $order Order object.
     * @param object   $post_object Post object.
     * @since 3.0.0
     */
    protected function read_order_data(&$order, $post_object)
    {
    }
    /**
     * Helper method that updates all the post meta for an order based on it's settings in the WC_Order class.
     *
     * @param WC_Order $order Order object.
     * @since 3.0.0
     */
    protected function update_post_meta(&$order)
    {
    }
    /**
     * Clear any caches.
     *
     * @param WC_Order $order Order object.
     * @since 3.0.0
     */
    protected function clear_caches(&$order)
    {
    }
    /**
     * Read order items of a specific type from the database for this order.
     *
     * @param  WC_Order $order Order object.
     * @param  string   $type Order item type.
     * @return array
     */
    public function read_items($order, $type)
    {
    }
    /**
     * Remove all line items (products, coupons, shipping, taxes) from the order.
     *
     * @param WC_Order $order Order object.
     * @param string   $type Order item type. Default null.
     */
    public function delete_items($order, $type = \null)
    {
    }
    /**
     * Get token ids for an order.
     *
     * @param WC_Order $order Order object.
     * @return array
     */
    public function get_payment_token_ids($order)
    {
    }
    /**
     * Update token ids for an order.
     *
     * @param WC_Order $order Order object.
     * @param array    $token_ids Payment token ids.
     */
    public function update_payment_token_ids($order, $token_ids)
    {
    }
}