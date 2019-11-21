<?php


/**
 * Simplify Commerce Gateway.
 *
 * @class       WC_Gateway_Simplify_Commerce
 * @extends     WC_Payment_Gateway_CC
 * @since       2.2.0
 * @version     1.0.0
 * @package     WooCommerce/Classes/Payment
 * @author      WooThemes
 */
class WC_Gateway_Simplify_Commerce extends \WC_Payment_Gateway_CC
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Init Simplify SDK.
     */
    protected function init_simplify_sdk()
    {
    }
    /**
     * Admin Panel Options.
     * - Options for bits like 'title' and availability on a country-by-country basis.
     */
    public function admin_options()
    {
    }
    /**
     * Check if SSL is enabled and notify the user.
     */
    public function checks()
    {
    }
    /**
     * Check if this gateway is enabled.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Initialise Gateway Settings Form Fields.
     */
    public function init_form_fields()
    {
    }
    /**
     * Payment form on checkout page.
     */
    public function payment_fields()
    {
    }
    /**
     * Outputs scripts used for simplify payment.
     */
    public function payment_scripts()
    {
    }
    public function add_payment_method()
    {
    }
    /**
     * Actually saves a customer token to the database.
     *
     * @param  WC_Payment_Token $customer_token Payment Token
     * @param  string           $cart_token CC Token
     * @param  array            $customer_info 'email', 'name'
     *
     * @return null|WC_Payment_Token|WC_Payment_Token_CC
     */
    public function save_token($customer_token, $cart_token, $customer_info)
    {
    }
    /**
     * Process customer: updating or creating a new customer/saved CC
     *
     * @param  WC_Order         $order          Order object
     * @param  WC_Payment_Token $customer_token Payment Token
     * @param  string           $cart_token     CC Token
     */
    protected function process_customer($order, $customer_token = \null, $cart_token = '')
    {
    }
    /**
     * Process standard payments.
     *
     * @param  WC_Order $order
     * @param  string   $cart_token
     * @param string   $customer_token
     *
     * @return array
     * @uses   Simplify_ApiException
     * @uses   Simplify_BadRequestException
     */
    protected function process_standard_payments($order, $cart_token = '', $customer_token = '')
    {
    }
    /**
     * do payment function.
     *
     * @param WC_order $order
     * @param int      $amount (default: 0)
     * @param array    $token
     *
     * @return bool|WP_Error
     * @uses  Simplify_BadRequestException
     */
    public function do_payment($order, $amount = 0, $token = array())
    {
    }
    /**
     * Process standard payments.
     *
     * @param WC_Order $order
     * @return array
     */
    protected function process_hosted_payments($order)
    {
    }
    protected function get_users_token()
    {
    }
    /**
     * Process the payment.
     *
     * @param int $order_id
     *
     * @return array|void
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Hosted payment args.
     *
     * @param  WC_Order $order
     *
     * @return array
     */
    protected function get_hosted_payments_args($order)
    {
    }
    /**
     * Receipt page.
     *
     * @param  int $order_id
     */
    public function receipt_page($order_id)
    {
    }
    /**
     * Return handler for Hosted Payments.
     */
    public function return_handler()
    {
    }
    /**
     * Process the order status.
     *
     * @param  WC_Order $order
     * @param  string   $payment_id
     * @param  string   $status
     * @param  string   $auth_code
     *
     * @return bool
     */
    public function process_order_status($order, $payment_id, $status, $auth_code)
    {
    }
    /**
     * Process refunds.
     * WooCommerce 2.2 or later.
     *
     * @param  int    $order_id
     * @param  float  $amount
     * @param  string $reason
     * @uses   Simplify_ApiException
     * @uses   Simplify_BadRequestException
     * @return bool|WP_Error
     */
    public function process_refund($order_id, $amount = \null, $reason = '')
    {
    }
    /**
     * Get gateway icon.
     *
     * @access public
     * @return string
     */
    public function get_icon()
    {
    }
}