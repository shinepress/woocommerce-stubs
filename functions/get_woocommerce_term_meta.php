<?php


/**
 * WooCommerce Term Meta API
 *
 * WC tables for storing term meta are deprecated from WordPress 4.4 since 4.4 has its own table.
 * This function serves as a wrapper, using the new table if present, or falling back to the WC table.
 *
 * @deprecated 3.6.0
 * @param int    $term_id Term ID.
 * @param string $key     Meta key.
 * @param bool   $single  Whether to return a single value. (default: true).
 * @return mixed
 */
function get_woocommerce_term_meta($term_id, $key, $single = \true)
{
}