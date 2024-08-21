<?php

namespace Automattic\WooCommerce\Admin\Features\ShippingPartnerSuggestions;

/**
 * Specs data source poller class for shipping partner suggestions.
 */
class ShippingPartnerSuggestionsDataSourcePoller extends \Automattic\WooCommerce\Admin\RemoteSpecs\DataSourcePoller
{
    /**
     * Data Source Poller ID.
     */
    const ID = 'shipping_partner_suggestions';
    /**
     * Default data sources array.
     */
    const DATA_SOURCES = array('https://woocommerce.com/wp-json/wccom/shipping-partner-suggestions/2.0/suggestions.json');
    /**
     * Class instance.
     *
     * @var ShippingPartnerSuggestionsDataSourcePoller instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    public static function get_instance()
    {
    }
}