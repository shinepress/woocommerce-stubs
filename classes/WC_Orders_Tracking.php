<?php


/**
 * This class adds actions to track usage of WooCommerce Orders.
 */
class WC_Orders_Tracking
{
    /**
     * Init tracking.
     */
    public function init()
    {
    }
    /**
     * Send a Tracks event when the Orders page is viewed.
     */
    public function track_orders_view()
    {
    }
    /**
     * Send a Tracks event when an order status is changed.
     *
     * @param int    $id Order id.
     * @param string $previous_status the old WooCommerce order status.
     * @param string $next_status the new WooCommerce order status.
     */
    public function track_order_status_change($id, $previous_status, $next_status)
    {
    }
    /**
     * Send a Tracks event when an order date is changed.
     *
     * @param int $id Order id.
     */
    public function track_created_date_change($id)
    {
    }
    /**
     * Track order actions taken.
     *
     * @param int $order_id Order ID.
     */
    public function track_order_action($order_id)
    {
    }
    /**
     * Track "add order" button on the Edit Order screen.
     */
    public function track_add_order_from_edit()
    {
    }
}