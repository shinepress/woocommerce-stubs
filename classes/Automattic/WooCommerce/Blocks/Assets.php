<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Assets class.
 *
 * @deprecated 5.0.0 This class will be removed in a future release. This has been replaced by AssetsController.
 * @internal
 */
class Assets
{
    /**
     * Initialize class features on init.
     *
     * @since 2.5.0
     * @deprecated 5.0.0
     */
    public static function init()
    {
    }
    /**
     * Register block scripts & styles.
     *
     * @since 2.5.0
     * @deprecated 5.0.0
     */
    public static function register_assets()
    {
    }
    /**
     * Register the vendors style file. We need to do it after the other files
     * because we need to check if `wp-edit-post` has been enqueued.
     *
     * @deprecated 5.0.0
     */
    public static function enqueue_scripts()
    {
    }
    /**
     * Add body classes.
     *
     * @deprecated 5.0.0
     * @param array $classes Array of CSS classnames.
     * @return array Modified array of CSS classnames.
     */
    public static function add_theme_body_class($classes = [])
    {
    }
    /**
     * Add theme class to admin body.
     *
     * @deprecated 5.0.0
     * @param array $classes String with the CSS classnames.
     * @return array Modified string of CSS classnames.
     */
    public static function add_theme_admin_body_class($classes = '')
    {
    }
    /**
     * Adds a redirect field to the login form so blocks can redirect users after login.
     *
     * @deprecated 5.0.0
     */
    public static function redirect_to_field()
    {
    }
    /**
     * Queues a block script in the frontend.
     *
     * @since 2.3.0
     * @since 2.6.0 Changed $name to $script_name and added $handle argument.
     * @since 2.9.0 Made it so scripts are not loaded in admin pages.
     * @deprecated 4.5.0 Block types register the scripts themselves.
     *
     * @param string $script_name  Name of the script used to identify the file inside build folder.
     * @param string $handle       Optional. Provided if the handle should be different than the script name. `wc-` prefix automatically added.
     * @param array  $dependencies Optional. An array of registered script handles this script depends on. Default empty array.
     */
    public static function register_block_script($script_name, $handle = '', $dependencies = [])
    {
    }
}