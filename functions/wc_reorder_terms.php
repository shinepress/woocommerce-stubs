<?php


/**
 * Move a term before the a given element of its hierarchy level.
 *
 * @param int    $the_term Term ID.
 * @param int    $next_id  The id of the next sibling element in save hierarchy level.
 * @param string $taxonomy Taxnomy.
 * @param int    $index    Term index (default: 0).
 * @param mixed  $terms    List of terms. (default: null).
 * @return int
 */
function wc_reorder_terms($the_term, $next_id, $taxonomy, $index = 0, $terms = \null)
{
}