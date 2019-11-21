<?php


/**
 * Wrapper for wp_get_post_terms which supports ordering by parent.
 *
 * NOTE: At this point in time, ordering by menu_order for example isn't possible with this function. wp_get_post_terms has no.
 *   filters which we can utilise to modify it's query. https://core.trac.wordpress.org/ticket/19094.
 *
 * @param  int    $product_id Product ID.
 * @param  string $taxonomy   Taxonomy slug.
 * @param  array  $args       Query arguments.
 * @return array
 */
function wc_get_product_terms($product_id, $taxonomy, $args = array())
{
}