<?php


/**
 * WC_Helper_Plugin_Info Class
 *
 * Provides the "View Information" core modals with data for WooCommerce.com
 * hosted extensions.
 */
class WC_Helper_Plugin_Info
{
    /**
     * Loads the class, runs on init.
     */
    public static function load()
    {
    }
    /**
     * Plugin information callback for Woo extensions.
     *
     * @param object $response The response core needs to display the modal.
     * @param string $action The requested plugins_api() action.
     * @param object $args Arguments passed to plugins_api().
     *
     * @return object An updated $response.
     */
    public static function plugins_api($response, $action, $args)
    {
    }
}