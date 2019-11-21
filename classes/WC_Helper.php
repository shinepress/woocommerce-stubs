<?php


/**
 * WC_Helper Class
 *
 * The main entry-point for all things related to the Helper.
 */
class WC_Helper
{
    /**
     * A log object returned by wc_get_logger().
     *
     * @var $log
     */
    public static $log;
    /**
     * Get an absolute path to the requested helper view.
     *
     * @param string $view The requested view file.
     *
     * @return string The absolute path to the view file.
     */
    public static function get_view_filename($view)
    {
    }
    /**
     * Loads the helper class, runs on init.
     */
    public static function load()
    {
    }
    /**
     * Include supporting helper classes.
     */
    protected static function includes()
    {
    }
    /**
     * Render the helper section content based on context.
     */
    public static function render_helper_output()
    {
    }
    /**
     * Get available subscriptions filters.
     *
     * @return array An array of filter keys and labels.
     */
    public static function get_filters()
    {
    }
    /**
     * Get counts data for the filters array.
     *
     * @param array $subscriptions The array of all available subscriptions.
     *
     * @return array Filter counts (filter => count).
     */
    public static function get_filters_counts($subscriptions = \null)
    {
    }
    /**
     * Get current filter.
     *
     * @return string The current filter.
     */
    public static function get_current_filter()
    {
    }
    /**
     * Filter an array of subscriptions by $filter.
     *
     * @param array  $subscriptions The subscriptions array, passed by ref.
     * @param string $filter The filter.
     */
    private static function _filter(&$subscriptions, $filter)
    {
    }
    /**
     * Enqueue admin scripts and styles.
     */
    public static function admin_enqueue_scripts()
    {
    }
    /**
     * Various success/error notices.
     *
     * Runs during admin page render, so no headers/redirects here.
     *
     * @return array Array pairs of message/type strings with notices.
     */
    private static function _get_return_notices()
    {
    }
    /**
     * Various early-phase actions with possible redirects.
     *
     * @param object $screen WP screen object.
     */
    public static function current_screen($screen)
    {
    }
    /**
     * Initiate a new OAuth connection.
     */
    private static function _helper_auth_connect()
    {
    }
    /**
     * Return from WooCommerce.com OAuth flow.
     */
    private static function _helper_auth_return()
    {
    }
    /**
     * Disconnect from WooCommerce.com, clear OAuth tokens.
     */
    private static function _helper_auth_disconnect()
    {
    }
    /**
     * User hit the Refresh button, clear all caches.
     */
    private static function _helper_auth_refresh()
    {
    }
    /**
     * Active a product subscription.
     */
    private static function _helper_subscription_activate()
    {
    }
    /**
     * Deactivate a product subscription.
     */
    private static function _helper_subscription_deactivate()
    {
    }
    /**
     * Deactivate a plugin.
     */
    private static function _helper_plugin_deactivate()
    {
    }
    /**
     * Get a local plugin/theme entry from product_id.
     *
     * @param int $product_id The product id.
     *
     * @return array|bool The array containing the local plugin/theme data or false.
     */
    private static function _get_local_from_product_id($product_id)
    {
    }
    /**
     * Checks whether current site has product subscription of a given ID.
     *
     * @since 3.7.0
     *
     * @param int $product_id The product id.
     *
     * @return bool Returns true if product subscription exists, false otherwise.
     */
    public static function has_product_subscription($product_id)
    {
    }
    /**
     * Get a subscription entry from product_id. If multiple subscriptions are
     * found with the same product id and $single is set to true, will return the
     * first one in the list, so you can use this method to get things like extension
     * name, version, etc.
     *
     * @param int  $product_id The product id.
     * @param bool $single Whether to return a single subscription or all matching a product id.
     *
     * @return array|bool The array containing sub data or false.
     */
    private static function _get_subscriptions_from_product_id($product_id, $single = \true)
    {
    }
    /**
     * Obtain a list of data about locally installed Woo extensions.
     */
    public static function get_local_woo_plugins()
    {
    }
    /**
     * Get locally installed Woo themes.
     */
    public static function get_local_woo_themes()
    {
    }
    /**
     * Get the connected user's subscriptions.
     *
     * @return array
     */
    public static function get_subscriptions()
    {
    }
    /**
     * Runs when any plugin is activated.
     *
     * Depending on the activated plugin attempts to look through available
     * subscriptions and auto-activate one if possible, so the user does not
     * need to visit the Helper UI at all after installing a new extension.
     *
     * @param string $filename The filename of the activated plugin.
     */
    public static function activated_plugin($filename)
    {
    }
    /**
     * Runs when any plugin is deactivated.
     *
     * When a user deactivates a plugin, attempt to deactivate any subscriptions
     * associated with the extension.
     *
     * @param string $filename The filename of the deactivated plugin.
     */
    public static function deactivated_plugin($filename)
    {
    }
    /**
     * Various Helper-related admin notices.
     */
    public static function admin_notices()
    {
    }
    /**
     * Prompt a Helper connection if the user has WooCommerce.com extensions.
     *
     * @param string $screen_id Current screen ID.
     */
    private static function _prompt_helper_connect($screen_id)
    {
    }
    /**
     * Get an update notice if one or more Woo extensions has an update available.
     *
     * @return string|null The update notice or null if everything is up to date.
     */
    private static function _get_extensions_update_notice()
    {
    }
    /**
     * Whether WooCommerce has an update available.
     *
     * @return bool True if a Woo core update is available.
     */
    private static function _woo_core_update_available()
    {
    }
    /**
     * Flush subscriptions cache.
     */
    public static function _flush_subscriptions_cache()
    {
    }
    /**
     * Flush auth cache.
     */
    public static function _flush_authentication_cache()
    {
    }
    /**
     * Flush updates cache.
     */
    private static function _flush_updates_cache()
    {
    }
    /**
     * Sort subscriptions by the product_name.
     *
     * @param array $a Subscription array.
     * @param array $b Subscription array.
     *
     * @return int
     */
    public static function _sort_by_product_name($a, $b)
    {
    }
    /**
     * Sort subscriptions by the Name.
     *
     * @param array $a Product array.
     * @param array $b Product array.
     *
     * @return int
     */
    public static function _sort_by_name($a, $b)
    {
    }
    /**
     * Log a helper event.
     *
     * @param string $message Log message.
     * @param string $level Optional, defaults to info, valid levels: emergency|alert|critical|error|warning|notice|info|debug.
     */
    public static function log($message, $level = 'info')
    {
    }
}