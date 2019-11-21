<?php


/**
 * WC_Admin_Notices Class.
 */
class WC_Admin_Notices
{
    /**
     * Stores notices.
     *
     * @var array
     */
    private static $notices = array();
    /**
     * Array of notices - name => callback.
     *
     * @var array
     */
    private static $core_notices = array('install' => 'install_notice', 'update' => 'update_notice', 'template_files' => 'template_file_check_notice', 'legacy_shipping' => 'legacy_shipping_notice', 'no_shipping_methods' => 'no_shipping_methods_notice', 'simplify_commerce' => 'simplify_commerce_notice', 'regenerating_thumbnails' => 'regenerating_thumbnails_notice', 'no_secure_connection' => 'secure_connection_notice', 'wootenberg' => 'wootenberg_feature_plugin_notice');
    /**
     * Constructor.
     */
    public static function init()
    {
    }
    /**
     * Store notices to DB
     */
    public static function store_notices()
    {
    }
    /**
     * Get notices
     *
     * @return array
     */
    public static function get_notices()
    {
    }
    /**
     * Remove all notices.
     */
    public static function remove_all_notices()
    {
    }
    /**
     * Reset notices for themes when switched or a new version of WC is installed.
     */
    public static function reset_admin_notices()
    {
    }
    /**
     * Show a notice.
     *
     * @param string $name Notice name.
     */
    public static function add_notice($name)
    {
    }
    /**
     * Remove a notice from being displayed.
     *
     * @param string $name Notice name.
     */
    public static function remove_notice($name)
    {
    }
    /**
     * See if a notice is being shown.
     *
     * @param string $name Notice name.
     *
     * @return boolean
     */
    public static function has_notice($name)
    {
    }
    /**
     * Hide a notice if the GET variable is set.
     */
    public static function hide_notices()
    {
    }
    /**
     * Add notices + styles if needed.
     */
    public static function add_notices()
    {
    }
    /**
     * Add a custom notice.
     *
     * @param string $name        Notice name.
     * @param string $notice_html Notice HTML.
     */
    public static function add_custom_notice($name, $notice_html)
    {
    }
    /**
     * Output any stored custom notices.
     */
    public static function output_custom_notices()
    {
    }
    /**
     * If we need to update, include a message with the update button.
     */
    public static function update_notice()
    {
    }
    /**
     * If we have just installed, show a message with the install pages button.
     */
    public static function install_notice()
    {
    }
    /**
     * Show the Theme Check notice.
     *
     * @todo Remove this next major release.
     */
    public static function theme_check_notice()
    {
    }
    /**
     * Show a notice highlighting bad template files.
     */
    public static function template_file_check_notice()
    {
    }
    /**
     * Show a notice asking users to convert to shipping zones.
     */
    public static function legacy_shipping_notice()
    {
    }
    /**
     * No shipping methods.
     */
    public static function no_shipping_methods_notice()
    {
    }
    /**
     * Simplify Commerce is being removed from core.
     */
    public static function simplify_commerce_notice()
    {
    }
    /**
     * Notice shown when regenerating thumbnails background process is running.
     */
    public static function regenerating_thumbnails_notice()
    {
    }
    /**
     * Notice about secure connection.
     */
    public static function secure_connection_notice()
    {
    }
    /**
     * If Gutenberg is active, tell people about the Products block feature plugin.
     *
     * @since 3.4.3
     * @todo  Remove this notice and associated code once the feature plugin has been merged into core.
     */
    public static function add_wootenberg_feature_plugin_notice()
    {
    }
    /**
     * Tell people about the Products block feature plugin when they activate Gutenberg.
     *
     * @since 3.4.3
     * @todo  Remove this notice and associated code once the feature plugin has been merged into core.
     */
    public static function add_wootenberg_feature_plugin_notice_on_gutenberg_activate()
    {
    }
    /**
     * Notice about trying the Products block.
     */
    public static function wootenberg_feature_plugin_notice()
    {
    }
    /**
     * Determine if the store is running SSL.
     *
     * @return bool Flag SSL enabled.
     * @since  3.5.1
     */
    protected static function is_ssl()
    {
    }
}