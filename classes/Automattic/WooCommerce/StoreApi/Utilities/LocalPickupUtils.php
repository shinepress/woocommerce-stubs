<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Util class for local pickup related functionality, this contains methods that need to be accessed from places besides
 * the ShippingController, i.e. the OrderController.
 */
class LocalPickupUtils
{
    /**
     * Gets the local pickup location settings.
     *
     * @param string $context The context for the settings. Defaults to 'view'.
     */
    public static function get_local_pickup_settings($context = 'view')
    {
    }
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
    /**
     * Checks if a method is a local pickup method.
     *
     * @param string $method_id The method id to check.
     * @return bool True if the method is a local pickup method.
     */
    public static function is_local_pickup_method($method_id)
    {
    }
}