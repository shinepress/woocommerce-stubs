<?php


/**
 * WooCommerce Payment Gateway class.
 *
 * Extended by individual payment gateways to handle payments.
 *
 * @class       WC_Payment_Gateway
 * @extends     WC_Settings_API
 * @version     2.1.0
 * @package     WooCommerce/Abstracts
 */
abstract class WC_Payment_Gateway extends \WC_Settings_API
{
    /**
     * Set if the place order button should be renamed on selection.
     *
     * @var string
     */
    public $order_button_text;
    /**
     * Yes or no based on whether the method is enabled.
     *
     * @var string
     */
    public $enabled = 'yes';
    /**
     * Payment method title for the frontend.
     *
     * @var string
     */
    public $title;
    /**
     * Payment method description for the frontend.
     *
     * @var string
     */
    public $description;
    /**
     * Chosen payment method id.
     *
     * @var bool
     */
    public $chosen;
    /**
     * Gateway title.
     *
     * @var string
     */
    public $method_title = '';
    /**
     * Gateway description.
     *
     * @var string
     */
    public $method_description = '';
    /**
     * True if the gateway shows fields on the checkout.
     *
     * @var bool
     */
    public $has_fields;
    /**
     * Countries this gateway is allowed for.
     *
     * @var array
     */
    public $countries;
    /**
     * Available for all counties or specific.
     *
     * @var string
     */
    public $availability;
    /**
     * Icon for the gateway.
     *
     * @var string
     */
    public $icon;
    /**
     * Supported features such as 'default_credit_card_form', 'refunds'.
     *
     * @var array
     */
    public $supports = array('products');
    /**
     * Maximum transaction amount, zero does not define a maximum.
     *
     * @var int
     */
    public $max_amount = 0;
    /**
     * Optional URL to view a transaction.
     *
     * @var string
     */
    public $view_transaction_url = '';
    /**
     * Optional label to show for "new payment method" in the payment
     * method/token selection radio selection.
     *
     * @var string
     */
    public $new_method_label = '';
    /**
     * Pay button ID if supported.
     *
     * @var string
     */
    public $pay_button_id = '';
    /**
     * Contains a users saved tokens for this gateway.
     *
     * @var array
     */
    protected $tokens = array();
    /**
     * Returns a users saved tokens for this gateway.
     *
     * @since 2.6.0
     * @return array
     */
    public function get_tokens()
    {
    }
    /**
     * Return the title for admin screens.
     *
     * @return string
     */
    public function get_method_title()
    {
    }
    /**
     * Return the description for admin screens.
     *
     * @return string
     */
    public function get_method_description()
    {
    }
    /**
     * Output the gateway settings screen.
     */
    public function admin_options()
    {
    }
    /**
     * Init settings for gateways.
     */
    public function init_settings()
    {
    }
    /**
     * Return whether or not this gateway still requires setup to function.
     *
     * When this gateway is toggled on via AJAX, if this returns true a
     * redirect will occur to the settings page instead.
     *
     * @since 3.4.0
     * @return bool
     */
    public function needs_setup()
    {
    }
    /**
     * Get the return url (thank you page).
     *
     * @param WC_Order $order Order object.
     * @return string
     */
    public function get_return_url($order = \null)
    {
    }
    /**
     * Get a link to the transaction on the 3rd party gateway site (if applicable).
     *
     * @param  WC_Order $order the order object.
     * @return string transaction URL, or empty string.
     */
    public function get_transaction_url($order)
    {
    }
    /**
     * Get the order total in checkout and pay_for_order.
     *
     * @return float
     */
    protected function get_order_total()
    {
    }
    /**
     * Check if the gateway is available for use.
     *
     * @return bool
     */
    public function is_available()
    {
    }
    /**
     * Check if the gateway has fields on the checkout.
     *
     * @return bool
     */
    public function has_fields()
    {
    }
    /**
     * Return the gateway's title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Return the gateway's description.
     *
     * @return string
     */
    public function get_description()
    {
    }
    /**
     * Return the gateway's icon.
     *
     * @return string
     */
    public function get_icon()
    {
    }
    /**
     * Return the gateway's pay button ID.
     *
     * @since 3.9.0
     * @return string
     */
    public function get_pay_button_id()
    {
    }
    /**
     * Set as current gateway.
     *
     * Set this as the current gateway.
     */
    public function set_current()
    {
    }
    /**
     * Process Payment.
     *
     * Process the payment. Override this in your gateway. When implemented, this should.
     * return the success and redirect in an array. e.g:
     *
     *        return array(
     *            'result'   => 'success',
     *            'redirect' => $this->get_return_url( $order )
     *        );
     *
     * @param int $order_id Order ID.
     * @return array
     */
    public function process_payment($order_id)
    {
    }
    /**
     * Process refund.
     *
     * If the gateway declares 'refunds' support, this will allow it to refund.
     * a passed in amount.
     *
     * @param  int    $order_id Order ID.
     * @param  float  $amount Refund amount.
     * @param  string $reason Refund reason.
     * @return boolean True or false based on success, or a WP_Error object.
     */
    public function process_refund($order_id, $amount = \null, $reason = '')
    {
    }
    /**
     * Validate frontend fields.
     *
     * Validate payment fields on the frontend.
     *
     * @return bool
     */
    public function validate_fields()
    {
    }
    /**
     * If There are no payment fields show the description if set.
     * Override this in your gateway if you have some.
     */
    public function payment_fields()
    {
    }
    /**
     * Check if a gateway supports a given feature.
     *
     * Gateways should override this to declare support (or lack of support) for a feature.
     * For backward compatibility, gateways support 'products' by default, but nothing else.
     *
     * @param string $feature string The name of a feature to test support for.
     * @return bool True if the gateway supports the feature, false otherwise.
     * @since 1.5.7
     */
    public function supports($feature)
    {
    }
    /**
     * Can the order be refunded via this gateway?
     *
     * Should be extended by gateways to do their own checks.
     *
     * @param  WC_Order $order Order object.
     * @return bool If false, the automatic refund button is hidden in the UI.
     */
    public function can_refund_order($order)
    {
    }
    /**
     * Core credit card form which gateways can used if needed. Deprecated - inherit WC_Payment_Gateway_CC instead.
     *
     * @param  array $args Arguments.
     * @param  array $fields Fields.
     */
    public function credit_card_form($args = array(), $fields = array())
    {
    }
    /**
     * Enqueues our tokenization script to handle some of the new form options.
     *
     * @since 2.6.0
     */
    public function tokenization_script()
    {
    }
    /**
     * Grab and display our saved payment methods.
     *
     * @since 2.6.0
     */
    public function saved_payment_methods()
    {
    }
    /**
     * Gets saved payment method HTML from a token.
     *
     * @since 2.6.0
     * @param  WC_Payment_Token $token Payment Token.
     * @return string Generated payment method HTML
     */
    public function get_saved_payment_method_option_html($token)
    {
    }
    /**
     * Displays a radio button for entering a new payment method (new CC details) instead of using a saved method.
     * Only displayed when a gateway supports tokenization.
     *
     * @since 2.6.0
     */
    public function get_new_payment_method_option_html()
    {
    }
    /**
     * Outputs a checkbox for saving a new payment method to the database.
     *
     * @since 2.6.0
     */
    public function save_payment_method_checkbox()
    {
    }
    /**
     * Add payment method via account screen. This should be extended by gateway plugins.
     *
     * @since 3.2.0 Included here from 3.2.0, but supported from 3.0.0.
     * @return array
     */
    public function add_payment_method()
    {
    }
}