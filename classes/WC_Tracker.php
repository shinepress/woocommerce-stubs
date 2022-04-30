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
     * Test whether this site is a staging site according to the Jetpack criteria.
     *
     * With Jetpack 8.1+, Jetpack::is_staging_site has been deprecated.
     * \Automattic\Jetpack\Status::is_staging_site is the replacement.
     * However, there are version of JP where \Automattic\Jetpack\Status exists, but does *not* contain is_staging_site method,
     * so with those, code still needs to use the previous check as a fallback.
     *
     * @return bool
     */
    private static function is_jetpack_staging_site()
    {
    }
    /**
     * Get all the tracking data.
     *
     * @return array
     */
    public static function get_tracking_data()
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
     * Get the settings of WooCommerce Payments plugin
     *
     * @return array
     */
    private static function get_wcpay_settings()
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
     * Get order counts.
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
     * Get order totals.
     *
     * @since 5.4.0
     * @return array
     */
    private static function get_order_totals()
    {
    }
    /**
     * Get last order date.
     *
     * @return string
     */
    private static function get_order_dates()
    {
    }
    /**
     * Get order details by gateway.
     *
     * @return array
     */
    private static function get_orders_by_gateway()
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
     * Search a specific post for text content.
     *
     * @param integer $post_id The id of the post to search.
     * @param string  $text    The text to search for.
     * @return string 'Yes' if post contains $text (otherwise 'No').
     */
    public static function post_contains_text($post_id, $text)
    {
    }
    /**
     * Get tracker data for a specific block type on a woocommerce page.
     *
     * @param string $block_name The name (id) of a block, e.g. `woocommerce/cart`.
     * @param string $woo_page_name The woo page to search, e.g. `cart`.
     * @return array Associative array of tracker data with keys:
     * - page_contains_block
     * - block_attributes
     */
    public static function get_block_tracker_data($block_name, $woo_page_name)
    {
    }
    /**
     * Get info about the cart & checkout pages.
     *
     * @return array
     */
    public static function get_cart_checkout_info()
    {
    }
    /**
     * Get info about WooCommerce Mobile App usage
     *
     * @return array
     */
    public static function get_woocommerce_mobile_usage()
    {
    }
}