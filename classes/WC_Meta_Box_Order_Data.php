<?php


/**
 * WC_Meta_Box_Order_Data Class.
 */
class WC_Meta_Box_Order_Data
{
    /**
     * Billing fields.
     *
     * @var array
     */
    protected static $billing_fields = array();
    /**
     * Shipping fields.
     *
     * @var array
     */
    protected static $shipping_fields = array();
    /**
     * Init billing and shipping fields we display + save.
     */
    public static function init_address_fields()
    {
    }
    /**
     * Output the metabox.
     *
     * @param WP_Post $post
     */
    public static function output($post)
    {
    }
    /**
     * Save meta box data.
     *
     * @param int $order_id Order ID.
     */
    public static function save($order_id)
    {
    }
}