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
     * Add empty tracking function to admin footer when tracking is disabled in case
     * it's called without checking if it's defined beforehand.
     */
    public static function add_empty_tracking_function()
    {
    }
    /**
     * Init tracking.
     */
    public static function init()
    {
    }
}