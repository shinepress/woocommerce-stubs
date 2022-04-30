<?php


/**
 * Handles Refunds and other API requests such as capture.
 *
 * @since 3.0.0
 */
class WC_Gateway_Paypal_API_Handler
{
    /**
     * API Username
     *
     * @var string
     */
    public static $api_username;
    /**
     * API Password
     *
     * @var string
     */
    public static $api_password;
    /**
     * API Signature
     *
     * @var string
     */
    public static $api_signature;
    /**
     * Sandbox
     *
     * @var bool
     */
    public static $sandbox = \false;
    /**
     * Get capture request args.
     * See https://developer.paypal.com/docs/classic/api/merchant/DoCapture_API_Operation_NVP/.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Amount.
     * @return array
     */
    public static function get_capture_request($order, $amount = \null)
    {
    }
    /**
     * Get refund request args.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Refund amount.
     * @param  string   $reason Refund reason.
     * @return array
     */
    public static function get_refund_request($order, $amount = \null, $reason = '')
    {
    }
    /**
     * Capture an authorization.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Amount.
     * @return object Either an object of name value pairs for a success, or a WP_ERROR object.
     */
    public static function do_capture($order, $amount = \null)
    {
    }
    /**
     * Refund an order via PayPal.
     *
     * @param  WC_Order $order Order object.
     * @param  float    $amount Refund amount.
     * @param  string   $reason Refund reason.
     * @return object Either an object of name value pairs for a success, or a WP_ERROR object.
     */
    public static function refund_transaction($order, $amount = \null, $reason = '')
    {
    }
}