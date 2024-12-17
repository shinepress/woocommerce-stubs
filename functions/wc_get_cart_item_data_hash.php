<?php


/**
 * Gets a hash of important product data that when changed should cause cart items to be invalidated.
 *
 * The woocommerce_cart_item_data_to_validate filter can be used to add custom properties.
 *
 * @param WC_Product $product Product object.
 * @return string
 */
function wc_get_cart_item_data_hash($product)
{
}