<?php


/**
 * WC Customer Data Store which stores the data in session.
 *
 * @version  3.0.0
 */
class WC_Customer_Data_Store_Session extends \WC_Data_Store_WP implements \WC_Customer_Data_Store_Interface, \WC_Object_Data_Store_Interface
{
    /**
     * Keys which are also stored in a session (so we can make sure they get updated...)
     *
     * @var array
     */
    protected $session_keys = array('id', 'date_modified', 'billing_postcode', 'billing_city', 'billing_address_1', 'billing_address', 'billing_address_2', 'billing_state', 'billing_country', 'shipping_postcode', 'shipping_city', 'shipping_address_1', 'shipping_address', 'shipping_address_2', 'shipping_state', 'shipping_country', 'is_vat_exempt', 'calculated_shipping', 'billing_first_name', 'billing_last_name', 'billing_company', 'billing_phone', 'billing_email', 'shipping_first_name', 'shipping_last_name', 'shipping_company');
    /**
     * Simply update the session.
     *
     * @param WC_Customer $customer Customer object.
     */
    public function create(&$customer)
    {
    }
    /**
     * Simply update the session.
     *
     * @param WC_Customer $customer Customer object.
     */
    public function update(&$customer)
    {
    }
    /**
     * Saves all customer data to the session.
     *
     * @param WC_Customer $customer Customer object.
     */
    public function save_to_session($customer)
    {
    }
    /**
     * Read customer data from the session unless the user has logged in, in
     * which case the stored ID will differ from the actual ID.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     */
    public function read(&$customer)
    {
    }
    /**
     * Load default values if props are unset.
     *
     * @param WC_Customer $customer Customer object.
     */
    protected function set_defaults(&$customer)
    {
    }
    /**
     * Deletes a customer from the database.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @param array       $args Array of args to pass to the delete method.
     */
    public function delete(&$customer, $args = array())
    {
    }
    /**
     * Gets the customers last order.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @return WC_Order|false
     */
    public function get_last_order(&$customer)
    {
    }
    /**
     * Return the number of orders this customer has.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @return integer
     */
    public function get_order_count(&$customer)
    {
    }
    /**
     * Return how much money this customer has spent.
     *
     * @since 3.0.0
     * @param WC_Customer $customer Customer object.
     * @return float
     */
    public function get_total_spent(&$customer)
    {
    }
}