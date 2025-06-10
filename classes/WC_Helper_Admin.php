<?php


/**
 * WC_Helper Class
 *
 * The main entry-point for all things related to the Helper.
 * The Helper manages the connection between the store and
 * an account on WooCommerce.com.
 */
class WC_Helper_Admin
{
    /**
     * Loads the class, runs on init
     *
     * @return void
     */
    public static function load()
    {
    }
    /**
     * Pushes settings onto the WooCommerce Admin global settings object (wcSettings).
     *
     * @param mixed $settings The settings object we're amending.
     *
     * @return mixed $settings
     */
    public static function add_marketplace_settings($settings)
    {
    }
    /**
     * Generates the URL for connecting or disconnecting the store to/from WooCommerce.com.
     * Approach taken from existing helper code that isn't exposed.
     *
     * @param bool $reconnect indicate if the site is being reconnected.
     *
     * @return string
     */
    public static function get_connection_url($reconnect = \false)
    {
    }
    /**
     * Registers the REST routes for the featured products and product
     * previews endpoints.
     */
    public static function register_rest_routes()
    {
    }
    /**
     * The Extensions page can only be accessed by users with the manage_woocommerce
     * capability. So the API mimics that behavior.
     */
    public static function get_permission()
    {
    }
    /**
     * Fetch featured products from WooCommerce.com and serve them
     * as JSON.
     */
    public static function get_featured()
    {
    }
    /**
     * Fetch data for product previews from WooCommerce.com.
     *
     * @param WP_REST_Request $request Request object.
     */
    public static function get_product_preview($request)
    {
    }
}