<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * A class of utilities for dealing with plugins.
 */
class PluginUtil
{
    use \Automattic\WooCommerce\Internal\Traits\AccessiblePrivateMethods;
    /**
     * The LegacyProxy instance to use.
     *
     * @var LegacyProxy
     */
    private $proxy;
    /**
     * The cached list of WooCommerce aware plugin ids.
     *
     * @var null|array
     */
    private $woocommerce_aware_plugins = null;
    /**
     * The cached list of enabled WooCommerce aware plugin ids.
     *
     * @var null|array
     */
    private $woocommerce_aware_active_plugins = null;
    /**
     * Creates a new instance of the class.
     */
    public function __construct()
    {
    }
    /**
     * Initialize the class instance.
     *
     * @internal
     *
     * @param LegacyProxy $proxy The instance of LegacyProxy to use.
     */
    final public function init(\Automattic\WooCommerce\Proxies\LegacyProxy $proxy)
    {
    }
    /**
     * Get a list with the names of the WordPress plugins that are WooCommerce aware
     * (they have a "WC tested up to" header).
     *
     * @param bool $active_only True to return only active plugins, false to return all the active plugins.
     * @return string[] A list of plugin ids (path/file.php).
     */
    public function get_woocommerce_aware_plugins(bool $active_only = false): array
    {
    }
    /**
     * Get the printable name of a plugin.
     *
     * @param string $plugin_id Plugin id (path/file.php).
     * @return string Printable plugin name, or the plugin id itself if printable name is not available.
     */
    public function get_plugin_name(string $plugin_id): string
    {
    }
    /**
     * Check if a plugin is WooCommerce aware.
     *
     * @param string|array $plugin_file_or_data Plugin id (path/file.php) or plugin data (as returned by get_plugins).
     * @return bool True if the plugin exists and is WooCommerce aware.
     * @throws \Exception The input is neither a string nor an array.
     */
    public function is_woocommerce_aware_plugin($plugin_file_or_data): bool
    {
    }
    /**
     * Match plugin identifier passed as a parameter with the output from `get_plugins()`.
     *
     * @param string $plugin_file Plugin identifier, either 'my-plugin/my-plugin.php', or output from __FILE__.
     *
     * @return string|false Key from the array returned by `get_plugins` if matched. False if no match.
     */
    public function get_wp_plugin_id($plugin_file)
    {
    }
    /**
     * Handle plugin activation and deactivation by clearing the WooCommerce aware plugin ids cache.
     */
    private function handle_plugin_de_activation(): void
    {
    }
    /**
     * Util function to generate warning string for incompatible features based on active plugins.
     *
     * @param string $feature_id Feature id.
     * @param array  $plugin_feature_info Array of plugin feature info. See FeaturesControllers->get_compatible_plugins_for_feature() for details.
     *
     * @return string Warning string.
     */
    public function generate_incompatible_plugin_feature_warning(string $feature_id, array $plugin_feature_info): string
    {
    }
}