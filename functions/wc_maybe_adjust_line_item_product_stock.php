<?php


/**
 * Sees if line item stock has already reduced stock, and whether those values need adjusting e.g. after changing item qty.
 *
 * @since 3.6.0
 * @param WC_Order_Item $item Item object.
 * @param integer       $item_quantity Optional quantity to check against. Read from object if not passed.
 * @return boolean|array|WP_Error Array of changes or error object when stock is updated (@see wc_update_product_stock). False if nothing changes.
 */
function wc_maybe_adjust_line_item_product_stock($item, $item_quantity = -1)
{
}