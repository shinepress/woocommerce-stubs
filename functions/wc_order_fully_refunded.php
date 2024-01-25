<?php


/**
 * When refunding an order, create a refund line item if the partial refunds do not match order total.
 *
 * This is manual; no gateway refund will be performed.
 *
 * @since 2.4
 * @param int $order_id Order ID.
 */
function wc_order_fully_refunded($order_id)
{
}