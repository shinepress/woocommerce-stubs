<?php


/**
 * Return low stock amount to determine if notification needs to be sent
 *
 * Since 5.2.0, this function no longer redirects from variation to its parent product.
 * Low stock amount can now be attached to the variation itself and if it isn't, only
 * then we check the parent product, and if it's not there, then we take the default
 * from the store-wide setting.
 *
 * @param  WC_Product $product Product to get data from.
 * @since  3.5.0
 * @return int
 */
function wc_get_low_stock_amount(\WC_Product $product)
{
}