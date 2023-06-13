<?php


/**
 * Standard way of retrieving orders based on certain parameters.
 *
 * This function should be used for order retrieval so that when we move to
 * custom tables, functions still work.
 *
 * Args and usage: https://github.com/woocommerce/woocommerce/wiki/wc_get_orders-and-WC_Order_Query
 *
 * @since  2.6.0
 * @param  array $args Array of args (above).
 * @return WC_Order[]|stdClass Number of pages and an array of order objects if
 *                             paginate is true, or just an array of values.
 */
function wc_get_orders($args)
{
}