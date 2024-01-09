<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class managing checkout fields and its related extensibility points.
 */
class CheckoutFields
{
    /**
     * Core checkout fields.
     *
     * @var array
     */
    private $core_fields;
    /**
     * Additional checkout fields.
     *
     * @var array
     */
    private $additional_fields = array();
    /**
     * Fields locations.
     *
     * @var array
     */
    private $fields_locations;
    /**
     * Supported field types
     *
     * @var array
     */
    private $supported_field_types = ['text', 'select', 'checkbox'];
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    private $asset_data_registry;
    /**
     * Billing fields meta key.
     *
     * @var string
     */
    const BILLING_FIELDS_KEY = '_additional_billing_fields';
    /**
     * Shipping fields meta key.
     *
     * @var string
     */
    const SHIPPING_FIELDS_KEY = '_additional_shipping_fields';
    /**
     * Additional fields meta key.
     *
     * @var string
     */
    const ADDITIONAL_FIELDS_KEY = '_additional_fields';
    /**
     * Sets up core fields.
     *
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
    {
    }
    /**
     * Initialize hooks. This is not run Store API requests.
     */
    public function init()
    {
    }
    /**
     * Add fields data to the asset data registry.
     */
    public function add_fields_data()
    {
    }
    /**
     * Registers an additional field for Checkout.
     *
     * @param array $options The field options.
     *
     * @return \WP_Error|void True if the field was registered, a WP_Error otherwise.
     */
    public function register_checkout_field($options)
    {
    }
    /**
     * Returns an array of all core fields.
     *
     * @return array An array of fields.
     */
    public function get_core_fields()
    {
    }
    /**
     * Returns an array of all additional fields.
     *
     * @return array An array of fields.
     */
    public function get_additional_fields()
    {
    }
    /**
     * Update the default locale with additional fields without country limitations.
     *
     * @param array $locale The locale to update.
     * @return mixed
     */
    public function update_default_locale_with_fields($locale)
    {
    }
    /**
     * Returns an array of fields keys for the address group.
     *
     * @return array An array of fields keys.
     */
    public function get_address_fields_keys()
    {
    }
    /**
     * Returns an array of fields keys for the contact group.
     *
     * @return array An array of fields keys.
     */
    public function get_contact_fields_keys()
    {
    }
    /**
     * Returns an array of fields keys for the additional area group.
     *
     * @return array An array of fields keys.
     */
    public function get_additional_fields_keys()
    {
    }
    /**
     * Returns an array of fields for a given group.
     *
     * @param string $location The location to get fields for (address|contact|additional).
     *
     * @return array An array of fields.
     */
    public function get_fields_for_location($location)
    {
    }
    /**
     * Validates a field value for a given group.
     *
     * @param string $key The field key.
     * @param mixed  $value The field value.
     * @param string $location The gslocation to validate the field for (address|contact|additional).
     *
     * @return true|\WP_Error True if the field is valid, a WP_Error otherwise.
     */
    public function validate_field_for_location($key, $value, $location)
    {
    }
    /**
     * Returns true if the given key is a valid field.
     *
     * @param string $key The field key.
     *
     * @return bool True if the field is valid, false otherwise.
     */
    public function is_field($key)
    {
    }
    /**
     * Persists a field value for a given order. This would also optionally set the field value on the customer.
     *
     * @param string    $key The field key.
     * @param mixed     $value The field value.
     * @param \WC_Order $order The order to persist the field for.
     * @param bool      $set_customer Whether to set the field value on the customer or not.
     *
     * @return void
     */
    public function persist_field_for_order($key, $value, $order, $set_customer = true)
    {
    }
    /**
     * Persists a field value for a given customer.
     *
     * @param string       $key The field key.
     * @param mixed        $value The field value.
     * @param \WC_Customer $customer The customer to persist the field for.
     *
     * @return void
     */
    public function persist_field_for_customer($key, $value, $customer)
    {
    }
    /**
     * Sets a field value in an array meta, supporting routing things to billing, shipping, or additional fields, based on a prefix for the key.
     *
     * @param string                 $key The field key.
     * @param mixed                  $value The field value.
     * @param \WC_Customer|\WC_Order $object The object to set the field value for.
     *
     * @return void
     */
    private function set_array_meta($key, $value, $object)
    {
    }
    /**
     * Returns a field value for a given object.
     *
     * @param string       $key The field key.
     * @param \WC_Customer $customer The customer to get the field value for.
     * @param string       $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     *
     * @return mixed The field value.
     */
    public function get_field_from_customer($key, $customer, $group = '')
    {
    }
    /**
     * Returns a field value for a given order.
     *
     * @param string    $field The field key.
     * @param \WC_Order $order The order to get the field value for.
     * @param string    $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     *
     * @return mixed The field value.
     */
    public function get_field_from_order($field, $order, $group = '')
    {
    }
    /**
     * Returns a field value for a given object.
     *
     * @param string                 $key The field key.
     * @param \WC_Customer|\WC_Order $object The customer to get the field value for.
     * @param string                 $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     *
     * @return mixed The field value.
     */
    private function get_field_from_object($key, $object, $group = '')
    {
    }
    /**
     * Returns an array of all fields values for a given customer.
     *
     * @param \WC_Customer $customer The customer to get the fields for.
     * @param bool         $all Whether to return all fields or only the ones that are still registered. Default false.
     *
     * @return array An array of fields.
     */
    public function get_all_fields_from_customer($customer, $all = false)
    {
    }
    /**
     * Returns an array of all fields values for a given order.
     *
     * @param \WC_Order $order The order to get the fields for.
     * @param bool      $all Whether to return all fields or only the ones that are still registered. Default false.
     *
     * @return array An array of fields.
     */
    public function get_all_fields_from_order($order, $all = false)
    {
    }
    /**
     * Returns an array of all fields values for a given meta object. It would add the billing or shipping prefix to the keys.
     *
     * @param array $meta The meta data to format.
     * @param bool  $all Whether to return all fields or only the ones that are still registered. Default false.
     *
     * @return array An array of fields.
     */
    private function format_meta_data($meta, $all = false)
    {
    }
    /**
     * From a set of fields, returns only the ones that should be saved to the customer.
     * For now, this only supports fields in address location.
     *
     * @param array $fields The fields to filter.
     *
     * @return array The filtered fields.
     */
    public function filter_fields_for_customer($fields)
    {
    }
}