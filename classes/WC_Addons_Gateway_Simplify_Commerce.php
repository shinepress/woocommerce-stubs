<?php


/**
 * Simplify Commerce Gateway for subscriptions.
 *
 * @class       WC_Addons_Gateway_Simplify_Commerce
 * @extends     WC_Gateway_Simplify_Commerce
 * @since       2.2.0
 * @version     1.0.0
 * @package     WooCommerce/Classes/Payment
 * @author      WooThemes
 */
class WC_Addons_Gateway_Simplify_Commerce extends \WC_Gateway_Simplify_Commerce
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Hosted payment args.
     *
     * @param  array $args
     * @param  int   $order_id
     * @return array
     */
    public function hosted_payment_args($args, $order_id)
    {
    }
    /**
     * Check if order contains subscriptions.
     *
     * @param  int $order_id
     * @return bool
     */
    protected function order_contains_subscription($order_id)
    {
    }
    /**
     * Check if order contains pre-orders.
     *
     * @param  int $order_id
     * @return bool
     */
    protected function order_contains_pre_order($order_id)
    {
    }
    /**
     * Process the subscription.
     *
     * @param  WC_Order $order
     * @param  string   $cart_token
     * @uses   Simplify_ApiException
     * @uses   Simplify_BadRequestException
     * @return array
     * @throws Exception
     */
    protected function process_subscription($order, $cart_token = '')
    {
    }
    /**
     * Store the customer and card IDs on the order and subscriptions in the order.
     *
     * @param int    $order_id
     * @param string $customer_id
     */
    protected function save_subscription_meta($order_id, $customer_id)
    {
    }
    /**
     * Process the pre-order.
     *
     * @param WC_Order $order
     * @param string   $cart_token
     * @uses  Simplify_ApiException
     * @uses  Simplify_BadRequestException
     * @return array
     */
    protected function process_pre_order($order, $cart_token = '')
    {
    }
    /**
     * Process the payment.
     *
     * @param  int $order_id
     * @return array
     */
    public function process_payment($order_id)
    {
    }
    /**
     * process_subscription_payment function.
     *
     * @param WC_order $order
     * @param int      $amount (default: 0)
     * @uses  Simplify_BadRequestException
     * @return bool|WP_Error
     */
    public function process_subscription_payment($order, $amount = 0)
    {
    }
    /**
     * scheduled_subscription_payment function.
     *
     * @param float    $amount_to_charge The amount to charge.
     * @param WC_Order $renewal_order A WC_Order object created to record the renewal payment.
     */
    public function scheduled_subscription_payment($amount_to_charge, $renewal_order)
    {
    }
    /**
     * Update the customer_id for a subscription after using Simplify to complete a payment to make up for.
     * an automatic renewal payment which previously failed.
     *
     * @param WC_Subscription $subscription The subscription for which the failing payment method relates.
     * @param WC_Order        $renewal_order The order which recorded the successful payment (to make up for the failed automatic payment).
     */
    public function update_failing_payment_method($subscription, $renewal_order)
    {
    }
    /**
     * Include the payment meta data required to process automatic recurring payments so that store managers can.
     * manually set up automatic recurring payments for a customer via the Edit Subscription screen in Subscriptions v2.0+.
     *
     * @since 2.4
     * @param array           $payment_meta associative array of meta data required for automatic payments
     * @param WC_Subscription $subscription An instance of a subscription object
     * @return array
     */
    public function add_subscription_payment_meta($payment_meta, $subscription)
    {
    }
    /**
     * Validate the payment meta data required to process automatic recurring payments so that store managers can.
     * manually set up automatic recurring payments for a customer via the Edit Subscription screen in Subscriptions 2.0+.
     *
     * @since  2.4
     * @param  string $payment_method_id The ID of the payment method to validate
     * @param  array  $payment_meta associative array of meta data required for automatic payments
     * @throws Exception
     */
    public function validate_subscription_payment_meta($payment_method_id, $payment_meta)
    {
    }
    /**
     * Don't transfer customer meta to resubscribe orders.
     *
     * @access public
     * @param int $resubscribe_order The order created for the customer to resubscribe to the old expired/cancelled subscription
     * @return void
     */
    public function delete_resubscribe_meta($resubscribe_order)
    {
    }
    /**
     * Process a pre-order payment when the pre-order is released.
     *
     * @param WC_Order $order
     * @return WP_Error|null
     */
    public function process_pre_order_release_payment($order)
    {
    }
    /**
     * Return handler for Hosted Payments.
     */
    public function return_handler()
    {
    }
}