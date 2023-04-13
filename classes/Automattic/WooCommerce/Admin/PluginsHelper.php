<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Class PluginsHelper
 */
class PluginsHelper
{
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
     * @param array $plugins Plugins to install.
     * @return array
     */
    public static function install_plugins($plugins)
    {
    }
    /**
     * Schedule plugin installation.
     *
     * @param array $plugins Plugins to install.
     * @return string Job ID.
     */
    public static function schedule_install_plugins($plugins)
    {
    }
    /**
     * Activate the requested plugins.
     *
     * @param array $plugins Plugins.
     * @return WP_Error|array Plugin Status
     */
    public static function activate_plugins($plugins)
    {
    }
    /**
     * Schedule plugin activation.
     *
     * @param array $plugins Plugins to activate.
     * @return string Job ID.
     */
    public static function schedule_activate_plugins($plugins)
    {
    }
    /**
     * Installation status.
     *
     * @param int $job_id Job ID.
     * @return array Job data.
     */
    public static function get_installation_status($job_id = null)
    {
    }
    /**
     * Gets the plugin data for the first action.
     *
     * @param array $actions Array of AS actions.
     * @return array Array of action data.
     */
    public static function get_action_data($actions)
    {
    }
    /**
     * Activation status.
     *
     * @param int $job_id Job ID.
     * @return array Array of action data.
     */
    public static function get_activation_status($job_id = null)
    {
    }
}