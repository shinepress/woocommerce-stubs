<?php


/**
 * Here for backwards compatibility.
 *
 * @since 3.0.0
 */
class WC_Gateway_Paypal_Refund extends \WC_Gateway_Paypal_API_Handler
{
    /**
     * Get refund request args. Proxy to WC_Gateway_Paypal_API_Handler::get_refund_request().
     *
     * @param WC_Order $order Order object.
     * @param float    $amount Refund amount.
     * @param string   $reason Refund reason.
     *
     * @return array
     */
    public static function get_request($order, $amount = \null, $reason = '')
    {
    }
    /**
     * Process an order refund.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Refund amount.
     * @param  string   $reason Refund reason.
     * @param  bool     $sandbox Whether to use sandbox mode or not.
     * @return object Either an object of name value pairs for a success, or a WP_ERROR object.
     */
    public static function refund_order($order, $amount = \null, $reason = '', $sandbox = \false)
    {
    }
}