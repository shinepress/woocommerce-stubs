<?php


/**
 * WC_Cart_Fees class.
 *
 * @since 3.2.0
 */
final class WC_Cart_Fees
{
    /**
     * An array of fee objects.
     *
     * @var object[]
     */
    private $fees = array();
    /**
     * Reference to cart object.
     *
     * @since 3.2.0
     * @var WC_Cart
     */
    private $cart;
    /**
     * New fees are made out of these props.
     *
     * @var array
     */
    private $default_fee_props = array('id' => '', 'name' => '', 'tax_class' => '', 'taxable' => \false, 'amount' => 0, 'total' => 0);
    /**
     * Constructor. Reference to the cart.
     *
     * @since 3.2.0
     * @throws Exception If missing WC_Cart object.
     * @param WC_Cart $cart Cart object.
     */
    public function __construct(&$cart)
    {
    }
    /**
     * Register methods for this object on the appropriate WordPress hooks.
     */
    public function init()
    {
    }
    /**
     * Add a fee. Fee IDs must be unique.
     *
     * @since 3.2.0
     * @param array $args Array of fee properties.
     * @return object Either a fee object if added, or a WP_Error if it failed.
     */
    public function add_fee($args = array())
    {
    }
    /**
     * Get fees.
     *
     * @return array
     */
    public function get_fees()
    {
    }
    /**
     * Set fees.
     *
     * @param object[] $raw_fees Array of fees.
     */
    public function set_fees($raw_fees = array())
    {
    }
    /**
     * Remove all fees.
     *
     * @since 3.2.0
     */
    public function remove_all_fees()
    {
    }
    /**
     * Sort fees by amount.
     *
     * @param stdClass $a Fee object.
     * @param stdClass $b Fee object.
     * @return int
     */
    protected function sort_fees_callback($a, $b)
    {
    }
    /**
     * Generate a unique ID for the fee being added.
     *
     * @param string $fee Fee object.
     * @return string fee key.
     */
    private function generate_id($fee)
    {
    }
}