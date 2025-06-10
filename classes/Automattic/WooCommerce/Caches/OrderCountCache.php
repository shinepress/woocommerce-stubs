<?php

namespace Automattic\WooCommerce\Caches;

/**
 * A class to cache counts for various order statuses.
 */
class OrderCountCache
{
    /**
     * Default value for the duration of the objects in the cache, in seconds
     * (may not be used depending on the cache engine used WordPress cache implementation).
     *
     * @var int
     */
    protected $expiration = DAY_IN_SECONDS;
    /**
     * Cache prefix.
     *
     * @var string
     */
    private $cache_prefix = 'order-count';
    /**
     * Get valid statuses.
     *
     * @return string[]
     */
    private function get_valid_statuses()
    {
    }
    /**
     * Get the default statuses.
     *
     * @return string[]
     */
    public function get_default_statuses()
    {
    }
    /**
     * Get the cache key for a given order type and status.
     *
     * @param string $order_type The type of order.
     * @param string $order_status The status of the order.
     * @return string The cache key.
     */
    private function get_cache_key($order_type, $order_status)
    {
    }
    /**
     * Check if the cache has a value for a given order type and status.
     *
     * @param string $order_type The type of order.
     * @param string $order_status The status of the order.
     * @return bool True if the cache has a value, false otherwise.
     */
    public function is_cached($order_type, $order_status)
    {
    }
    /**
     * Set the cache value for a given order type and status.
     *
     * @param string $order_type The type of order.
     * @param string $order_status The status of the order.
     * @param int $value The value to set.
     * @return bool True if the value was set, false otherwise.
     */
    public function set($order_type, $order_status, int $value): bool
    {
    }
    /**
     * Get the cache value for a given order type and status.
     *
     * @param string $order_type The type of order.
     * @param string[] $order_statuses The statuses of the order.
     * @return int[] The cache value.
     */
    public function get($order_type, $order_statuses = array())
    {
    }
    /**
     * Increment the cache value for a given order status.
     *
     * @param string $order_type The type of order.
     * @param string $order_status The status of the order.
     * @param int $offset The amount to increment by.
     * @return int The new value of the cache.
     */
    public function increment($order_type, $order_status, $offset = 1)
    {
    }
    /**
     * Decrement the cache value for a given order status.
     *
     * @param string $order_type The type of order.
     * @param string $order_status The status of the order.
     * @param int $offset The amount to decrement by.
     * @return int The new value of the cache.
     */
    public function decrement($order_type, $order_status, $offset = 1)
    {
    }
    /**
     * Flush the cache for a given order type and statuses.
     *
     * @param string $order_type The type of order.
     * @param string[] $order_statuses The statuses of the order.
     * @return void
     */
    public function flush($order_type = 'shop_order', $order_statuses = array())
    {
    }
}