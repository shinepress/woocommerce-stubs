<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Remote Payment Methods engine.
 * This goes through the specs and gets eligible payment gateways.
 */
class Init extends \Automattic\WooCommerce\Admin\RemoteSpecs\RemoteSpecsEngine
{
    /**
     * Option name for dismissed payment method suggestions.
     */
    const RECOMMENDED_PAYMENT_PLUGINS_DISMISS_OPTION = 'woocommerce_setting_payments_recommendations_hidden';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Go through the specs and run them.
     *
     * @param array|null $specs payment suggestion spec array.
     * @return array
     */
    public static function get_suggestions(array $specs = null)
    {
    }
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
    }
    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
    }
    /**
     * Check if suggestions should be shown in the settings screen.
     *
     * @return bool
     */
    public static function should_display()
    {
    }
    /**
     * Dismiss the suggestions.
     */
    public static function dismiss()
    {
    }
}