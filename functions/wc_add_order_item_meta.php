<?php


/**
 * WooCommerce Order Item Meta API - Add term meta.
 *
 * @param int    $item_id    Item ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param bool   $unique     If meta data should be unique (default: false).
 *
 * @throws Exception         When `WC_Data_Store::load` validation fails.
 * @return int               New row ID or 0.
 */
function wc_add_order_item_meta($item_id, $meta_key, $meta_value, $unique = \false)
{
}