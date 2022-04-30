<?php


/**
 * Prevent password protected products being added to the cart.
 *
 * @param  bool $passed     Validation.
 * @param  int  $product_id Product ID.
 * @return bool
 */
function wc_protected_product_add_to_cart($passed, $product_id)
{
}