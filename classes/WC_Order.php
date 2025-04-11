<?php


/**
 * Order Class.
 *
 * These are regular WooCommerce orders, which extend the abstract order class.
 */
class WC_Order extends \WC_Abstract_Order
{
    /**
     * Stores data about status changes so relevant hooks can be fired.
     *
     * @var bool|array
     */
    protected $status_transition = \false;
    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array(
        // Abstract order props.
        'parent_id' => 0,
        'status' => '',
        'currency' => '',
        'version' => '',
        'prices_include_tax' => \false,
        'date_created' => \null,
        'date_modified' => \null,
        'discount_total' => 0,
        'discount_tax' => 0,
        'shipping_total' => 0,
        'shipping_tax' => 0,
        'cart_tax' => 0,
        'total' => 0,
        'total_tax' => 0,
        // Order props.
        'customer_id' => 0,
        'order_key' => '',
        'billing' => array('first_name' => '', 'last_name' => '', 'company' => '', 'address_1' => '', 'address_2' => '', 'city' => '', 'state' => '', 'postcode' => '', 'country' => '', 'email' => '', 'phone' => ''),
        'shipping' => array('first_name' => '', 'last_name' => '', 'company' => '', 'address_1' => '', 'address_2' => '', 'city' => '', 'state' => '', 'postcode' => '', 'country' => '', 'phone' => ''),
        'payment_method' => '',
        'payment_method_title' => '',
        'transaction_id' => '',
        'customer_ip_address' => '',
        'customer_user_agent' => '',
        'created_via' => '',
        'customer_note' => '',
        'date_completed' => \null,
        'date_paid' => \null,
        'cart_hash' => '',
        // Operational data.
        'order_stock_reduced' => \false,
        'download_permissions_granted' => \false,
        'new_order_email_sent' => \false,
        'recorded_sales' => \false,
        'recorded_coupon_usage_counts' => \false,
    );
    /**
     * List of properties that were earlier managed by data store. However, since DataStore is a not a stored entity in itself, they used to store data in metadata of the data object.
     * With custom tables, some of these are moved from metadata to their own columns, but existing code will still try to add them to metadata. This array is used to keep track of such properties.
     *
     * Only reason to add a property here is that you are moving properties from DataStore instance to data object. Otherwise, if you are adding a new property, consider adding it to $data array instead.
     *
     * @var array
     */
    protected $legacy_datastore_props = array('_recorded_sales', '_recorded_coupon_usage_counts', '_download_permissions_granted', '_order_stock_reduced', '_new_order_email_sent');
    /**
     * Refunds for an order. Use {@see get_refunds()} instead.
     *
     * @deprecated 2.2.0
     * @var stdClass|WC_Order[]
     */
    public $refunds;
    /**
     * When a payment is complete this function is called.
     *
     * Most of the time this should mark an order as 'processing' so that admin can process/post the items.
     * If the cart contains only downloadable items then the order is 'completed' since the admin needs to take no action.
     * Stock levels are reduced at this point.
     * Sales are also recorded for products.
     * Finally, record the date of payment.
     *
     * @param string $transaction_id Optional transaction id to store in post meta.
     * @return bool success
     */
    public function payment_complete($transaction_id = '')
    {
    }
    /**
     * Gets order total - formatted for display.
     *
     * @param string $tax_display      Type of tax display.
     * @param bool   $display_refunded If should include refunded value.
     *
     * @return string
     */
    public function get_formatted_order_total($tax_display = '', $display_refunded = \true)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | CRUD methods
    |--------------------------------------------------------------------------
    |
    | Methods which create, read, update and delete orders from the database.
    | Written in abstract fashion so that the way orders are stored can be
    | changed more easily in the future.
    |
    | A save method is included for convenience (chooses update or create based
    | on if the order exists yet).
    |
    */
    /**
     * Save data to the database.
     *
     * @since 3.0.0
     * @return int order ID
     */
    public function save()
    {
    }
    /**
     * Log an error about this order is exception is encountered.
     *
     * @param Exception $e Exception object.
     * @param string    $message Message regarding exception thrown.
     * @since 3.7.0
     */
    protected function handle_exception($e, $message = 'Error')
    {
    }
    /**
     * Set order status.
     *
     * @since 3.0.0
     * @param string $new_status    Status to change the order to. No internal wc- prefix is required.
     * @param string $note          Optional note to add.
     * @param bool   $manual_update Is this a manual order status change?.
     * @return array
     */
    public function set_status($new_status, $note = '', $manual_update = \false)
    {
    }
    /**
     * Maybe set date paid.
     *
     * Sets the date paid variable when transitioning to the payment complete
     * order status. This is either processing or completed. This is not filtered
     * to avoid infinite loops e.g. if loading an order via the filter.
     *
     * Date paid is set once in this manner - only when it is not already set.
     * This ensures the data exists even if a gateway does not use the
     * `payment_complete` method.
     *
     * @since 3.0.0
     */
    public function maybe_set_date_paid()
    {
    }
    /**
     * Maybe set date completed.
     *
     * Sets the date completed variable when transitioning to completed status.
     *
     * @since 3.0.0
     */
    protected function maybe_set_date_completed()
    {
    }
    /**
     * Updates status of order immediately.
     *
     * @uses self::set_status()
     * @param string $new_status    Status to change the order to. No internal wc- prefix is required.
     * @param string $note          Optional note to add.
     * @param bool   $manual        Is this a manual order status change?.
     * @return bool
     */
    public function update_status($new_status, $note = '', $manual = \false)
    {
    }
    /**
     * Handle the status transition.
     */
    protected function status_transition()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    |
    | Methods for getting data from the order object.
    |
    */
    /**
     * Get basic order data in array format.
     *
     * @return array
     */
    public function get_base_data()
    {
    }
    /**
     * Get all class data in array format.
     *
     * @since 3.0.0
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Expands the shipping and billing information in the changes array.
     */
    public function get_changes()
    {
    }
    /**
     * Gets the order number for display (by default, order ID).
     *
     * @return string
     */
    public function get_order_number()
    {
    }
    /**
     * Get order key.
     *
     * @since  3.0.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_order_key($context = 'view')
    {
    }
    /**
     * Get customer_id.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_customer_id($context = 'view')
    {
    }
    /**
     * Alias for get_customer_id().
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return int
     */
    public function get_user_id($context = 'view')
    {
    }
    /**
     * Get the user associated with the order. False for guests.
     *
     * @return WP_User|false
     */
    public function get_user()
    {
    }
    /**
     * Gets a prop for a getter method.
     *
     * @since  3.0.0
     * @param  string $prop Name of prop to get.
     * @param  string $address_type Type of address; 'billing' or 'shipping'.
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return mixed
     */
    protected function get_address_prop($prop, $address_type = 'billing', $context = 'view')
    {
    }
    /**
     * Get billing first name.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_first_name($context = 'view')
    {
    }
    /**
     * Get billing last name.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_last_name($context = 'view')
    {
    }
    /**
     * Get billing company.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_company($context = 'view')
    {
    }
    /**
     * Get billing address line 1.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_address_1($context = 'view')
    {
    }
    /**
     * Get billing address line 2.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_address_2($context = 'view')
    {
    }
    /**
     * Get billing city.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_city($context = 'view')
    {
    }
    /**
     * Get billing state.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_state($context = 'view')
    {
    }
    /**
     * Get billing postcode.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_postcode($context = 'view')
    {
    }
    /**
     * Get billing country.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_country($context = 'view')
    {
    }
    /**
     * Get billing email.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_email($context = 'view')
    {
    }
    /**
     * Get billing phone.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_billing_phone($context = 'view')
    {
    }
    /**
     * Get shipping first name.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_first_name($context = 'view')
    {
    }
    /**
     * Get shipping_last_name.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_last_name($context = 'view')
    {
    }
    /**
     * Get shipping company.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_company($context = 'view')
    {
    }
    /**
     * Get shipping address line 1.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_address_1($context = 'view')
    {
    }
    /**
     * Get shipping address line 2.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_address_2($context = 'view')
    {
    }
    /**
     * Get shipping city.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_city($context = 'view')
    {
    }
    /**
     * Get shipping state.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_state($context = 'view')
    {
    }
    /**
     * Get shipping postcode.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_postcode($context = 'view')
    {
    }
    /**
     * Get shipping country.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_country($context = 'view')
    {
    }
    /**
     * Get shipping phone.
     *
     * @since  5.6.0
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_shipping_phone($context = 'view')
    {
    }
    /**
     * Get the payment method.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_payment_method($context = 'view')
    {
    }
    /**
     * Get payment method title.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_payment_method_title($context = 'view')
    {
    }
    /**
     * Get transaction id.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_transaction_id($context = 'view')
    {
    }
    /**
     * Get customer ip address.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_customer_ip_address($context = 'view')
    {
    }
    /**
     * Get customer user agent.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_customer_user_agent($context = 'view')
    {
    }
    /**
     * Get created via.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_created_via($context = 'view')
    {
    }
    /**
     * Get customer note.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_customer_note($context = 'view')
    {
    }
    /**
     * Get date completed.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_completed($context = 'view')
    {
    }
    /**
     * Get date paid.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_paid($context = 'view')
    {
    }
    /**
     * Get cart hash.
     *
     * @param  string $context What the value is for. Valid values are view and edit.
     * @return string
     */
    public function get_cart_hash($context = 'view')
    {
    }
    /**
     * Returns the requested address in raw, non-formatted way.
     * Note: Merges raw data with get_prop data so changes are returned too.
     *
     * @since  2.4.0
     * @param  string $address_type Type of address; 'billing' or 'shipping'.
     * @return array The stored address after filter.
     */
    public function get_address($address_type = 'billing')
    {
    }
    /**
     * Get a formatted shipping address for the order.
     *
     * @return string
     */
    public function get_shipping_address_map_url()
    {
    }
    /**
     * Get a formatted billing full name.
     *
     * @return string
     */
    public function get_formatted_billing_full_name()
    {
    }
    /**
     * Get a formatted shipping full name.
     *
     * @return string
     */
    public function get_formatted_shipping_full_name()
    {
    }
    /**
     * Get a formatted billing address for the order.
     *
     * @param string $empty_content Content to show if no address is present. @since 3.3.0.
     * @return string
     */
    public function get_formatted_billing_address($empty_content = '')
    {
    }
    /**
     * Get a formatted shipping address for the order.
     *
     * @param string $empty_content Content to show if no address is present. @since 3.3.0.
     * @return string
     */
    public function get_formatted_shipping_address($empty_content = '')
    {
    }
    /**
     * Returns true if the order has a billing address.
     *
     * @since  3.0.4
     * @return boolean
     */
    public function has_billing_address()
    {
    }
    /**
     * Returns true if the order has a shipping address.
     *
     * @since  3.0.4
     * @return boolean
     */
    public function has_shipping_address()
    {
    }
    /**
     * Gets information about whether stock was reduced.
     *
     * @since 7.0.0
     * @param string $context What the value is for. Valid values are view and edit.
     * @return bool
     */
    public function get_order_stock_reduced(string $context = 'view')
    {
    }
    /**
     * Gets information about whether permissions were generated yet.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     *
     * @return bool True if permissions were generated, false otherwise.
     */
    public function get_download_permissions_granted(string $context = 'view')
    {
    }
    /**
     * Whether email have been sent for this order.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     *
     * @return bool
     */
    public function get_new_order_email_sent(string $context = 'view')
    {
    }
    /**
     * Gets information about whether sales were recorded.
     *
     * @param string $context What the value is for. Valid values are view and edit.
     *
     * @return bool True if sales were recorded, false otherwise.
     */
    public function get_recorded_sales(string $context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    |
    | Functions for setting order data. These should not update anything in the
    | database itself and should only change what is stored in the class
    | object. However, for backwards compatibility pre 3.0.0 some of these
    | setters may handle both.
    |
    */
    /**
     * Sets a prop for a setter method.
     *
     * @since 3.0.0
     * @param string $prop Name of prop to set.
     * @param string $address_type Type of address; 'billing' or 'shipping'.
     * @param mixed  $value Value of the prop.
     */
    protected function set_address_prop($prop, $address_type, $value)
    {
    }
    /**
     * Setter for billing address, expects the $address parameter to be key value pairs for individual address props.
     *
     * @param array $address Address to set.
     *
     * @return void
     */
    public function set_billing_address(array $address)
    {
    }
    /**
     * Shortcut for calling set_billing_address.
     *
     * This is useful in scenarios where set_$prop_name is invoked, and since we store the billing address as 'billing' prop in data, it can be called directly.
     *
     * @param array $address Address to set.
     *
     * @return void
     */
    public function set_billing(array $address)
    {
    }
    /**
     * Setter for shipping address, expects the $address parameter to be key value pairs for individual address props.
     *
     * @param array $address Address to set.
     *
     * @return void
     */
    public function set_shipping_address(array $address)
    {
    }
    /**
     * Shortcut for calling set_shipping_address. This is useful in scenarios where set_$prop_name is invoked, and since we store the shipping address as 'shipping' prop in data, it can be called directly.
     *
     * @param array $address Address to set.
     *
     * @return void
     */
    public function set_shipping(array $address)
    {
    }
    /**
     * Set order key.
     *
     * @param string $value Max length 22 chars.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_order_key($value)
    {
    }
    /**
     * Set customer id.
     *
     * @param int $value Customer ID.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_customer_id($value)
    {
    }
    /**
     * Set billing first name.
     *
     * @param string $value Billing first name.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_first_name($value)
    {
    }
    /**
     * Set billing last name.
     *
     * @param string $value Billing last name.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_last_name($value)
    {
    }
    /**
     * Set billing company.
     *
     * @param string $value Billing company.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_company($value)
    {
    }
    /**
     * Set billing address line 1.
     *
     * @param string $value Billing address line 1.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_address_1($value)
    {
    }
    /**
     * Set billing address line 2.
     *
     * @param string $value Billing address line 2.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_address_2($value)
    {
    }
    /**
     * Set billing city.
     *
     * @param string $value Billing city.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_city($value)
    {
    }
    /**
     * Set billing state.
     *
     * @param string $value Billing state.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_state($value)
    {
    }
    /**
     * Set billing postcode.
     *
     * @param string $value Billing postcode.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_postcode($value)
    {
    }
    /**
     * Set billing country.
     *
     * @param string $value Billing country.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_country($value)
    {
    }
    /**
     * Maybe set empty billing email to that of the user who owns the order.
     */
    protected function maybe_set_user_billing_email()
    {
    }
    /**
     * Set billing email.
     *
     * @param string $value Billing email.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_email($value)
    {
    }
    /**
     * Set billing phone.
     *
     * @param string $value Billing phone.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_billing_phone($value)
    {
    }
    /**
     * Set shipping first name.
     *
     * @param string $value Shipping first name.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_first_name($value)
    {
    }
    /**
     * Set shipping last name.
     *
     * @param string $value Shipping last name.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_last_name($value)
    {
    }
    /**
     * Set shipping company.
     *
     * @param string $value Shipping company.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_company($value)
    {
    }
    /**
     * Set shipping address line 1.
     *
     * @param string $value Shipping address line 1.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_address_1($value)
    {
    }
    /**
     * Set shipping address line 2.
     *
     * @param string $value Shipping address line 2.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_address_2($value)
    {
    }
    /**
     * Set shipping city.
     *
     * @param string $value Shipping city.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_city($value)
    {
    }
    /**
     * Set shipping state.
     *
     * @param string $value Shipping state.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_state($value)
    {
    }
    /**
     * Set shipping postcode.
     *
     * @param string $value Shipping postcode.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_postcode($value)
    {
    }
    /**
     * Set shipping country.
     *
     * @param string $value Shipping country.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_country($value)
    {
    }
    /**
     * Set shipping phone.
     *
     * @since 5.6.0
     * @param string $value Shipping phone.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_shipping_phone($value)
    {
    }
    /**
     * Set the payment method.
     *
     * @param string $payment_method Supports WC_Payment_Gateway for bw compatibility with < 3.0.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_payment_method($payment_method = '')
    {
    }
    /**
     * Set payment method title.
     *
     * @param string $value Payment method title.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_payment_method_title($value)
    {
    }
    /**
     * Set transaction id.
     *
     * @param string $value Transaction id.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_transaction_id($value)
    {
    }
    /**
     * Set customer ip address.
     *
     * @param string $value Customer ip address.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_customer_ip_address($value)
    {
    }
    /**
     * Set customer user agent.
     *
     * @param string $value Customer user agent.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_customer_user_agent($value)
    {
    }
    /**
     * Set created via.
     *
     * @param string $value Created via.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_created_via($value)
    {
    }
    /**
     * Set customer note.
     *
     * @param string $value Customer note.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_customer_note($value)
    {
    }
    /**
     * Set date completed.
     *
     * @param  string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_date_completed($date = \null)
    {
    }
    /**
     * Set date paid.
     *
     * @param  string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if their is no date.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_date_paid($date = \null)
    {
    }
    /**
     * Set cart hash.
     *
     * @param string $value Cart hash.
     * @throws WC_Data_Exception Throws exception when invalid data is found.
     */
    public function set_cart_hash($value)
    {
    }
    /**
     * Stores information about whether stock was reduced.
     *
     * @param bool|string $value True if stock was reduced, false if not.
     *
     * @return void
     */
    public function set_order_stock_reduced($value)
    {
    }
    /**
     * Stores information about whether permissions were generated yet.
     *
     * @param bool|string $value True if permissions were generated, false if not.
     *
     * @return void
     */
    public function set_download_permissions_granted($value)
    {
    }
    /**
     * Stores information about whether email was sent.
     *
     * @param bool|string $value True if email was sent, false if not.
     *
     * @return void
     */
    public function set_new_order_email_sent($value)
    {
    }
    /**
     * Stores information about whether sales were recorded.
     *
     * @param bool|string $value True if sales were recorded, false if not.
     *
     * @return void
     */
    public function set_recorded_sales($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Conditionals
    |--------------------------------------------------------------------------
    |
    | Checks if a condition is true or false.
    |
    */
    /**
     * Check if an order key is valid.
     *
     * @param string $key Order key.
     * @return bool
     */
    public function key_is_valid($key)
    {
    }
    /**
     * See if order matches cart_hash.
     *
     * @param string $cart_hash Cart hash.
     * @return bool
     */
    public function has_cart_hash($cart_hash = '')
    {
    }
    /**
     * Checks if an order can be edited, specifically for use on the Edit Order screen.
     *
     * @return bool
     */
    public function is_editable()
    {
    }
    /**
     * Returns if an order has been paid for based on the order status.
     *
     * @since 2.5.0
     * @return bool
     */
    public function is_paid()
    {
    }
    /**
     * Checks if product download is permitted.
     *
     * @return bool
     */
    public function is_download_permitted()
    {
    }
    /**
     * Checks if an order needs display the shipping address, based on shipping method.
     *
     * @return bool
     */
    public function needs_shipping_address()
    {
    }
    /**
     * Returns true if the order contains a downloadable product.
     *
     * @return bool
     */
    public function has_downloadable_item()
    {
    }
    /**
     * Get downloads from all line items for this order.
     *
     * @since  3.2.0
     * @return array
     */
    public function get_downloadable_items()
    {
    }
    /**
     * Checks if an order needs payment, based on status and order total.
     *
     * @return bool
     */
    public function needs_payment()
    {
    }
    /**
     * See if the order needs processing before it can be completed.
     *
     * Orders which only contain virtual, downloadable items do not need admin
     * intervention.
     *
     * Uses a transient so these calls are not repeated multiple times, and because
     * once the order is processed this code/transient does not need to persist.
     *
     * @since 3.0.0
     * @return bool
     */
    public function needs_processing()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | URLs and Endpoints
    |--------------------------------------------------------------------------
    */
    /**
     * Generates a URL so that a customer can pay for their (unpaid - pending) order. Pass 'true' for the checkout version which doesn't offer gateway choices.
     *
     * @param  bool $on_checkout If on checkout.
     * @return string
     */
    public function get_checkout_payment_url($on_checkout = \false)
    {
    }
    /**
     * Generates a URL for the thanks page (order received).
     *
     * @return string
     */
    public function get_checkout_order_received_url()
    {
    }
    /**
     * Generates a URL so that a customer can cancel their (unpaid - pending) order.
     *
     * @param string $redirect Redirect URL.
     * @return string
     */
    public function get_cancel_order_url($redirect = '')
    {
    }
    /**
     * Generates a raw (unescaped) cancel-order URL for use by payment gateways.
     *
     * @param string $redirect Redirect URL.
     * @return string The unescaped cancel-order URL.
     */
    public function get_cancel_order_url_raw($redirect = '')
    {
    }
    /**
     * Helper method to return the cancel endpoint.
     *
     * @return string the cancel endpoint; either the cart page or the home page.
     */
    public function get_cancel_endpoint()
    {
    }
    /**
     * Generates a URL to view an order from the my account page.
     *
     * @return string
     */
    public function get_view_order_url()
    {
    }
    /**
     * Get's the URL to edit the order in the backend.
     *
     * @since 3.3.0
     * @return string
     */
    public function get_edit_order_url()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Order notes.
    |--------------------------------------------------------------------------
    */
    /**
     * Adds a note (comment) to the order. Order must exist.
     *
     * @param  string $note              Note to add.
     * @param  int    $is_customer_note  Is this a note for the customer?.
     * @param  bool   $added_by_user     Was the note added by a user?.
     * @return int                       Comment ID.
     */
    public function add_order_note($note, $is_customer_note = 0, $added_by_user = \false)
    {
    }
    /**
     * Add an order note for status transition
     *
     * @since 3.9.0
     * @uses self::add_order_note()
     * @param string $note          Note to be added giving status transition from and to details.
     * @param bool   $transition    Details of the status transition.
     * @return int                  Comment ID.
     */
    private function add_status_transition_note($note, $transition)
    {
    }
    /**
     * List order notes (public) for the customer.
     *
     * @return array
     */
    public function get_customer_order_notes()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Refunds
    |--------------------------------------------------------------------------
    */
    /**
     * Get order refunds.
     *
     * @since 2.2
     * @return array of WC_Order_Refund objects
     */
    public function get_refunds()
    {
    }
    /**
     * Get amount already refunded.
     *
     * @since 2.2
     * @return string
     */
    public function get_total_refunded()
    {
    }
    /**
     * Get the total tax refunded.
     *
     * @since  2.3
     * @return float
     */
    public function get_total_tax_refunded()
    {
    }
    /**
     * Get the total shipping refunded.
     *
     * @since  2.4
     * @return float
     */
    public function get_total_shipping_refunded()
    {
    }
    /**
     * Gets the count of order items of a certain type that have been refunded.
     *
     * @since  2.4.0
     * @param string $item_type Item type.
     * @return string
     */
    public function get_item_count_refunded($item_type = '')
    {
    }
    /**
     * Get the total number of items refunded.
     *
     * @since  2.4.0
     *
     * @param  string $item_type Type of the item we're checking, if not a line_item.
     * @return int
     */
    public function get_total_qty_refunded($item_type = 'line_item')
    {
    }
    /**
     * Get the refunded amount for a line item.
     *
     * @param  int    $item_id   ID of the item we're checking.
     * @param  string $item_type Type of the item we're checking, if not a line_item.
     * @return int
     */
    public function get_qty_refunded_for_item($item_id, $item_type = 'line_item')
    {
    }
    /**
     * Get the refunded amount for a line item.
     *
     * @param  int    $item_id   ID of the item we're checking.
     * @param  string $item_type Type of the item we're checking, if not a line_item.
     * @return int
     */
    public function get_total_refunded_for_item($item_id, $item_type = 'line_item')
    {
    }
    /**
     * Get the refunded tax amount for a line item.
     *
     * @param  int    $item_id   ID of the item we're checking.
     * @param  int    $tax_id    ID of the tax we're checking.
     * @param  string $item_type Type of the item we're checking, if not a line_item.
     * @return double
     */
    public function get_tax_refunded_for_item($item_id, $tax_id, $item_type = 'line_item')
    {
    }
    /**
     * Get total tax refunded by rate ID.
     *
     * @param  int $rate_id Rate ID.
     * @return float
     */
    public function get_total_tax_refunded_by_rate_id($rate_id)
    {
    }
    /**
     * How much money is left to refund?
     *
     * @return string
     */
    public function get_remaining_refund_amount()
    {
    }
    /**
     * How many items are left to refund?
     *
     * @return int
     */
    public function get_remaining_refund_items()
    {
    }
    /**
     * Add total row for the payment method.
     *
     * @param array  $total_rows  Total rows.
     * @param string $tax_display Tax to display.
     */
    protected function add_order_item_totals_payment_method_row(&$total_rows, $tax_display)
    {
    }
    /**
     * Add total row for refunds.
     *
     * @param array  $total_rows  Total rows.
     * @param string $tax_display Tax to display.
     */
    protected function add_order_item_totals_refund_rows(&$total_rows, $tax_display)
    {
    }
    /**
     * Get totals for display on pages and in emails.
     *
     * @param string $tax_display Tax to display.
     * @return array
     */
    public function get_order_item_totals($tax_display = '')
    {
    }
    /**
     * Check if order has been created via admin, checkout, or in another way.
     *
     * @since 4.0.0
     * @param string $modus Way of creating the order to test for.
     * @return bool
     */
    public function is_created_via($modus)
    {
    }
    /**
     * Attempts to restore the specified order back to its original status (after having been trashed).
     *
     * @return bool If the operation was successful.
     */
    public function untrash(): bool
    {
    }
    /**
     * Indicates that regular orders have an associated Cost of Goods Sold value.
     * Note that this is true even if the order has no line items with COGS values (in that case the COGS value for the order will be zero)-
     *
     * @return bool Always true.
     */
    public function has_cogs()
    {
    }
}