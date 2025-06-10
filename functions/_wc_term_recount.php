<?php


/**
 * Function for recounting product terms, ignoring hidden products.
 *
 * This is used as the update_count_callback for the Product Category and Product Tag
 * taxonomies. By default, it actually calculates two (possibly different) counts for each
 * term, which it stores in two different places. The first count is the one done by WordPress
 * itself, and is based on the status of the objects that are assigned the terms. In this case,
 * only products with the publish status are counted. This count is stored in the
 * `wp_term_taxonomy` table in the `count` field.
 *
 * The second count is based on WooCommerce-specific characteristics. In addition to the
 * publish status requirement, products are only counted if they are considered visible in the
 * catalog. This count is stored in the `wp_termmeta` table. The wc_change_term_counts function
 * is used to override the first count with the second count in some circumstances.
 *
 * Since the first count only needs to be recalculated when a product status is changed in some
 * way, it can sometimes be skipped (thus avoiding some potentially expensive queries). Setting
 * the $callback parameter to false skips the first count.
 *
 * @param array       $terms                       List of terms. For legacy reasons, this can
 *                                                 either be a list of taxonomy term IDs or an
 *                                                 associative array in the format of
 *                                                 term ID > parent term ID.
 * @param WP_Taxonomy $taxonomy                    The relevant taxonomy.
 * @param bool        $callback                    Whether to also recalculate the term counts
 *                                                 using the WP Core callback. Default true.
 * @param bool        $terms_are_term_taxonomy_ids Flag to indicate which format the list of
 *                                                 terms is in. Default true, which indicates
 *                                                 that it is a list of taxonomy term IDs.
 */
function _wc_term_recount($terms, $taxonomy, $callback = \true, $terms_are_term_taxonomy_ids = \true)
{
}