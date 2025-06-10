<?php

namespace Automattic\WooCommerce\Caches;

/**
 * A service class to help with updates to the aggregate orders cache.
 *
 * @internal
 */
class OrderCountCacheService
{
    /**
     * OrderCountCache instance.
     *
     * @var OrderCountCache
     */
    private $order_count_cache;
    /**
     * Array of order ids with their last transitioned status as key value pairs.
     *
     * @var array
     */
    private $order_statuses = array();
    /**
     * Array of order ids with their initial status as key value pairs.
     *
     * @var array
     */
    private $initial_order_statuses = array();
    /**
     * Class initialization, invoked by the DI container.
     *
     * @internal
     */
    final public function init()
    {
    }
    /**
     * Refresh the cache for a given order type.
     *
     * @param string $order_type The order type.
     * @return void
     */
    public function refresh_cache($order_type)
    {
    }
    /**
     * Register background caching for each order type.
     *
     * @return void
     */
    public function schedule_background_actions()
    {
    }
    /**
     * Update the cache when a new order is made.
     *
     * @param int      $order_id Order id.
     * @param WC_Order $order The order.
     */
    public function update_on_new_order($order_id, $order)
    {
    }
    /**
     * Update the cache when an order is trashed.
     *
     * @param int      $order_id Order id.
     * @param WC_Order $order The order.
     */
    public function update_on_order_trashed($order_id, $order)
    {
    }
    /**
     * Update the cache when an order is deleted.
     *
     * @param int      $order_id Order id.
     * @param WC_Order $order The order.
     */
    public function update_on_order_deleted($order_id, $order)
    {
    }
    /**
     * Update the cache whenver an order status changes.
     *
     * @param int      $order_id Order id.
     * @param string   $previous_status the old WooCommerce order status.
     * @param string   $next_status the new WooCommerce order status.
     * @param WC_Order $order The order.
     */
    public function update_on_order_status_changed($order_id, $previous_status, $next_status, $order)
    {
    }
    /**
     * Get the prefixed status.
     *
     * @param string $status The status.
     * @return string
     */
    private function get_prefixed_status($status)
    {
    }
}