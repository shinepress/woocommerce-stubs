<?php


/**
 * Delete all related products transients when a product is updated/created.
 * This is necessary because changing one product affects all related products too.
 *
 * @since 9.8.0
 * @param int $post_id The product ID updated/created.
 */
function wc_delete_related_product_transients($post_id)
{
}