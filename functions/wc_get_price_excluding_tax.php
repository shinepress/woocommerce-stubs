<?php


/**
 * For a given product, and optionally price/qty, work out the price with tax excluded, based on store settings.
 *
 * @since  3.0.0
 * @param  WC_Product $product WC_Product object.
 * @param  array      $args Optional arguments to pass product quantity and price.
 * @return float|string Price with tax excluded, or an empty string if price calculation failed.
 */
function wc_get_price_excluding_tax($product, $args = array())
{
}