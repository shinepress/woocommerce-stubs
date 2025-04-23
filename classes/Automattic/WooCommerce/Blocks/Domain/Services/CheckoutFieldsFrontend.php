<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class managing checkout fields and its related extensibility points on the frontend.
 */
class CheckoutFieldsFrontend
{
    /**
     * Checkout field controller.
     *
     * @var CheckoutFields
     */
    private $checkout_fields_controller;
    /**
     * Sets up core fields.
     *
     * @param CheckoutFields $checkout_fields_controller Instance of the checkout field controller.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Services\CheckoutFields $checkout_fields_controller)
    {
    }
    /**
     * Initialize hooks. This is not run Store API requests.
     */
    public function init()
    {
    }
    /**
     * Render custom fields.
     *
     * @param array $fields List of additional fields with values.
     * @return string
     */
    protected function render_additional_fields($fields)
    {
    }
    /**
     * Render custom field.
     *
     * @param array $field An additional field and value.
     * @return string
     */
    protected function render_additional_field($field)
    {
    }
    /**
     * Renders address fields on the order details page.
     *
     * @param string   $address_type Type of address (billing or shipping).
     * @param WC_Order $order Order object.
     */
    public function render_order_address_fields($address_type, $order)
    {
    }
    /**
     * Renders additional fields on the order details page.
     *
     * @param WC_Order $order Order object.
     */
    public function render_order_other_fields($order)
    {
    }
    /**
     * Renders address fields on the account page.
     *
     * @param string $address_type Type of address (billing or shipping).
     */
    public function render_address_fields($address_type)
    {
    }
    /**
     * Adds additional contact fields to the My Account edit account form.
     */
    public function edit_account_form_fields()
    {
    }
    /**
     * Adds additional address fields to the My Account edit address form.
     *
     * @param array  $address Address fields.
     * @param string $address_type Type of address (billing or shipping).
     * @return array Updated address fields.
     */
    public function edit_address_fields($address, $address_type)
    {
    }
    /**
     * Validates and saves additional address fields to the customer object on the My Account page.
     *
     * Customer is not provided by this hook so we handle save here.
     *
     * @param integer $user_id User ID.
     */
    public function save_account_form_fields($user_id)
    {
    }
    /**
     * For the My Account page, save address fields. This uses the Store API endpoint for saving addresses so
     * extensibility hooks are consistent across the codebase.
     *
     * The caller saves the customer object if there are no errors. Nonces are checked before this method executes.
     *
     * @param integer     $user_id User ID.
     * @param string      $address_type Type of address (billing or shipping).
     * @param array       $address Address fields.
     * @param WC_Customer $customer Customer object.
     */
    public function save_address_fields($user_id, $address_type, $address = [], $customer = null)
    {
    }
    /**
     * Get posted additional field values.
     *
     * @param string  $location The location to get fields for.
     * @param string  $group The group to get fields for.
     * @param boolean $sanitize Whether to sanitize the field values.
     * @return array The posted field values and sanitized field values.
     */
    protected function get_posted_additional_field_values($location, $group, $sanitize = true)
    {
    }
    /**
     * Validate and save additional fields for a given customer.
     *
     * @param WC_Customer $customer Customer object.
     * @param string      $location Location to save fields for.
     * @param string      $group Group to save fields for.
     * @return true|\WP_Error True if successful, \WP_Error if there are errors.
     */
    protected function update_additional_fields_for_customer($customer, $location, $group)
    {
    }
}