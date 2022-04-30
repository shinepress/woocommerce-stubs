<?php

namespace Automattic\WooCommerce;

/**
 * Packages class.
 *
 * @since 3.7.0
 */
class Packages
{
    /**
     * Static-only class.
     */
    private function __construct()
    {
    }
    /**
     * Array of package names and their main package classes.
     *
     * @var array Key is the package name/directory, value is the main package class which handles init.
     */
    protected static $packages = array('woocommerce-blocks' => '\Automattic\WooCommerce\Blocks\Package', 'woocommerce-admin' => '\Automattic\WooCommerce\Admin\Composer\Package');
    /**
     * Init the package loader.
     *
     * @since 3.7.0
     */
    public static function init()
    {
    }
    /**
     * Callback for WordPress init hook.
     */
    public static function on_init()
    {
    }
    /**
     * Checks a package exists by looking for it's directory.
     *
     * @param string $package Package name.
     * @return boolean
     */
    public static function package_exists($package)
    {
    }
    /**
     * Loads packages after plugins_loaded hook.
     *
     * Each package should include an init file which loads the package so it can be used by core.
     */
    protected static function load_packages()
    {
    }
    /**
     * If a package is missing, add an admin notice.
     *
     * @param string $package Package name.
     */
    protected static function missing_package($package)
    {
    }
}