<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Class containing utility methods for dealing with the Cart and Checkout blocks.
 */
class CartCheckoutUtils
{
    /**
     * Checks if the default cart page is using the Cart block.
     *
     * @return bool true if the WC cart page is using the Cart block.
     */
    public static function is_cart_block_default()
    {
    }
    /**
     * Checks if the default checkout page is using the Checkout block.
     *
     * @return bool true if the WC checkout page is using the Checkout block.
     */
    public static function is_checkout_block_default()
    {
    }
    /**
     * Checks if the template overriding the page loads the page content or not.
     * Templates by default load the page content, but if that block is deleted the content can get out of sync with the one presented in the page editor.
     *
     * @param string $block The block to check.
     *
     * @return bool true if the template has out of sync content.
     */
    public static function is_overriden_by_custom_template_content(string $block): bool
    {
    }
    /**
     * Gets country codes, names, states, and locale information.
     *
     * @return array
     */
    public static function get_country_data()
    {
    }
    /**
     * Removes accents from an array of values, sorts by the values, then returns the original array values sorted.
     *
     * @param array $array Array of values to sort.
     * @return array Sorted array.
     */
    protected static function deep_sort_with_accents($array)
    {
    }
    /**
     * Retrieves formatted shipping zones from WooCommerce.
     *
     * @return array An array of formatted shipping zones.
     */
    public static function get_shipping_zones()
    {
    }
}