<?php


/**
 * Update a product's stock amount.
 *
 * Uses queries rather than update_post_meta so we can do this in one query (to avoid stock issues).
 *
 * @since  3.0.0 this supports set, increase and decrease.
 *
 * @param  int|WC_Product $product        Product ID or product instance.
 * @param  int|null       $stock_quantity Stock quantity.
 * @param  string         $operation      Type of opertion, allows 'set', 'increase' and 'decrease'.
 *
 * @return bool|int|null
 */
function wc_update_product_stock($product, $stock_quantity = \null, $operation = 'set')
{
}