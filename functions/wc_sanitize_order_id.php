<?php


/**
 * Sanitize order id removing unwanted characters.
 *
 * E.g Users can sometimes try to track an order id using # with no success.
 * This function will fix this.
 *
 * @since 3.1.0
 * @param int $order_id Order ID.
 */
function wc_sanitize_order_id($order_id)
{
}