<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services\CheckoutFieldsSchema;

/**
 * DocumentObject class.
 *
 * This will combine and format given cart/customer/checkout data into a standard object format that can be queried through
 * JSON. This is used for conditional fields and validation during checkout.
 */
class DocumentObject
{
    /**
     * Docuemnt object context which may adjust the schema response.
     *
     * @var null|string
     */
    protected $context = null;
    /**
     * Valid contexts.
     *
     * @var array
     */
    protected $valid_contexts = ['shipping_address', 'billing_address', 'contact', 'order'];
    /**
     * The cart object.
     *
     * @var WC_Cart|null
     */
    protected $cart = null;
    /**
     * The customer object.
     *
     * @var WC_Customer|null
     */
    protected $customer = null;
    /**
     * Cart controller class instance.
     *
     * @var CartController
     */
    protected $cart_controller;
    /**
     * Schema controller class instance.
     *
     * @var SchemaController
     */
    protected $schema_controller;
    /**
     * The request data.
     *
     * @var array
     */
    protected $request_data = [];
    /**
     * The constructor.
     *
     * @param array $request_data Data that overrides the default values.
     */
    public function __construct(array $request_data = [])
    {
    }
    /**
     * Set document object context.
     *
     * @param null|string $context Context to set.
     */
    public function set_context($context = null)
    {
    }
    /**
     * Set the customer object.
     *
     * @param WC_Customer $customer The customer object.
     */
    public function set_customer(\WC_Customer $customer)
    {
    }
    /**
     * Set the cart object.
     *
     * @param WC_Cart $cart The cart object.
     */
    public function set_cart(\WC_Cart $cart)
    {
    }
    /**
     * Gets a subset of cart data.
     *
     * @return array The cart data.
     */
    protected function get_cart_data()
    {
    }
    /**
     * Get checkout data.
     *
     * @return array Checkout data context.
     */
    protected function get_checkout_data()
    {
    }
    /**
     * Get the customer data.
     *
     * @return array The customer data.
     */
    protected function get_customer_data()
    {
    }
    /**
     * Get the data for the document object.
     *
     * This isn't a 1:1 match with Store API because some data is simplified to make it easier to parse as JSON.
     *
     * @return array The data for the document object.
     */
    public function get_data()
    {
    }
    /**
     * Get the current context.
     *
     * @return null|string The context.
     */
    public function get_context()
    {
    }
}