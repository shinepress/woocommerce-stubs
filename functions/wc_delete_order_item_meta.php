<?php


/**
 * WooCommerce Order Item Meta API - Delete term meta.
 *
 * @param int    $item_id    Item ID.
 * @param string $meta_key   Meta key.
 * @param string $meta_value Meta value (default: '').
 * @param bool   $delete_all Delete all meta data, defaults to `false`.
 *
 * @throws Exception         When `WC_Data_Store::load` validation fails.
 * @return bool
 */
function wc_delete_order_item_meta($item_id, $meta_key, $meta_value = '', $delete_all = \false)
{
}