<?php


/**
 * Standard way of retrieving products based on certain parameters.
 *
 * This function should be used for product retrieval so that we have a data agnostic
 * way to get a list of products.
 *
 * Args and usage: https://github.com/woocommerce/woocommerce/wiki/wc_get_products-and-WC_Product_Query
 *
 * @since  3.0.0
 * @param  array $args Array of args (above).
 * @return array|stdClass Number of pages and an array of product objects if
 *                             paginate is true, or just an array of values.
 */
function wc_get_products($args)
{
}