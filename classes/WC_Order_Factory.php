<?php


/**
 * Order factory class
 */
class WC_Order_Factory
{
    /**
     * Get order.
     *
     * @param  mixed $order_id (default: false) Order ID to get.
     * @return WC_Order|bool
     */
    public static function get_order($order_id = \false)
    {
    }
    /**
     * Get order item.
     *
     * @param int $item_id Order item ID to get.
     * @return WC_Order_Item|false if not found
     */
    public static function get_order_item($item_id = 0)
    {
    }
    /**
     * Get the order ID depending on what was passed.
     *
     * @since 3.0.0
     * @param  mixed $order Order data to convert to an ID.
     * @return int|bool false on failure
     */
    public static function get_order_id($order)
    {
    }
}