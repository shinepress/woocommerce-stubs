<?php


/**
 * WC_Cache_Helper.
 */
class WC_Cache_Helper
{
    /**
     * Hook in methods.
     */
    public static function init()
    {
    }
    /**
     * Get prefix for use with wp_cache_set. Allows all cache in a group to be invalidated at once.
     *
     * @param  string $group Group of cache to get.
     * @return string
     */
    public static function get_cache_prefix($group)
    {
    }
    /**
     * Increment group cache prefix (invalidates cache).
     *
     * @param string $group Group of cache to clear.
     */
    public static function incr_cache_prefix($group)
    {
    }
    /**
     * Get a hash of the customer location.
     *
     * @return string
     */
    public static function geolocation_ajax_get_location_hash()
    {
    }
    /**
     * Prevent caching on certain pages
     */
    public static function prevent_caching()
    {
    }
    /**
     * When using geolocation via ajax, to bust cache, redirect if the location hash does not equal the querystring.
     *
     * This prevents caching of the wrong data for this request.
     */
    public static function geolocation_ajax_redirect()
    {
    }
    /**
     * Get transient version.
     *
     * When using transients with unpredictable names, e.g. those containing an md5
     * hash in the name, we need a way to invalidate them all at once.
     *
     * When using default WP transients we're able to do this with a DB query to
     * delete transients manually.
     *
     * With external cache however, this isn't possible. Instead, this function is used
     * to append a unique string (based on time()) to each transient. When transients
     * are invalidated, the transient version will increment and data will be regenerated.
     *
     * Raised in issue https://github.com/woocommerce/woocommerce/issues/5777.
     * Adapted from ideas in http://tollmanz.com/invalidation-schemes/.
     *
     * @param  string  $group   Name for the group of transients we need to invalidate.
     * @param  boolean $refresh true to force a new version.
     * @return string transient version based on time(), 10 digits.
     */
    public static function get_transient_version($group, $refresh = \false)
    {
    }
    /**
     * Queues a cleanup event for version transients.
     *
     * @param string $version Version of the transient to remove.
     */
    protected static function queue_delete_version_transients($version = '')
    {
    }
    /**
     * When the transient version increases, this is used to remove all past transients to avoid filling the DB.
     *
     * Note; this only works on transients appended with the transient version, and when object caching is not being used.
     *
     * @since  2.3.10
     * @param string $version Version of the transient to remove.
     */
    public static function delete_version_transients($version = '')
    {
    }
    /**
     * Set constants to prevent caching by some plugins.
     *
     * @param  mixed $return Value to return. Previously hooked into a filter.
     * @return mixed
     */
    public static function set_nocache_constants($return = \true)
    {
    }
    /**
     * Notices function.
     */
    public static function notices()
    {
    }
    /**
     * Clean term caches added by WooCommerce.
     *
     * @since 3.3.4
     * @param array|int $ids Array of ids or single ID to clear cache for.
     * @param string    $taxonomy Taxonomy name.
     */
    public static function clean_term_cache($ids, $taxonomy)
    {
    }
}