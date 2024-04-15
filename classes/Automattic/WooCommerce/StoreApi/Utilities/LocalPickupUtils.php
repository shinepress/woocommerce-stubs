<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Util class for local pickup related functionality, this contains methods that need to be accessed from places besides
 * the ShippingController, i.e. the OrderController.
 */
class LocalPickupUtils
{
    /**
     * Checks if WC Blocks local pickup is enabled.
     *
     * @return bool True if local pickup is enabled.
     */
    public static function is_local_pickup_enabled()
    {
    }
    /**
     * Gets a list of payment method ids that support the 'local-pickup' feature.
     *
     * @return string[] List of payment method ids that support the 'local-pickup' feature.
     */
    public static function get_local_pickup_method_ids()
    {
    }
}