<?php


/**
 * woocommerce_calc_shipping was an option used to determine if shipping was enabled prior to version 2.6.0. This has since been replaced with wc_shipping_enabled() function and
 * the woocommerce_ship_to_countries setting.
 * @since 2.6.0
 * @return string
 */
function woocommerce_calc_shipping_backwards_compatibility($value)
{
}