<?php


/**
 * WooCommerce Term Meta API.
 *
 * WC tables for storing term meta are deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @deprecated 3.6.0
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Meta key.
 * @param mixed  $meta_value Meta value.
 * @param string $prev_value Previous value. (default: '').
 * @return bool
 */
function update_woocommerce_term_meta($term_id, $meta_key, $meta_value, $prev_value = '')
{
}