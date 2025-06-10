<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * PaymentUtils
 *
 * Utility class for payment methods.
 */
class PaymentUtils
{
    /**
     * Callback for woocommerce_payment_methods_list_item filter to add token id
     * to the generated list.
     *
     * @param array     $list_item The current list item for the saved payment method.
     * @param \WC_Token $token     The token for the current list item.
     *
     * @return array The list item with the token id added.
     */
    public static function include_token_id_with_payment_methods($list_item, $token)
    {
    }
    /**
     * Get enabled payment gateways.
     *
     * @return array
     */
    public static function get_enabled_payment_gateways()
    {
    }
    /**
     * Returns enabled saved payment methods for a customer and the default method if there are multiple.
     *
     * @return array
     */
    public static function get_saved_payment_methods()
    {
    }
    /**
     * Returns the default payment method for a customer.
     *
     * @return string
     */
    public static function get_default_payment_method()
    {
    }
}