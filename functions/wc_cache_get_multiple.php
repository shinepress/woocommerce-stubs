<?php


/**
 * Polyfill for wp_cache_get_multiple for WP versions before 5.5.
 *
 * @param array  $keys   Array of keys to get from group.
 * @param string $group  Optional. Where the cache contents are grouped. Default empty.
 * @param bool   $force  Optional. Whether to force an update of the local cache from the persistent
 *                            cache. Default false.
 * @return array|bool Array of values.
 */
function wc_cache_get_multiple($keys, $group = '', $force = \false)
{
}