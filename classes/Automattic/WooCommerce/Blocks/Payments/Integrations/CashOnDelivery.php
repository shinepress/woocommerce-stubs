<?php

namespace Automattic\WooCommerce\Blocks\Payments\Integrations;

/**
 * Cash on Delivery (COD) payment method integration
 *
 * @since 3.0.0
 */
final class CashOnDelivery extends \Automattic\WooCommerce\Blocks\Payments\Integrations\AbstractPaymentMethodType
{
    /**
     * Payment method name/id/slug (matches id in WC_Gateway_COD in core).
     *
     * @var string
     */
    protected $name = 'cod';
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
     * Return enable_for_virtual option.
     *
     * @return boolean True if store allows COD payment for orders containing only virtual products.
     */
    private function get_enable_for_virtual()
    {
    }
    /**
     * Return enable_for_methods option.
     *
     * @return array Array of shipping methods (string ids) that allow COD. (If empty, all support COD.)
     */
    private function get_enable_for_methods()
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