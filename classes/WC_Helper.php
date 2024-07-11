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
     * Add tracking parameters to buttons (Renew, Purchase, etc.) on subscriptions page
     *
     * @param string $url URL to product page or to https://woocommerce.com/my-account/my-subscriptions/.
     * @param string $utm_content value of utm_content query parameter used for tracking
     *
     * @return string URL including utm parameters for tracking
     */
    public static function add_utm_params_to_url_for_subscription_link($url, $utm_content)
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
     * Maybe redirect to the new Marketplace installer.
     */
    private static function maybe_redirect_to_new_marketplace_installer()
    {
    }
    /**
     * Get helper redirect URL.
     *
     * @param array $args Query args.
     * @return string
     */
    private static function get_helper_redirect_url($args = array())
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
     * Flush helper authentication cache.
     */
    public static function refresh_helper_subscriptions()
    {
    }
    /**
     * Active a product subscription.
     */
    private static function _helper_subscription_activate()
    {
    }
    /**
     * Activate helper subscription.
     *
     * @throws Exception If the subscription could not be activated or found.
     * @param string $product_key Subscription product key.
     * @return bool True if activated, false otherwise.
     */
    public static function activate_helper_subscription($product_key)
    {
    }
    /**
     * Deactivate a product subscription.
     */
    private static function helper_subscription_deactivate()
    {
    }
    /**
     * Deactivate a product subscription.
     *
     * @throws Exception If the subscription could not be deactivated or found.
     * @param string $product_key Subscription product key.
     * @return bool True if deactivated, false otherwise.
     */
    public static function deactivate_helper_subscription($product_key)
    {
    }
    /**
     * Get a subscriptions install URL.
     *
     * @param string $product_key Subscription product key.
     * @param string $product_slug Subscription product slug.
     * @return string
     */
    public static function get_subscription_install_url($product_key, $product_slug)
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
     * Get locally installed plugins
     *
     * @return array
     */
    public static function get_local_plugins()
    {
    }
    /**
     * Get locally installed themes.
     *
     * @return array
     */
    public static function get_local_themes()
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
     * Get subscription data for a given product key.
     *
     * @param string $product_key Subscription product key.
     * @return array|bool The array containing sub data or false.
     */
    public static function get_subscription($product_key)
    {
    }
    /**
     * Get the connected user's subscription list data. Here, we merge connected
     * subscriptions with locally installed Woo plugins and themes. We also
     * add in information about available updates.
     *
     * Used by the My Subscriptions page.
     *
     * @return array
     */
    public static function get_subscription_list_data()
    {
    }
    /**
     * Check if a subscription is available to use.
     * That is, is not already active and hasn't expired, and there are no other subscriptions
     * for this product already active on this site.
     *
     * @param array $subscription The subscription we're checking.
     * @param array $subscriptions The list of all the user's subscriptions.
     * @return bool True if multiple licenses exist, false otherwise.
     */
    public static function is_subscription_available($subscription, $subscriptions)
    {
    }
    /**
     * Check if product relating to a subscription is installed.
     * This method will return true if the product is installed, but will exclude subscriptions for the same product that are not in use.
     * If a product is installed and inactive, this will ensure that one subscription is marked as installed.
     *
     * @param array $subscription The subscription we're checking.
     * @param array $subscriptions The list of all the user's subscriptions.
     * @return bool True if installed, false otherwise.
     */
    public static function is_subscription_installed($subscription, $subscriptions)
    {
    }
    /**
     * Add local data to a subscription.
     *
     * @param array $subscription The subscription data.
     * @return array The subscription data with local data added.
     */
    public static function get_subscription_local_data(array $subscription)
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
    /**
     * Handles WC Helper disconnect tasks.
     *
     * @return void
     */
    public static function disconnect()
    {
    }
    /**
     * Checks if `access_token` exists in `auth` option.
     *
     * @return bool
     */
    public static function is_site_connected(): bool
    {
    }
    /**
     * Allows to connect with WCCOM using application password. used it to connect via CLI
     *
     * @param string $password The application password.
     *
     * @return void|WP_Error
     */
    public static function connect_with_password(string $password)
    {
    }
    /**
     * Updates auth options and flushes cache
     *
     * @param string $access_token The access token.
     * @param string $access_token_secret The secret access token.
     * @param int    $site_id The site id returned by the API.
     *
     * @return void
     */
    public static function update_auth_option(string $access_token, string $access_token_secret, int $site_id): void
    {
    }
    /**
     * Get base URL for plugin auto installer.
     *
     * @return string
     */
    public static function get_install_base_url()
    {
    }
    /**
     * Retrieve notice for connected store.
     *
     * @return array An array containing notice data.
     */
    public static function get_notices()
    {
    }
}