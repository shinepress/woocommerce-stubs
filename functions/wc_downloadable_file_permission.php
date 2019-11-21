<?php


/**
 * Grant downloadable product access to the file identified by $download_id.
 *
 * @param  string         $download_id File identifier.
 * @param  int|WC_Product $product     Product instance or ID.
 * @param  WC_Order       $order       Order data.
 * @param  int            $qty         Quantity purchased.
 * @return int|bool insert id or false on failure.
 */
function wc_downloadable_file_permission($download_id, $product, $order, $qty = 1)
{
}