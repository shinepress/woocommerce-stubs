<?php


/**
 * When a post is updated and terms recounted (called by _update_post_term_count), clear the ids.
 *
 * @param int    $object_id  Object ID.
 * @param array  $terms      An array of object terms.
 * @param array  $tt_ids     An array of term taxonomy IDs.
 * @param string $taxonomy   Taxonomy slug.
 * @param bool   $append     Whether to append new terms to the old terms.
 * @param array  $old_tt_ids Old array of term taxonomy IDs.
 */
function wc_clear_term_product_ids($object_id, $terms, $tt_ids, $taxonomy, $append, $old_tt_ids)
{
}