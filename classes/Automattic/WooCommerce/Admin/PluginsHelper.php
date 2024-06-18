<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Class PluginsHelper
 */
class PluginsHelper
{
    /**
     * Indicates whether the expiration notice for subscriptions can be displayed.
     *
     * @var bool
     */
    public static $can_show_expiring_subs_notice = true;
    /**
     * The URL for the WooCommerce subscription page.
     */
    const WOO_SUBSCRIPTION_PAGE_URL = 'https://woocommerce.com/my-account/my-subscriptions/';
    /**
     * Meta key for dismissing expired subscription notices.
     */
    const DISMISS_EXPIRED_SUBS_NOTICE = 'woo_subscription_expired_notice_dismiss';
    /**
     * Meta key for dismissing expiring subscription notices
     */
    const DISMISS_EXPIRING_SUBS_NOTICE = 'woo_subscription_expiring_notice_dismiss';
    /**
     * Initialize hooks.
     */
    public static function init()
    {
    }
    /**
     * Get the path to the plugin file relative to the plugins directory from the plugin slug.
     *
     * E.g. 'woocommerce' returns 'woocommerce/woocommerce.php'
     *
     * @param string $slug Plugin slug to get path for.
     *
     * @return string|false
     */
    public static function get_plugin_path_from_slug($slug)
    {
    }
    /**
     * Get an array of installed plugin slugs.
     *
     * @return array
     */
    public static function get_installed_plugin_slugs()
    {
    }
    /**
     * Get an array of installed plugins with their file paths as a key value pair.
     *
     * @return array
     */
    public static function get_installed_plugins_paths()
    {
    }
    /**
     * Get an array of active plugin slugs.
     *
     * @return array
     */
    public static function get_active_plugin_slugs()
    {
    }
    /**
     * Checks if a plugin is installed.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return bool
     */
    public static function is_plugin_installed($plugin)
    {
    }
    /**
     * Checks if a plugin is active.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return bool
     */
    public static function is_plugin_active($plugin)
    {
    }
    /**
     * Get plugin data.
     *
     * @param string $plugin Path to the plugin file relative to the plugins directory or the plugin directory name.
     *
     * @return array|false
     */
    public static function get_plugin_data($plugin)
    {
    }
    /**
     * Install an array of plugins.
     *
     * @param array                     $plugins Plugins to install.
     * @param PluginsInstallLogger|null $logger an optional logger.
     *
     * @return array
     */
    public static function install_plugins($plugins, \Automattic\WooCommerce\Admin\PluginsInstallLoggers\PluginsInstallLogger $logger = null)
    {
    }
    /**
     * Callback regsitered by OnboardingPlugins::install_and_activate_async.
     *
     * It is used to call install_plugins and activate_plugins with a custom logger.
     *
     * @param array  $plugins A list of plugins to install.
     * @param string $job_id An unique job I.D.
     * @return bool
     */
    public static function install_and_activate_plugins_async_callback(array $plugins, string $job_id)
    {
    }
    /**
     * Schedule plugin installation.
     *
     * @param array $plugins Plugins to install.
     *
     * @return string Job ID.
     */
    public static function schedule_install_plugins($plugins)
    {
    }
    /**
     * Activate the requested plugins.
     *
     * @param array                     $plugins Plugins.
     * @param PluginsInstallLogger|null $logger Logger.
     *
     * @return WP_Error|array Plugin Status
     */
    public static function activate_plugins($plugins, \Automattic\WooCommerce\Admin\PluginsInstallLoggers\PluginsInstallLogger $logger = null)
    {
    }
    /**
     * Schedule plugin activation.
     *
     * @param array $plugins Plugins to activate.
     *
     * @return string Job ID.
     */
    public static function schedule_activate_plugins($plugins)
    {
    }
    /**
     * Installation status.
     *
     * @param int $job_id Job ID.
     *
     * @return array Job data.
     */
    public static function get_installation_status($job_id = null)
    {
    }
    /**
     * Gets the plugin data for the first action.
     *
     * @param array $actions Array of AS actions.
     *
     * @return array Array of action data.
     */
    public static function get_action_data($actions)
    {
    }
    /**
     * Activation status.
     *
     * @param int $job_id Job ID.
     *
     * @return array Array of action data.
     */
    public static function get_activation_status($job_id = null)
    {
    }
    /**
     * Show notices to connect to woocommerce.com for unconnected store in the plugin list.
     *
     * @return void
     */
    public static function maybe_show_connect_notice_in_plugin_list()
    {
    }
    /**
     * Enqueue scripts for connect notice in WooCommerce settings page.
     *
     * @return void
     */
    public static function maybe_enqueue_scripts_for_connect_notice()
    {
    }
    /**
     * Enqueue scripts for notices in plugin list page.
     *
     * @return void
     */
    public static function maybe_enqueue_scripts_for_notices_in_plugins()
    {
    }
    /**
     * Show notice about to expired subscription on WC settings page.
     *
     * @return void
     */
    public static function maybe_show_expired_subscriptions_notice()
    {
    }
    /**
     * Show notice about to expiring subscription on WC settings page.
     *
     * @return void
     */
    public static function maybe_show_expiring_subscriptions_notice()
    {
    }
    /**
     * Enqueue scripts for woo subscription notice.
     *
     * @return void
     */
    public static function maybe_enqueue_scripts_for_subscription_notice()
    {
    }
    /**
     * Construct the subscritpion notice data based on user subscriptions data.
     *
     * @param array  $all_subs all subscription data.
     * @param array  $subs_to_show filtered subscriptions as condition.
     * @param int    $total total subscription count.
     * @param array  $messages message.
     * @param string $type type of notice, whether it is for expiring or expired subscription.
     * @return array notice data to return. Contains type, parsed_message and product_id.
     */
    public static function get_subscriptions_notice_data(array $all_subs, array $subs_to_show, int $total, array $messages, string $type)
    {
    }
    /**
     * Get formatted notice information for expiring subscription.
     *
     * @param boolean $allowed_link whether the notice description should include a link.
     * @return array notice information.
     */
    public static function get_expiring_subscription_notice($allowed_link = true)
    {
    }
    /**
     * Get formatted notice information for expired subscription.
     *
     * @param boolean $allowed_link whether the notice description should include a link.
     * @return array notice information.
     */
    public static function get_expired_subscription_notice($allowed_link = true)
    {
    }
    /**
     * Determine whether a specific notice should be shown to the current user.
     *
     * @param string $dismiss_notice_meta User meta that includes the timestamp when a store notice was dismissed.
     * @return bool True if the notice should be shown, false otherwise.
     */
    public static function should_show_notice($dismiss_notice_meta)
    {
    }
}