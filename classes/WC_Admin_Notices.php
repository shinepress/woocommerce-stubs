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
    private static $core_notices = array('install' => 'install_notice', 'update' => 'update_notice', 'template_files' => 'template_file_check_notice', 'legacy_shipping' => 'legacy_shipping_notice', 'no_shipping_methods' => 'no_shipping_methods_notice', 'regenerating_thumbnails' => 'regenerating_thumbnails_notice', 'regenerating_lookup_table' => 'regenerating_lookup_table_notice', 'no_secure_connection' => 'secure_connection_notice');
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
     * Show a notice highlighting bad template files.
     */
    public static function template_file_check_notice()
    {
    }
    /**
     * Show a notice asking users to convert to shipping zones.
     *
     * @todo remove in 4.0.0
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
     * Notice shown when regenerating thumbnails background process is running.
     *
     * @since 3.6.0
     */
    public static function regenerating_lookup_table_notice()
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
    /**
     * Wrapper for is_plugin_active.
     *
     * @param string $plugin Plugin to check.
     * @return boolean
     */
    protected static function is_plugin_active($plugin)
    {
    }
    /**
     * Simplify Commerce is no longer in core.
     *
     * @deprecated 3.6.0 No longer shown.
     */
    public static function simplify_commerce_notice()
    {
    }
    /**
     * Show the Theme Check notice.
     *
     * @deprecated 3.3.0 No longer shown.
     */
    public static function theme_check_notice()
    {
    }
}