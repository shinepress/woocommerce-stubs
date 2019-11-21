<?php


/**
 * Add a item to an order (for example a line item).
 *
 * @param int   $order_id   Order ID.
 * @param array $item_array Items list.
 *
 * @throws Exception        When `WC_Data_Store::load` validation fails.
 * @return int|bool         Item ID or false
 */
function wc_add_order_item($order_id, $item_array)
{
}