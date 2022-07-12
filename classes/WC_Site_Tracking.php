<?php


/**
 * This class adds actions to track usage of WooCommerce.
 */
class WC_Site_Tracking
{
    /**
     * Check if tracking is enabled.
     *
     * @return bool
     */
    public static function is_tracking_enabled()
    {
    }
    /**
     * Register scripts required to record events from javascript.
     */
    public static function register_scripts()
    {
    }
    /**
     * Add scripts required to record events from javascript.
     */
    public static function enqueue_scripts()
    {
    }
    /**
     * Adds the tracking function to the admin footer.
     */
    public static function add_tracking_function()
    {
    }
    /**
     * Adds a function to load tracking scripts and enable them client-side on the fly.
     * Note that this function does not update `woocommerce_allow_tracking` in the database
     * and will not persist enabled tracking across page loads.
     */
    public static function add_enable_tracking_function()
    {
    }
    /**
     * Init tracking.
     */
    public static function init()
    {
    }
    /**
     * Get total product counts.
     *
     * @return int Number of products.
     */
    public static function get_products_count()
    {
    }
    /**
     * Gather blog related properties.
     *
     * @param int $user_id User id.
     * @return array Blog details.
     */
    public static function get_blog_details($user_id)
    {
    }
    /**
     * Gather details from the request to the server.
     *
     * @return array Server details.
     */
    public static function get_server_details()
    {
    }
    /**
     * Add global properties to tracks.
     *
     * @param array $properties Array of event properties.
     * @param array $event_name Name of the event, if passed.
     * @return array
     */
    public static function add_global_properties($properties, $event_name = \null)
    {
    }
}