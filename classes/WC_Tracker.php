<?php


/**
 * WooCommerce Tracker Class
 */
class WC_Tracker
{
    /**
     * URL to the WooThemes Tracker API endpoint.
     *
     * @var string
     */
    private static $api_url = 'https://tracking.woocommerce.com/v1/';
    /**
     * Hook into cron event.
     */
    public static function init()
    {
    }
    /**
     * Decide whether to send tracking data or not.
     *
     * @param boolean $override Should override?.
     */
    public static function send_tracking_data($override = \false)
    {
    }
    /**
     * Get the last time tracking data was sent.
     *
     * @return int|bool
     */
    private static function get_last_send_time()
    {
    }
    /**
     * Get all the tracking data.
     *
     * @return array
     */
    private static function get_tracking_data()
    {
    }
    /**
     * Get the current theme info, theme name and version.
     *
     * @return array
     */
    public static function get_theme_info()
    {
    }
    /**
     * Get WordPress related data.
     *
     * @return array
     */
    private static function get_wordpress_info()
    {
    }
    /**
     * Get server related info.
     *
     * @return array
     */
    private static function get_server_info()
    {
    }
    /**
     * Get all plugins grouped into activated or not.
     *
     * @return array
     */
    private static function get_all_plugins()
    {
    }
    /**
     * Check to see if the helper is connected to woocommerce.com
     *
     * @return string
     */
    private static function get_helper_connected()
    {
    }
    /**
     * Get user totals based on user role.
     *
     * @return array
     */
    private static function get_user_counts()
    {
    }
    /**
     * Get product totals based on product type.
     *
     * @return array
     */
    public static function get_product_counts()
    {
    }
    /**
     * Get order counts
     *
     * @return array
     */
    private static function get_order_counts()
    {
    }
    /**
     * Combine all order data.
     *
     * @return array
     */
    private static function get_orders()
    {
    }
    /**
     * Get review counts for different statuses.
     *
     * @return array
     */
    private static function get_review_counts()
    {
    }
    /**
     * Get the number of product categories.
     *
     * @return int
     */
    private static function get_category_counts()
    {
    }
    /**
     * Get a list of all active payment gateways.
     *
     * @return array
     */
    private static function get_active_payment_gateways()
    {
    }
    /**
     * Get a list of all active shipping methods.
     *
     * @return array
     */
    private static function get_active_shipping_methods()
    {
    }
    /**
     * Get all options starting with woocommerce_ prefix.
     *
     * @return array
     */
    private static function get_all_woocommerce_options_values()
    {
    }
    /**
     * Look for any template override and return filenames.
     *
     * @return array
     */
    private static function get_all_template_overrides()
    {
    }
    /**
     * When an admin user logs in, there user agent is tracked in user meta and collected here.
     *
     * @return array
     */
    private static function get_admin_user_agents()
    {
    }
    /**
     * Get order totals
     *
     * @return array
     */
    public static function get_order_totals()
    {
    }
    /**
     * Get last order date
     *
     * @return string
     */
    private static function get_order_dates()
    {
    }
}