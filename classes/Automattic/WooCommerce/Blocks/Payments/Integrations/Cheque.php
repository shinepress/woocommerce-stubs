<?php

namespace Automattic\WooCommerce\Blocks\Payments\Integrations;

/**
 * Cheque payment method integration
 *
 * @since 2.6.0
 */
final class Cheque extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Payment method name defined by payment methods extending this class.
     *
     * @var string
     */
    protected $name = \WC_Gateway_Cheque::ID;
    /**
     * An instance of the Asset Api
     *
     * @var Api
     */
    private $asset_api;
    /**
     * Constructor
     *
     * @param Api $asset_api An instance of Api.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api)
    {
    }
    /**
     * Initializes the payment method type.
     */
    public function initialize()
    {
    }
    /**
     * Returns if this payment method should be active. If false, the scripts will not be enqueued.
     *
     * @return boolean
     */
    public function is_active()
    {
    }
    /**
     * Returns an array of scripts/handles to be registered for this payment method.
     *
     * @return array
     */
    public function get_payment_method_script_handles()
    {
    }
    /**
     * Returns an array of key=>value pairs of data made available to the payment methods script.
     *
     * @return array
     */
    public function get_payment_method_data()
    {
    }
}