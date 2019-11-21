<?php


/**
 * WC_Install Class.
 */
class WC_Install
{
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * @var array
     */
    private static $db_updates = array('2.0.0' => array('wc_update_200_file_paths', 'wc_update_200_permalinks', 'wc_update_200_subcat_display', 'wc_update_200_taxrates', 'wc_update_200_line_items', 'wc_update_200_images', 'wc_update_200_db_version'), '2.0.9' => array('wc_update_209_brazillian_state', 'wc_update_209_db_version'), '2.1.0' => array('wc_update_210_remove_pages', 'wc_update_210_file_paths', 'wc_update_210_db_version'), '2.2.0' => array('wc_update_220_shipping', 'wc_update_220_order_status', 'wc_update_220_variations', 'wc_update_220_attributes', 'wc_update_220_db_version'), '2.3.0' => array('wc_update_230_options', 'wc_update_230_db_version'), '2.4.0' => array('wc_update_240_options', 'wc_update_240_shipping_methods', 'wc_update_240_api_keys', 'wc_update_240_refunds', 'wc_update_240_db_version'), '2.4.1' => array('wc_update_241_variations', 'wc_update_241_db_version'), '2.5.0' => array('wc_update_250_currency', 'wc_update_250_db_version'), '2.6.0' => array('wc_update_260_options', 'wc_update_260_termmeta', 'wc_update_260_zones', 'wc_update_260_zone_methods', 'wc_update_260_refunds', 'wc_update_260_db_version'), '3.0.0' => array('wc_update_300_grouped_products', 'wc_update_300_settings', 'wc_update_300_product_visibility', 'wc_update_300_db_version'), '3.1.0' => array('wc_update_310_downloadable_products', 'wc_update_310_old_comments', 'wc_update_310_db_version'), '3.1.2' => array('wc_update_312_shop_manager_capabilities', 'wc_update_312_db_version'), '3.2.0' => array('wc_update_320_mexican_states', 'wc_update_320_db_version'), '3.3.0' => array('wc_update_330_image_options', 'wc_update_330_webhooks', 'wc_update_330_product_stock_status', 'wc_update_330_set_default_product_cat', 'wc_update_330_clear_transients', 'wc_update_330_set_paypal_sandbox_credentials', 'wc_update_330_db_version'), '3.4.0' => array('wc_update_340_states', 'wc_update_340_state', 'wc_update_340_last_active', 'wc_update_340_db_version'), '3.4.3' => array('wc_update_343_cleanup_foreign_keys', 'wc_update_343_db_version'), '3.4.4' => array('wc_update_344_recreate_roles', 'wc_update_344_db_version'), '3.5.0' => array('wc_update_350_order_customer_id', 'wc_update_350_reviews_comment_type', 'wc_update_350_db_version'));
    /**
     * Background update class.
     *
     * @var object
     */
    private static $background_updater;
    /**
     * Hook in tabs.
     */
    public static function init()
    {
    }
    /**
     * Init background updates
     */
    public static function init_background_updater()
    {
    }
    /**
     * Check WooCommerce version and run the updater is required.
     *
     * This check is done on all requests and runs if the versions do not match.
     */
    public static function check_version()
    {
    }
    /**
     * Install actions when a update button is clicked within the admin area.
     *
     * This function is hooked into admin_init to affect admin only.
     */
    public static function install_actions()
    {
    }
    /**
     * Install WC.
     */
    public static function install()
    {
    }
    /**
     * Reset any notices added to admin.
     *
     * @since 3.2.0
     */
    private static function remove_admin_notices()
    {
    }
    /**
     * Setup WC environment - post types, taxonomies, endpoints.
     *
     * @since 3.2.0
     */
    private static function setup_environment()
    {
    }
    /**
     * Is this a brand new WC install?
     *
     * @since 3.2.0
     * @return boolean
     */
    private static function is_new_install()
    {
    }
    /**
     * Is a DB update needed?
     *
     * @since 3.2.0
     * @return boolean
     */
    private static function needs_db_update()
    {
    }
    /**
     * See if we need the wizard or not.
     *
     * @since 3.2.0
     */
    private static function maybe_enable_setup_wizard()
    {
    }
    /**
     * See if we need to show or run database updates during install.
     *
     * @since 3.2.0
     */
    private static function maybe_update_db_version()
    {
    }
    /**
     * Update WC version to current.
     */
    private static function update_wc_version()
    {
    }
    /**
     * Get list of DB update callbacks.
     *
     * @since  3.0.0
     * @return array
     */
    public static function get_db_update_callbacks()
    {
    }
    /**
     * Push all needed DB updates to the queue for processing.
     */
    private static function update()
    {
    }
    /**
     * Update DB version to current.
     *
     * @param string|null $version New WooCommerce DB version or null.
     */
    public static function update_db_version($version = \null)
    {
    }
    /**
     * Add more cron schedules.
     *
     * @param  array $schedules List of WP scheduled cron jobs.
     * @return array
     */
    public static function cron_schedules($schedules)
    {
    }
    /**
     * Create cron jobs (clear them first).
     */
    private static function create_cron_jobs()
    {
    }
    /**
     * Create pages that the plugin relies on, storing page IDs in variables.
     */
    public static function create_pages()
    {
    }
    /**
     * Default options.
     *
     * Sets up the default options used on the settings page.
     */
    private static function create_options()
    {
    }
    /**
     * Add the default terms for WC taxonomies - product types and order statuses. Modify this at your own risk.
     */
    public static function create_terms()
    {
    }
    /**
     * Set up the database tables which the plugin needs to function.
     *
     * Tables:
     *      woocommerce_attribute_taxonomies - Table for storing attribute taxonomies - these are user defined
     *      woocommerce_termmeta - Term meta table - sadly WordPress does not have termmeta so we need our own
     *      woocommerce_downloadable_product_permissions - Table for storing user and guest download permissions.
     *          KEY(order_id, product_id, download_id) used for organizing downloads on the My Account page
     *      woocommerce_order_items - Order line items are stored in a table to make them easily queryable for reports
     *      woocommerce_order_itemmeta - Order line item meta is stored in a table for storing extra data.
     *      woocommerce_tax_rates - Tax Rates are stored inside 2 tables making tax queries simple and efficient.
     *      woocommerce_tax_rate_locations - Each rate can be applied to more than one postcode/city hence the second table.
     */
    private static function create_tables()
    {
    }
    /**
     * Get Table schema.
     *
     * See https://github.com/woocommerce/woocommerce/wiki/Database-Description/
     *
     * A note on indexes; Indexes have a maximum size of 767 bytes. Historically, we haven't need to be concerned about that.
     * As of WordPress 4.2, however, we moved to utf8mb4, which uses 4 bytes per character. This means that an index which
     * used to have room for floor(767/3) = 255 characters, now only has room for floor(767/4) = 191 characters.
     *
     * Changing indexes may cause duplicate index notices in logs due to https://core.trac.wordpress.org/ticket/34870 but dropping
     * indexes first causes too much load on some servers/larger DB.
     *
     * When adding or removing a table, make sure to update the list of tables in WC_Install::get_tables().
     *
     * @return string
     */
    private static function get_schema()
    {
    }
    /**
     * Return a list of WooCommerce tables. Used to make sure all WC tables are dropped when uninstalling the plugin
     * in a single site or multi site environment.
     *
     * @return array WC tables.
     */
    public static function get_tables()
    {
    }
    /**
     * Drop WooCommerce tables.
     *
     * @return void
     */
    public static function drop_tables()
    {
    }
    /**
     * Uninstall tables when MU blog is deleted.
     *
     * @param  array $tables List of tables that will be deleted by WP.
     * @return string[]
     */
    public static function wpmu_drop_tables($tables)
    {
    }
    /**
     * Create roles and capabilities.
     */
    public static function create_roles()
    {
    }
    /**
     * Get capabilities for WooCommerce - these are assigned to admin/shop manager during installation or reset.
     *
     * @return array
     */
    private static function get_core_capabilities()
    {
    }
    /**
     * Remove WooCommerce roles.
     */
    public static function remove_roles()
    {
    }
    /**
     * Create files/directories.
     */
    private static function create_files()
    {
    }
    /**
     * Create a placeholder image in the media library.
     *
     * @since 3.5.0
     */
    private static function create_placeholder_image()
    {
    }
    /**
     * Show action links on the plugin screen.
     *
     * @param   mixed $links Plugin Action links.
     * @return  array
     */
    public static function plugin_action_links($links)
    {
    }
    /**
     * Show row meta on the plugin screen.
     *
     * @param   mixed $links Plugin Row Meta.
     * @param   mixed $file  Plugin Base file.
     * @return  array
     */
    public static function plugin_row_meta($links, $file)
    {
    }
    /**
     * Get slug from path and associate it with the path.
     *
     * @param array  $plugins Associative array of plugin files to paths.
     * @param string $key Plugin relative path. Example: woocommerce/woocommerce.php.
     */
    private static function associate_plugin_file($plugins, $key)
    {
    }
    /**
     * Install a plugin from .org in the background via a cron job (used by
     * installer - opt in).
     *
     * @param string $plugin_to_install_id Plugin ID.
     * @param array  $plugin_to_install Plugin information.
     * @throws Exception If unable to proceed with plugin installation.
     * @since 2.6.0
     */
    public static function background_installer($plugin_to_install_id, $plugin_to_install)
    {
    }
    /**
     * Removes redirect added during MailChimp plugin's activation.
     *
     * @param string $option Option name.
     * @param string $value  Option value.
     */
    public static function remove_mailchimps_redirect($option, $value)
    {
    }
    /**
     * Install a theme from .org in the background via a cron job (used by installer - opt in).
     *
     * @param string $theme_slug Theme slug.
     * @throws Exception If unable to proceed with theme installation.
     * @since 3.1.0
     */
    public static function theme_background_installer($theme_slug)
    {
    }
}