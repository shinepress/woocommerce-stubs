<?php


/**
 * Update an item for an order.
 *
 * @since 2.2
 * @param int   $item_id Item ID.
 * @param array $args    Either `order_item_type` or `order_item_name`.
 *
 * @throws Exception     When `WC_Data_Store::load` validation fails.
 * @return bool          True if successfully updated, false otherwise.
 */
function wc_update_order_item($item_id, $args)
{
}