<?php


/**
 * WC_Cart_Totals class.
 *
 * @since 3.2.0
 */
final class WC_Cart_Totals
{
    /**
     * Reference to cart object.
     *
     * @since 3.2.0
     * @var WC_Cart
     */
    protected $cart;
    /**
     * Reference to customer object.
     *
     * @since 3.2.0
     * @var array
     */
    protected $customer;
    /**
     * Line items to calculate.
     *
     * @since 3.2.0
     * @var array
     */
    protected $items = array();
    /**
     * Fees to calculate.
     *
     * @since 3.2.0
     * @var array
     */
    protected $fees = array();
    /**
     * Shipping costs.
     *
     * @since 3.2.0
     * @var array
     */
    protected $shipping = array();
    /**
     * Applied coupon objects.
     *
     * @since 3.2.0
     * @var array
     */
    protected $coupons = array();
    /**
     * Item/coupon discount totals.
     *
     * @since 3.2.0
     * @var array
     */
    protected $coupon_discount_totals = array();
    /**
     * Item/coupon discount tax totals.
     *
     * @since 3.2.0
     * @var array
     */
    protected $coupon_discount_tax_totals = array();
    /**
     * Should taxes be calculated?
     *
     * @var boolean
     */
    protected $calculate_tax = \true;
    /**
     * Stores totals.
     *
     * @since 3.2.0
     * @var array
     */
    protected $totals = array('fees_total' => 0, 'fees_total_tax' => 0, 'items_subtotal' => 0, 'items_subtotal_tax' => 0, 'items_total' => 0, 'items_total_tax' => 0, 'total' => 0, 'shipping_total' => 0, 'shipping_tax_total' => 0, 'discounts_total' => 0);
    /**
     * Sets up the items provided, and calculate totals.
     *
     * @since 3.2.0
     * @throws Exception If missing WC_Cart object.
     * @param WC_Cart $cart Cart object to calculate totals for.
     */
    public function __construct(&$cart = \null)
    {
    }
    /**
     * Run all calculations methods on the given items in sequence.
     *
     * @since 3.2.0
     */
    protected function calculate()
    {
    }
    /**
     * Get default blank set of props used per item.
     *
     * @since  3.2.0
     * @return array
     */
    protected function get_default_item_props()
    {
    }
    /**
     * Get default blank set of props used per fee.
     *
     * @since  3.2.0
     * @return array
     */
    protected function get_default_fee_props()
    {
    }
    /**
     * Get default blank set of props used per shipping row.
     *
     * @since  3.2.0
     * @return array
     */
    protected function get_default_shipping_props()
    {
    }
    /**
     * Should we round at subtotal level only?
     *
     * @return bool
     */
    protected function round_at_subtotal()
    {
    }
    /**
     * Handles a cart or order object passed in for calculation. Normalises data
     * into the same format for use by this class.
     *
     * Each item is made up of the following props, in addition to those returned by get_default_item_props() for totals.
     *  - key: An identifier for the item (cart item key or line item ID).
     *  - cart_item: For carts, the cart item from the cart which may include custom data.
     *  - quantity: The qty for this line.
     *  - price: The line price in cents.
     *  - product: The product object this cart item is for.
     *
     * @since 3.2.0
     */
    protected function get_items_from_cart()
    {
    }
    /**
     * Get item costs grouped by tax class.
     *
     * @since  3.2.0
     * @return array
     */
    protected function get_tax_class_costs()
    {
    }
    /**
     * Get fee objects from the cart. Normalises data
     * into the same format for use by this class.
     *
     * @since 3.2.0
     */
    protected function get_fees_from_cart()
    {
    }
    /**
     * Get shipping methods from the cart and normalise.
     *
     * @since 3.2.0
     */
    protected function get_shipping_from_cart()
    {
    }
    /**
     * Return array of coupon objects from the cart. Normalises data
     * into the same format for use by this class.
     *
     * @since  3.2.0
     */
    protected function get_coupons_from_cart()
    {
    }
    /**
     * Sort coupons so discounts apply consistently across installs.
     *
     * In order of priority;
     *  - sort param
     *  - usage restriction
     *  - coupon value
     *  - ID
     *
     * @param WC_Coupon $a Coupon object.
     * @param WC_Coupon $b Coupon object.
     * @return int
     */
    protected function sort_coupons_callback($a, $b)
    {
    }
    /**
     * Ran to remove all base taxes from an item. Used when prices include tax, and the customer is tax exempt.
     *
     * @since 3.2.2
     * @param object $item Item to adjust the prices of.
     * @return object
     */
    protected function remove_item_base_taxes($item)
    {
    }
    /**
     * Only ran if woocommerce_adjust_non_base_location_prices is true.
     *
     * If the customer is outside of the base location, this removes the base
     * taxes. This is off by default unless the filter is used.
     *
     * Uses edit context so unfiltered tax class is returned.
     *
     * @since 3.2.0
     * @param object $item Item to adjust the prices of.
     * @return object
     */
    protected function adjust_non_base_location_price($item)
    {
    }
    /**
     * Get discounted price of an item with precision (in cents).
     *
     * @since  3.2.0
     * @param  object $item_key Item to get the price of.
     * @return int
     */
    protected function get_discounted_price_in_cents($item_key)
    {
    }
    /**
     * Get tax rates for an item. Caches rates in class to avoid multiple look ups.
     *
     * @param  object $item Item to get tax rates for.
     * @return array of taxes
     */
    protected function get_item_tax_rates($item)
    {
    }
    /**
     * Get item costs grouped by tax class.
     *
     * @since  3.2.0
     * @return array
     */
    protected function get_item_costs_by_tax_class()
    {
    }
    /**
     * Get a single total with or without precision (in cents).
     *
     * @since  3.2.0
     * @param  string $key Total to get.
     * @param  bool   $in_cents Should the totals be returned in cents, or without precision.
     * @return int|float
     */
    public function get_total($key = 'total', $in_cents = \false)
    {
    }
    /**
     * Set a single total.
     *
     * @since  3.2.0
     * @param string $key Total name you want to set.
     * @param int    $total Total to set.
     */
    protected function set_total($key = 'total', $total)
    {
    }
    /**
     * Get all totals with or without precision (in cents).
     *
     * @since  3.2.0
     * @param  bool $in_cents Should the totals be returned in cents, or without precision.
     * @return array.
     */
    public function get_totals($in_cents = \false)
    {
    }
    /**
     * Get taxes merged by type.
     *
     * @since 3.2.0
     * @param  bool         $in_cents If returned value should be in cents.
     * @param  array|string $types    Types to merge and return. Defaults to all.
     * @return array
     */
    protected function get_merged_taxes($in_cents = \false, $types = array('items', 'fees', 'shipping'))
    {
    }
    /**
     * Combine item taxes into a single array, preserving keys.
     *
     * @since 3.2.0
     * @param array $item_taxes Taxes to combine.
     * @return array
     */
    protected function combine_item_taxes($item_taxes)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Calculation methods.
    |--------------------------------------------------------------------------
    */
    /**
     * Calculate item totals.
     *
     * @since 3.2.0
     */
    protected function calculate_item_totals()
    {
    }
    /**
     * Subtotals are costs before discounts.
     *
     * To prevent rounding issues we need to work with the inclusive price where possible.
     * otherwise we'll see errors such as when working with a 9.99 inc price, 20% VAT which would.
     * be 8.325 leading to totals being 1p off.
     *
     * Pre tax coupons come off the price the customer thinks they are paying - tax is calculated.
     * afterwards.
     *
     * e.g. $100 bike with $10 coupon = customer pays $90 and tax worked backwards from that.
     *
     * @since 3.2.0
     */
    protected function calculate_item_subtotals()
    {
    }
    /**
     * Calculate COUPON based discounts which change item prices.
     *
     * @since 3.2.0
     * @uses  WC_Discounts class.
     */
    protected function calculate_discounts()
    {
    }
    /**
     * Triggers the cart fees API, grabs the list of fees, and calculates taxes.
     *
     * Note: This class sets the totals for the 'object' as they are calculated. This is so that APIs like the fees API can see these totals if needed.
     *
     * @since 3.2.0
     */
    protected function calculate_fee_totals()
    {
    }
    /**
     * Calculate any shipping taxes.
     *
     * @since 3.2.0
     */
    protected function calculate_shipping_totals()
    {
    }
    /**
     * Main cart totals.
     *
     * @since 3.2.0
     */
    protected function calculate_totals()
    {
    }
    /**
     * Apply rounding to an array of taxes before summing. Rounds to store DP setting, ignoring precision.
     *
     * @since  3.2.6
     * @param  float $value Tax value.
     * @return float
     */
    protected function round_line_tax($value)
    {
    }
}