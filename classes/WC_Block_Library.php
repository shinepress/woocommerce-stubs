<?php


/**
 * WC_Block_Library Class.
 */
class WC_Block_Library
{
    /**
     * Class instance.
     *
     * @var WC_Block_Library instance
     */
    protected static $instance = \null;
    /**
     * Get class instance
     */
    public static function get_instance()
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the file modified time as a cache buster if we're in dev mode.
     *
     * @param string $file Local path to the file.
     * @return string The cache buster value to use for the given file.
     */
    protected static function get_file_version($file)
    {
    }
    /**
     * Registers a script according to `wp_register_script`, additionally loading the translations for the file.
     *
     * @since 2.0.0
     *
     * @param string $handle    Name of the script. Should be unique.
     * @param string $src       Full URL of the script, or path of the script relative to the WordPress root directory.
     * @param array  $deps      Optional. An array of registered script handles this script depends on. Default empty array.
     * @param bool   $has_i18n  Optional. Whether to add a script translation call to this file. Default 'true'.
     */
    protected static function register_script($handle, $src, $deps = array(), $has_i18n = \true)
    {
    }
    /**
     * Registers a style according to `wp_register_style`.
     *
     * @since 2.0.0
     *
     * @param string $handle Name of the stylesheet. Should be unique.
     * @param string $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
     * @param array  $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
     * @param string $media  Optional. The media for which this stylesheet has been defined. Default 'all'. Accepts media types like
     *                       'all', 'print' and 'screen', or media queries like '(orientation: portrait)' and '(max-width: 640px)'.
     */
    protected static function register_style($handle, $src, $deps = array(), $media = 'all')
    {
    }
    /**
     * Register block scripts & styles.
     *
     * @since 2.0.0
     */
    public static function register_assets()
    {
    }
    /**
     * Register blocks, hooking up assets and render functions as needed.
     *
     * @since 2.0.0
     */
    public static function register_blocks()
    {
    }
    /**
     * Adds a WooCommerce category to the block inserter.
     *
     * @since 2.0.0
     *
     * @param array $categories Array of categories.
     * @return array Array of block categories.
     */
    public static function add_block_category($categories)
    {
    }
    /**
     * Output useful globals before printing any script tags.
     *
     * These are used by @woocommerce/components & the block library to set up defaults
     * based on user-controlled settings from WordPress.
     *
     * @since 2.0.0
     */
    public static function print_script_settings()
    {
    }
}