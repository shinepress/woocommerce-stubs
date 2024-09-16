<?php


/**
 * Overrides the original term count for product categories and tags with the product count.
 * that takes catalog visibility into account.
 *
 * @param array        $terms      List of terms.
 * @param string|array $taxonomies Single taxonomy or list of taxonomies.
 * @return array
 */
function wc_change_term_counts($terms, $taxonomies)
{
}