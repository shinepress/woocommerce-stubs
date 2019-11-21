<?php


/**
 * Add term ordering to get_terms.
 *
 * It enables the support a 'menu_order' parameter to get_terms for the product_cat taxonomy.
 * By default it is 'ASC'. It accepts 'DESC' too.
 *
 * To disable it, set it ot false (or 0).
 *
 * @param array $clauses    Clauses.
 * @param array $taxonomies Taxonomies.
 * @param array $args       Arguments.
 * @return array
 */
function wc_terms_clauses($clauses, $taxonomies, $args)
{
}