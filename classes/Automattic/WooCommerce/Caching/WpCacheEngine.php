<?php

namespace Automattic\WooCommerce\Caching;

/**
 * Implementation of CacheEngine that uses the built-in WordPress cache.
 */
class WpCacheEngine implements \Automattic\WooCommerce\Caching\CacheEngine
{
    public const CACHE_GROUP_NAME = 'wc-object-cache';
    // phpcs:disable Squiz.Commenting.FunctionComment.Missing
    public function get_cached_object(string $key)
    {
    }
    public function cache_object(string $key, $object, int $expiration): bool
    {
    }
    public function delete_cached_object(string $key): bool
    {
    }
    public function is_cached(string $key): bool
    {
    }
    // phpcs:enable Squiz.Commenting.FunctionComment.Missing
}