<?php


/**
 * Returns the price including or excluding tax.
 *
 * By default it's based on the 'woocommerce_tax_display_shop' setting.
 * Set `$arg['display_context']` to 'cart' to base on the 'woocommerce_tax_display_cart' setting instead.
 *
 * @since  3.0.0
 * @since  7.6.0 Added `display_context` argument.
 *
 * @param  WC_Product $product WC_Product object.
 * @param  array      $args Optional arguments to pass product quantity and price.
 * @return float
 */
function wc_get_price_to_display($product, $args = array())
{
}