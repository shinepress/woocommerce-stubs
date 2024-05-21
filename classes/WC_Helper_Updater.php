<?php


/**
 * WC_Helper_Updater Class
 *
 * Contains the logic to fetch available updates and hook into Core's update
 * routines to serve WooCommerce.com-provided packages.
 */
class WC_Helper_Updater
{
    /**
     * Loads the class, runs on init.
     */
    public static function load()
    {
    }
    /**
     * Add the hook for modifying default WPCore update notices on the plugins management page.
     */
    public static function add_hook_for_modifying_update_notices()
    {
    }
    /**
     * Runs in a cron thread, or in a visitor thread if triggered
     * by _maybe_update_plugins(), or in an auto-update thread.
     *
     * @param object $transient The update_plugins transient object.
     *
     * @return object The same or a modified version of the transient.
     */
    public static function transient_update_plugins($transient)
    {
    }
    /**
     * Runs on pre_set_site_transient_update_themes, provides custom
     * packages for WooCommerce.com-hosted extensions.
     *
     * @param object $transient The update_themes transient object.
     *
     * @return object The same or a modified version of the transient.
     */
    public static function transient_update_themes($transient)
    {
    }
    /**
     * Runs on load-plugins.php, adds a hook to show a custom plugin update message for WooCommerce.com hosted plugins.
     *
     * @return void.
     */
    public static function setup_update_plugins_messages()
    {
    }
    /**
     * Runs on in_plugin_update_message-{file-name}, show a message to connect to woocommerce.com for unconnected stores
     *
     * @return void.
     */
    public static function add_connect_woocom_plugin_message()
    {
    }
    /**
     * Runs on in_plugin_update_message-{file-name}, show a message to install the Woo Marketplace plugin, on plugin update notification,
     * if the Woo Marketplace plugin isn't already installed.
     *
     * @param object $plugin_data TAn array of plugin metadata.
     * @param object $response  An object of metadata about the available plugin update.
     *
     * @return void.
     */
    public static function add_install_marketplace_plugin_message($plugin_data, $response)
    {
    }
    /**
     * Get update data for all plugins.
     *
     * @return array Update data {product_id => data}
     * @see get_update_data
     */
    public static function get_available_extensions_downloads_data()
    {
    }
    /**
     * Get update data for all extensions.
     *
     * Scans through all subscriptions for the connected user, as well
     * as all Woo extensions without a subscription, and obtains update
     * data for each product.
     *
     * @return array Update data {product_id => data}
     */
    public static function get_update_data()
    {
    }
    /**
     * Get translations updates information.
     *
     * Scans through all subscriptions for the connected user, as well
     * as all Woo extensions without a subscription, and obtains update
     * data for each product.
     *
     * @return array Update data {product_id => data}
     */
    public static function get_translations_update_data()
    {
    }
    /**
     * Run an update check API call.
     *
     * The call is cached based on the payload (product ids, file ids). If
     * the payload changes, the cache is going to miss.
     *
     * @param array $payload Information about the plugin to update.
     * @return array Update data for each requested product.
     */
    private static function _update_check($payload)
    {
    }
    /**
     * Get the number of products that have updates.
     *
     * @return int The number of products with updates.
     */
    public static function get_updates_count()
    {
    }
    /**
     * Get the update count to based on the status of the site.
     *
     * @return int
     */
    public static function get_updates_count_based_on_site_status()
    {
    }
    /**
     * Get the type of woo connect notice to be shown in the WC Settings and Marketplace pages.
     * - If a store is connected to woocommerce.com or has no installed woo plugins, return 'none'.
     * - If a store has installed woo plugins but no updates, return 'short'.
     * - If a store has an installed woo plugin with update, return 'long'.
     *
     * @return string The notice type, 'none', 'short', or 'long'.
     */
    public static function get_woo_connect_notice_type()
    {
    }
    /**
     * Return the updates count markup.
     *
     * @return string Updates count markup, empty string if no updates avairable.
     */
    public static function get_updates_count_html()
    {
    }
    /**
     * Flushes cached update data.
     */
    public static function flush_updates_cache()
    {
    }
    /**
     * Fires when a user successfully updated a theme or a plugin.
     */
    public static function upgrader_process_complete()
    {
    }
    /**
     * Hooked into the upgrader_pre_download filter in order to better handle error messaging around expired
     * plugin updates. Initially we were using an empty string, but the error message that no_package
     * results in does not fit the cause.
     *
     * @since 4.1.0
     * @param bool   $reply Holds the current filtered response.
     * @param string $package The path to the package file for the update.
     * @return false|WP_Error False to proceed with the update as normal, anything else to be returned instead of updating.
     */
    public static function block_expired_updates($reply, $package)
    {
    }
}