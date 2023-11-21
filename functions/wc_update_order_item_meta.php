<?php


/**
 * WooCommerce Order Item Meta API - Update term meta.
 *
 * @param int    $item_id    Item ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param string $prev_value Previous value (default: '').
 *
 * @throws Exception         When `WC_Data_Store::load` validation fails.
 * @return bool
 */
function wc_update_order_item_meta($item_id, $meta_key, $meta_value, $prev_value = '')
{
}