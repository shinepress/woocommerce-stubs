<?php


/**
 * Try to refund the payment for an order via the gateway.
 *
 * @since 3.0.0
 * @throws Exception Throws exceptions when fail to refund, but returns WP_Error instead.
 * @param WC_Order $order  Order instance.
 * @param string   $amount Amount to refund.
 * @param string   $reason Refund reason.
 * @return bool|WP_Error
 */
function wc_refund_payment($order, $amount, $reason = '')
{
}