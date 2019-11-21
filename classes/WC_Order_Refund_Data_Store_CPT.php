<?php


/**
 * WC Order Refund Data Store: Stored in CPT.
 *
 * @version  3.0.0
 */
class WC_Order_Refund_Data_Store_CPT extends \Abstract_WC_Order_Data_Store_CPT implements \WC_Object_Data_Store_Interface, \WC_Order_Refund_Data_Store_Interface
{
    /**
     * Data stored in meta keys, but not considered "meta" for an order.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('_order_currency', '_cart_discount', '_refund_amount', '_refunded_by', '_refunded_payment', '_refund_reason', '_cart_discount_tax', '_order_shipping', '_order_shipping_tax', '_order_tax', '_order_total', '_order_version', '_prices_include_tax', '_payment_tokens');
    /**
     * Delete a refund - no trash is supported.
     *
     * @param WC_Order $order Order object.
     * @param array    $args Array of args to pass to the delete method.
     */
    public function delete(&$order, $args = array())
    {
    }
    /**
     * Read refund data. Can be overridden by child classes to load other props.
     *
     * @param WC_Order $refund Refund object.
     * @param object   $post_object Post object.
     * @since 3.0.0
     */
    protected function read_order_data(&$refund, $post_object)
    {
    }
    /**
     * Helper method that updates all the post meta for an order based on it's settings in the WC_Order class.
     *
     * @param WC_Order $refund Refund object.
     * @since 3.0.0
     */
    protected function update_post_meta(&$refund)
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
}