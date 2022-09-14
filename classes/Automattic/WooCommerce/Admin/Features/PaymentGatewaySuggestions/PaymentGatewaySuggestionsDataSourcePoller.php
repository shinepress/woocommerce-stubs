<?php

namespace Automattic\WooCommerce\Admin\Features\PaymentGatewaySuggestions;

/**
 * Specs data source poller class for payment gateway suggestions.
 */
class PaymentGatewaySuggestionsDataSourcePoller extends \Automattic\WooCommerce\Admin\DataSourcePoller
{
    /**
     * Data Source Poller ID.
     */
    const ID = 'payment_gateway_suggestions';
    /**
     * Default data sources array.
     */
    const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/payment-gateway-suggestions/1.0/suggestions.json');
    /**
     * Class instance.
     *
     * @var Analytics instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
}