<?php


/**
 * Attach product featured image. Use image filename to match a product sku when product is not provided.
 *
 * @since 8.5.0
 * @param int        $attachment_id Media attachment ID.
 * @param WC_Product $product Optional product object.
 * @param bool       $save_product If true, the changes in the product will be saved before the method returns.
 * @return void
 */
function wc_product_attach_featured_image($attachment_id, $product = \null, $save_product = \true)
{
}