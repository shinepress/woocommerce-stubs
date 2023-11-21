<?php


/**
 * WC_Cart_Session class.
 *
 * @since 3.2.0
 */
final class WC_Cart_Session
{
    /**
     * Reference to cart object.
     *
     * @since 3.2.0
     * @var WC_Cart
     */
    protected $cart;
    /**
     * Sets up the items provided, and calculate totals.
     *
     * @since 3.2.0
     * @throws Exception If missing WC_Cart object.
     *
     * @param WC_Cart $cart Cart object to calculate totals for.
     */
    public function __construct($cart)
    {
    }
    /**
     * Sets the cart instance.
     *
     * @param WC_Cart $cart Cart object.
     */
    public function set_cart(\WC_Cart $cart)
    {
    }
    /**
     * Register methods for this object on the appropriate WordPress hooks.
     */
    public function init()
    {
    }
    /**
     * Get the cart data from the PHP session and store it in class variables.
     *
     * @since 3.2.0
     */
    public function get_cart_from_session()
    {
    }
    /**
     * Destroy cart session data.
     *
     * @since 3.2.0
     */
    public function destroy_cart_session()
    {
    }
    /**
     * Will set cart cookies if needed and when possible.
     *
     * @since 3.2.0
     */
    public function maybe_set_cart_cookies()
    {
    }
    /**
     * Sets the php session data for the cart and coupons.
     */
    public function set_session()
    {
    }
    /**
     * Returns the contents of the cart in an array without the 'data' element.
     *
     * @return array contents of the cart
     */
    public function get_cart_for_session()
    {
    }
    /**
     * Save the persistent cart when the cart is updated.
     */
    public function persistent_cart_update()
    {
    }
    /**
     * Delete the persistent cart permanently.
     */
    public function persistent_cart_destroy()
    {
    }
    /**
     * Set cart hash cookie and items in cart if not already set.
     *
     * @param bool $set Should cookies be set (true) or unset.
     */
    private function set_cart_cookies($set = \true)
    {
    }
    /**
     * Get the persistent cart from the database.
     *
     * @since  3.5.0
     * @return array
     */
    private function get_saved_cart()
    {
    }
    /**
     * Get a cart from an order, if user has permission.
     *
     * @since  3.5.0
     *
     * @param int   $order_id Order ID to try to load.
     * @param array $cart Current cart array.
     *
     * @return array
     */
    private function populate_cart_from_order($order_id, $cart)
    {
    }
}