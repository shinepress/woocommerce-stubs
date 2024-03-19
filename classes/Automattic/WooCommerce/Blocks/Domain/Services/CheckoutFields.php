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
     * Initialize hooks.
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
     * Add session meta keys.
     *
     * This is an allow-list of meta data keys which we want to store in session.
     *
     * @param array $keys Session meta keys.
     * @return array
     */
    public function add_session_meta_keys($keys)
    {
    }
    /**
     * If a field does not declare a sanitization callback, this is the default sanitization callback.
     *
     * @param mixed $value Value to sanitize.
     * @param array $field Field data.
     * @return mixed
     */
    public function default_sanitize_callback($value, $field)
    {
    }
    /**
     * If a field does not declare a validation callback, this is the default validation callback.
     *
     * @param mixed $value Value to sanitize.
     * @param array $field Field data.
     * @return WP_Error|void If there is a validation error, return an WP_Error object.
     */
    public function default_validate_callback($value, $field)
    {
    }
    /**
     * Registers an additional field for Checkout.
     *
     * @param array $options The field options.
     *
     * @return WP_Error|void True if the field was registered, a WP_Error otherwise.
     */
    public function register_checkout_field($options)
    {
    }
    /**
     * Validates the "base" options (id, label, location) and shows warnings if they're not supplied.
     *
     * @param array $options The options supplied during field registration.
     * @return bool false if an error was encountered, true otherwise.
     */
    private function validate_options($options)
    {
    }
    /**
     * Processes the options for a select field and returns the new field_options array.
     *
     * @param array $field_data  The field data array to be updated.
     * @param array $options     The options supplied during field registration.
     *
     * @return array|false The updated $field_data array or false if an error was encountered.
     */
    private function process_select_field($field_data, $options)
    {
    }
    /**
     * Processes the options for a checkbox field and returns the new field_options array.
     *
     * @param array $field_data  The field data array to be updated.
     * @param array $options     The options supplied during field registration.
     *
     * @return array|false The updated $field_data array or false if an error was encountered.
     */
    private function process_checkbox_field($field_data, $options)
    {
    }
    /**
     * Processes the attributes supplied during field registration.
     *
     * @param array $id         The field ID.
     * @param array $attributes The attributes supplied during field registration.
     *
     * @return array The processed attributes.
     */
    private function register_field_attributes($id, $attributes)
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
     * Gets the location of a field.
     *
     * @param string $field_key The key of the field to get the location for.
     * @return string The location of the field.
     */
    public function get_field_location($field_key)
    {
    }
    /**
     * Sanitize an additional field against any custom sanitization rules.
     *
     * @since 8.7.0
     * @param string $field_key   The key of the field.
     * @param mixed  $field_value The value of the field.
     * @return mixed
     */
    public function sanitize_field($field_key, $field_value)
    {
    }
    /**
     * Validate an additional field against any custom validation rules.
     *
     * @since 8.6.0
     *
     * @param string $field_key    The key of the field.
     * @param mixed  $field_value  The value of the field.
     * @return WP_Error
     */
    public function validate_field($field_key, $field_value)
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
     * @return array An array of fields definitions.
     */
    public function get_fields_for_location($location)
    {
    }
    /**
     * Validates a set of fields for a given location against custom validation rules.
     *
     * @param array  $fields Array of key value pairs of field values to validate.
     * @param string $location The location being validated (address|contact|additional).
     * @param string $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     * @return WP_Error
     */
    public function validate_fields_for_location($fields, $location, $group = '')
    {
    }
    /**
     * Validates a field to check it belongs to the given location and is valid according to its registration.
     *
     * This does not apply any custom validation rules on the value.
     *
     * @param string $key The field key.
     * @param mixed  $value The field value.
     * @param string $location The location to validate the field for (address|contact|additional).
     *
     * @return true|WP_Error True if the field is valid, a WP_Error otherwise.
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
     * Persists a field value for a given order. This would also optionally set the field value on the customer object if the order is linked to a registered customer.
     *
     * @param string   $key The field key.
     * @param mixed    $value The field value.
     * @param WC_Order $order The order to persist the field for.
     * @param bool     $set_customer Whether to set the field value on the customer or not.
     *
     * @return void
     */
    public function persist_field_for_order($key, $value, $order, $set_customer = true)
    {
    }
    /**
     * Persists a field value for a given customer.
     *
     * @param string      $key The field key.
     * @param mixed       $value The field value.
     * @param WC_Customer $customer The customer to persist the field for.
     *
     * @return void
     */
    public function persist_field_for_customer($key, $value, $customer)
    {
    }
    /**
     * Sets a field value in an array meta, supporting routing things to billing, shipping, or additional fields, based on a prefix for the key.
     *
     * @param string               $key The field key.
     * @param mixed                $value The field value.
     * @param WC_Customer|WC_Order $object The object to set the field value for.
     *
     * @return void
     */
    private function set_array_meta($key, $value, $object)
    {
    }
    /**
     * Returns a field value for a given object.
     *
     * @param string      $key The field key.
     * @param WC_Customer $customer The customer to get the field value for.
     * @param string      $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     *
     * @return mixed The field value.
     */
    public function get_field_from_customer($key, $customer, $group = '')
    {
    }
    /**
     * Returns a field value for a given order.
     *
     * @param string   $field The field key.
     * @param WC_Order $order The order to get the field value for.
     * @param string   $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     *
     * @return mixed The field value.
     */
    public function get_field_from_order($field, $order, $group = '')
    {
    }
    /**
     * Returns a field value for a given object.
     *
     * @param string               $key The field key.
     * @param WC_Customer|WC_Order $object The customer to get the field value for.
     * @param string               $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     *
     * @return mixed The field value.
     */
    private function get_field_from_object($key, $object, $group = '')
    {
    }
    /**
     * Returns an array of all fields values for a given customer.
     *
     * @param WC_Customer $customer The customer to get the fields for.
     * @param bool        $all Whether to return all fields or only the ones that are still registered. Default false.
     *
     * @return array An array of fields.
     */
    public function get_all_fields_from_customer($customer, $all = false)
    {
    }
    /**
     * Returns an array of all fields values for a given order.
     *
     * @param WC_Order $order The order to get the fields for.
     * @param bool     $all Whether to return all fields or only the ones that are still registered. Default false.
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
     * @return array The filtered fields.
     */
    public function filter_fields_for_customer($fields)
    {
    }
    /**
     * From a set of fields, returns only the ones for a given location.
     *
     * @param array  $fields The fields to filter.
     * @param string $location The location to validate the field for (address|contact|additional).
     * @return array The filtered fields.
     */
    public function filter_fields_for_location($fields, $location)
    {
    }
    /**
     * Filter fields for order confirmation.
     *
     * @param array $fields The fields to filter.
     * @return array The filtered fields.
     */
    public function filter_fields_for_order_confirmation($fields)
    {
    }
    /**
     * Get additional fields for an order.
     *
     * @param WC_Order $order Order object.
     * @param string   $location The location to get fields for (address|contact|additional).
     * @param string   $group The group to get the field value for (shipping|billing|'') in which '' refers to the additional group.
     * @param string   $context The context to get the field value for (edit|view).
     * @return array An array of fields definitions as well as their values formatted for display.
     */
    public function get_order_additional_fields_with_values($order, $location, $group = '', $context = 'edit')
    {
    }
    /**
     * Formats a raw field value for display based on its type definition.
     *
     * @param string $value Value to format.
     * @param array  $field Additional field definition.
     * @return string
     */
    public function format_additional_field_value($value, $field)
    {
    }
}