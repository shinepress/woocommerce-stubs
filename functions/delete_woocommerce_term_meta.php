<?php


/**
 * WooCommerce Term Meta API
 *
 * WC tables for storing term meta are @deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @param int    $term_id    Term ID.
 * @param string $meta_key   Meta key.
 * @param string $meta_value Meta value (default: '').
 * @param bool   $deprecated Deprecated param (default: false).
 * @return bool
 */
function delete_woocommerce_term_meta($term_id, $meta_key, $meta_value = '', $deprecated = \false)
{
}