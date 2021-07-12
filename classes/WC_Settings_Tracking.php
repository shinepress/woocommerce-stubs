<?php


/**
 * This class adds actions to track usage of WooCommerce Settings.
 */
class WC_Settings_Tracking
{
    /**
     * List of allowed WooCommerce settings to potentially track updates for.
     *
     * @var array
     */
    protected $allowed_options = array();
    /**
     * WooCommerce settings that have been updated (and will be tracked).
     *
     * @var array
     */
    protected $updated_options = array();
    /**
     * Init tracking.
     */
    public function init()
    {
    }
    /**
     * Add a WooCommerce option name to our allowed options list and attach
     * the `update_option` hook. Rather than inspecting every updated
     * option and pattern matching for "woocommerce", just build a dynamic
     * list for WooCommerce options that might get updated.
     *
     * See `woocommerce_update_option` hook.
     *
     * @param array $option WooCommerce option (config) that might get updated.
     */
    public function add_option_to_list($option)
    {
    }
    /**
     * Add WooCommerce option to a list of updated options.
     *
     * @param string $option_name Option being updated.
     * @param mixed  $old_value Old value of option.
     * @param mixed  $new_value New value of option.
     */
    public function track_setting_change($option_name, $old_value, $new_value)
    {
    }
    /**
     * Send a Tracks event for WooCommerce options that changed values.
     */
    public function send_settings_change_event()
    {
    }
    /**
     * Send a Tracks event for WooCommerce settings page views.
     */
    public function track_settings_page_view()
    {
    }
}