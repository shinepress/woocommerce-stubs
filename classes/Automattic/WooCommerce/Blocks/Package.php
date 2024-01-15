<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Main package class.
 *
 * Returns information about the package and handles init.
 *
 * In the context of this plugin, it handles init and is called from the main
 * plugin file (woocommerce-gutenberg-products-block.php).
 *
 * In the context of WooCommere core, it handles init and is called from
 * WooCommerce's package loader. The main plugin file is _not_ loaded.
 *
 * @since 2.5.0
 */
class Package
{
    /**
     * For back compat this is provided. Ideally, you should register your
     * class with Automattic\Woocommerce\Blocks\Container and make Package a
     * dependency.
     *
     * @since 2.5.0
     * @return Package  The Package instance class
     */
    protected static function get_package()
    {
    }
    /**
     * Init the package - load the blocks library and define constants.
     *
     * @since 2.5.0 Handled by new NewPackage.
     */
    public static function init()
    {
    }
    /**
     * Return the version of the package.
     *
     * @return string
     */
    public static function get_version()
    {
    }
    /**
     * Return the path to the package.
     *
     * @return string
     */
    public static function get_path()
    {
    }
    /**
     * Returns an instance of the FeatureGating class.
     *
     * @return FeatureGating
     */
    public static function feature()
    {
    }
    /**
     * Checks if we're executing the code in an experimental build mode.
     *
     * @return boolean
     */
    public static function is_experimental_build()
    {
    }
    /**
     * Checks if we're executing the code in a feature plugin or experimental build mode.
     *
     * @return boolean
     */
    public static function is_feature_plugin_build()
    {
    }
    /**
     * Loads the dependency injection container for woocommerce blocks.
     *
     * @param boolean $reset Used to reset the container to a fresh instance.
     *                       Note: this means all dependencies will be
     *                       reconstructed.
     */
    public static function container($reset = false)
    {
    }
}