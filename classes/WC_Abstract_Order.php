<?php


/**
 * WC_Abstract_Order class.
 */
abstract class WC_Abstract_Order extends \WC_Abstract_Legacy_Order
{
    use \WC_Item_Totals;
    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * Notes: cart_tax = cart_tax is the new name for the legacy 'order_tax'
     * which is the tax for items only, not shipping.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array('parent_id' => 0, 'status' => '', 'currency' => '', 'version' => '', 'prices_include_tax' => \false, 'date_created' => \null, 'date_modified' => \null, 'discount_total' => 0, 'discount_tax' => 0, 'shipping_total' => 0, 'shipping_tax' => 0, 'cart_tax' => 0, 'total' => 0, 'total_tax' => 0);
    /**
     * Order items will be stored here, sometimes before they persist in the DB.
     *
     * @since 3.0.0
     * @var array
     */
    protected $items = array();
    /**
     * Order items that need deleting are stored here.
     *
     * @since 3.0.0
     * @var array
     */
    protected $items_to_delete = array();
    /**
     * Stores meta in cache for future reads.
     *
     * A group must be set to to enable caching.
     *
     * @var string
     */
    protected $cache_group = 'orders';
    /**
     * Which data store to load.
     *
     * @var string
     */
    protected $data_store_name = 'order';
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'order';
    /**
     * Get the order if ID is passed, otherwise the order is new and empty.
     * This class should NOT be instantiated, but the get_order function or new WC_Order_Factory.
     * should be used. It is possible, but the aforementioned are preferred and are the only.
     * methods that will be maintained going forward.
     *
     * @param  int|object|WC_Order $order Order to read.
     */
    public function __construct($order = 0)
    {
    }
    /**
     * Get internal type.
     *
     * @return string
     */
    public function get_type()
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
     * Save all order items which are part of this order.
     */
    protected function save_items()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Get parent order ID.
     *
     * @since 3.0.0
     * @param  string $context View or edit context.
     * @return integer
     */
    public function get_parent_id($context = 'view')
    {
    }
    /**
     * Gets order currency.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_currency($context = 'view')
    {
    }
    /**
     * Get order_version.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_version($context = 'view')
    {
    }
    /**
     * Get prices_include_tax.
     *
     * @param  string $context View or edit context.
     * @return bool
     */
    public function get_prices_include_tax($context = 'view')
    {
    }
    /**
     * Get date_created.
     *
     * @param  string $context View or edit context.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_created($context = 'view')
    {
    }
    /**
     * Get date_modified.
     *
     * @param  string $context View or edit context.
     * @return WC_DateTime|NULL object if the date is set or null if there is no date.
     */
    public function get_date_modified($context = 'view')
    {
    }
    /**
     * Return the order statuses without wc- internal prefix.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_status($context = 'view')
    {
    }
    /**
     * Get discount_total.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_discount_total($context = 'view')
    {
    }
    /**
     * Get discount_tax.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_discount_tax($context = 'view')
    {
    }
    /**
     * Get shipping_total.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_shipping_total($context = 'view')
    {
    }
    /**
     * Get shipping_tax.
     *
     * @param  string $context View or edit context.
     * @return string
     */
    public function get_shipping_tax($context = 'view')
    {
    }
    /**
     * Gets cart tax amount.
     *
     * @param  string $context View or edit context.
     * @return float
     */
    public function get_cart_tax($context = 'view')
    {
    }
    /**
     * Gets order grand total. incl. taxes. Used in gateways.
     *
     * @param  string $context View or edit context.
     * @return float
     */
    public function get_total($context = 'view')
    {
    }
    /**
     * Get total tax amount. Alias for get_order_tax().
     *
     * @param  string $context View or edit context.
     * @return float
     */
    public function get_total_tax($context = 'view')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Non-CRUD Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Gets the total discount amount.
     *
     * @param  bool $ex_tax Show discount excl any tax.
     * @return float
     */
    public function get_total_discount($ex_tax = \true)
    {
    }
    /**
     * Gets order subtotal.
     *
     * @return float
     */
    public function get_subtotal()
    {
    }
    /**
     * Get taxes, merged by code, formatted ready for output.
     *
     * @return array
     */
    public function get_tax_totals()
    {
    }
    /**
     * Get all valid statuses for this order
     *
     * @since 3.0.0
     * @return array Internal status keys e.g. 'wc-processing'
     */
    protected function get_valid_statuses()
    {
    }
    /**
     * Get user ID. Used by orders, not other order types like refunds.
     *
     * @param  string $context View or edit context.
     * @return int
     */
    public function get_user_id($context = 'view')
    {
    }
    /**
     * Get user. Used by orders, not other order types like refunds.
     *
     * @return WP_User|false
     */
    public function get_user()
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
    */
    /**
     * Set parent order ID.
     *
     * @since 3.0.0
     * @param int $value Value to set.
     * @throws WC_Data_Exception Exception thrown if parent ID does not exist or is invalid.
     */
    public function set_parent_id($value)
    {
    }
    /**
     * Set order status.
     *
     * @since 3.0.0
     * @param string $new_status Status to change the order to. No internal wc- prefix is required.
     * @return array details of change
     */
    public function set_status($new_status)
    {
    }
    /**
     * Set order_version.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_version($value)
    {
    }
    /**
     * Set order_currency.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_currency($value)
    {
    }
    /**
     * Set prices_include_tax.
     *
     * @param bool $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_prices_include_tax($value)
    {
    }
    /**
     * Set date_created.
     *
     * @param  string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_date_created($date = \null)
    {
    }
    /**
     * Set date_modified.
     *
     * @param  string|integer|null $date UTC timestamp, or ISO 8601 DateTime. If the DateTime string has no timezone or offset, WordPress site timezone will be assumed. Null if there is no date.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_date_modified($date = \null)
    {
    }
    /**
     * Set discount_total.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_discount_total($value)
    {
    }
    /**
     * Set discount_tax.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_discount_tax($value)
    {
    }
    /**
     * Set shipping_total.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_shipping_total($value)
    {
    }
    /**
     * Set shipping_tax.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_shipping_tax($value)
    {
    }
    /**
     * Set cart tax.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_cart_tax($value)
    {
    }
    /**
     * Sets order tax (sum of cart and shipping tax). Used internally only.
     *
     * @param string $value Value to set.
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    protected function set_total_tax($value)
    {
    }
    /**
     * Set total.
     *
     * @param string $value Value to set.
     * @param string $deprecated Function used to set different totals based on this.
     *
     * @return bool|void
     * @throws WC_Data_Exception Exception may be thrown if value is invalid.
     */
    public function set_total($value, $deprecated = '')
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Order Item Handling
    |--------------------------------------------------------------------------
    |
    | Order items are used for products, taxes, shipping, and fees within
    | each order.
    */
    /**
     * Remove all line items (products, coupons, shipping, taxes) from the order.
     *
     * @param string $type Order item type. Default null.
     */
    public function remove_order_items($type = \null)
    {
    }
    /**
     * Convert a type to a types group.
     *
     * @param string $type type to lookup.
     * @return string
     */
    protected function type_to_group($type)
    {
    }
    /**
     * Return an array of items/products within this order.
     *
     * @param string|array $types Types of line items to get (array or string).
     * @return WC_Order_Item[]
     */
    public function get_items($types = 'line_item')
    {
    }
    /**
     * Return array of values for calculations.
     *
     * @param string $field Field name to return.
     *
     * @return array Array of values.
     */
    protected function get_values_for_total($field)
    {
    }
    /**
     * Return an array of coupons within this order.
     *
     * @since  3.7.0
     * @return WC_Order_Item_Coupon[]
     */
    public function get_coupons()
    {
    }
    /**
     * Return an array of fees within this order.
     *
     * @return WC_Order_item_Fee[]
     */
    public function get_fees()
    {
    }
    /**
     * Return an array of taxes within this order.
     *
     * @return WC_Order_Item_Tax[]
     */
    public function get_taxes()
    {
    }
    /**
     * Return an array of shipping costs within this order.
     *
     * @return WC_Order_Item_Shipping[]
     */
    public function get_shipping_methods()
    {
    }
    /**
     * Gets formatted shipping method title.
     *
     * @return string
     */
    public function get_shipping_method()
    {
    }
    /**
     * Get used coupon codes only.
     *
     * @since 3.7.0
     * @return array
     */
    public function get_coupon_codes()
    {
    }
    /**
     * Gets the count of order items of a certain type.
     *
     * @param string $item_type Item type to lookup.
     * @return int|string
     */
    public function get_item_count($item_type = '')
    {
    }
    /**
     * Get an order item object, based on its type.
     *
     * @since  3.0.0
     * @param  int  $item_id ID of item to get.
     * @param  bool $load_from_db Prior to 3.2 this item was loaded direct from WC_Order_Factory, not this object. This param is here for backwards compatility with that. If false, uses the local items variable instead.
     * @return WC_Order_Item|false
     */
    public function get_item($item_id, $load_from_db = \true)
    {
    }
    /**
     * Get key for where a certain item type is stored in _items.
     *
     * @since  3.0.0
     * @param  string $item object Order item (product, shipping, fee, coupon, tax).
     * @return string
     */
    protected function get_items_key($item)
    {
    }
    /**
     * Remove item from the order.
     *
     * @param int $item_id Item ID to delete.
     * @return false|void
     */
    public function remove_item($item_id)
    {
    }
    /**
     * Adds an order item to this order. The order item will not persist until save.
     *
     * @since 3.0.0
     * @param WC_Order_Item $item Order item object (product, shipping, fee, coupon, tax).
     * @return false|void
     */
    public function add_item($item)
    {
    }
    /**
     * Check and records coupon usage tentatively so that counts validation is correct. Display an error if coupon usage limit has been reached.
     *
     * If you are using this method, make sure to `release_held_coupons` in case an Exception is thrown.
     *
     * @throws Exception When not able to apply coupon.
     *
     * @param string $billing_email Billing email of order.
     */
    public function hold_applied_coupons($billing_email)
    {
    }
    /**
     * Hold coupon if a global usage limit is defined.
     *
     * @param WC_Coupon $coupon Coupon object.
     *
     * @return string    Meta key which indicates held coupon.
     * @throws Exception When can't be held.
     */
    private function hold_coupon($coupon)
    {
    }
    /**
     * Hold coupon if usage limit per customer is defined.
     *
     * @param WC_Coupon $coupon              Coupon object.
     * @param array     $user_ids_and_emails Array of user Id and emails to check for usage limit.
     * @param string    $user_alias          User ID or email to use to record current usage.
     *
     * @return string    Meta key which indicates held coupon.
     * @throws Exception When coupon can't be held.
     */
    private function hold_coupon_for_users($coupon, $user_ids_and_emails, $user_alias)
    {
    }
    /**
     * Helper method to get all aliases for current user and provide billing email.
     *
     * @param string $billing_email Billing email provided in form.
     *
     * @return array     Array of all aliases.
     * @throws Exception When validation fails.
     */
    private function get_billing_and_current_user_aliases($billing_email)
    {
    }
    /**
     * Apply a coupon to the order and recalculate totals.
     *
     * @since 3.2.0
     * @param string|WC_Coupon $raw_coupon Coupon code or object.
     * @return true|WP_Error True if applied, error if not.
     */
    public function apply_coupon($raw_coupon)
    {
    }
    /**
     * Remove a coupon from the order and recalculate totals.
     *
     * Coupons affect line item totals, but there is no relationship between
     * coupon and line total, so to remove a coupon we need to work from the
     * line subtotal (price before discount) and re-apply all coupons in this
     * order.
     *
     * Manual discounts are not affected; those are separate and do not affect
     * stored line totals.
     *
     * @since  3.2.0
     * @param  string $code Coupon code.
     * @return void
     */
    public function remove_coupon($code)
    {
    }
    /**
     * Apply all coupons in this order again to all line items.
     * This method is public since WooCommerce 3.8.0.
     *
     * @since 3.2.0
     */
    public function recalculate_coupons()
    {
    }
    /**
     * After applying coupons via the WC_Discounts class, update line items.
     *
     * @since 3.2.0
     * @param WC_Discounts $discounts Discounts class.
     */
    protected function set_item_discount_amounts($discounts)
    {
    }
    /**
     * After applying coupons via the WC_Discounts class, update or create coupon items.
     *
     * @since 3.2.0
     * @param WC_Discounts $discounts Discounts class.
     */
    protected function set_coupon_discount_amounts($discounts)
    {
    }
    /**
     * Add a product line item to the order. This is the only line item type with
     * its own method because it saves looking up order amounts (costs are added up for you).
     *
     * @param  WC_Product $product Product object.
     * @param  int        $qty Quantity to add.
     * @param  array      $args Args for the added product.
     * @return int
     * @throws WC_Data_Exception Exception thrown if the item cannot be added to the cart.
     */
    public function add_product($product, $qty = 1, $args = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Payment Token Handling
    |--------------------------------------------------------------------------
    |
    | Payment tokens are hashes used to take payments by certain gateways.
    |
    */
    /**
     * Add a payment token to an order
     *
     * @since 2.6
     * @param WC_Payment_Token $token Payment token object.
     * @return boolean|int The new token ID or false if it failed.
     */
    public function add_payment_token($token)
    {
    }
    /**
     * Returns a list of all payment tokens associated with the current order
     *
     * @since 2.6
     * @return array An array of payment token objects
     */
    public function get_payment_tokens()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Calculations.
    |--------------------------------------------------------------------------
    |
    | These methods calculate order totals and taxes based on the current data.
    |
    */
    /**
     * Calculate shipping total.
     *
     * @since 2.2
     * @return float
     */
    public function calculate_shipping()
    {
    }
    /**
     * Get all tax classes for items in the order.
     *
     * @since 2.6.3
     * @return array
     */
    public function get_items_tax_classes()
    {
    }
    /**
     * Get tax location for this order.
     *
     * @since 3.2.0
     * @param array $args array Override the location.
     * @return array
     */
    protected function get_tax_location($args = array())
    {
    }
    /**
     * Calculate taxes for all line items and shipping, and store the totals and tax rows.
     *
     * If by default the taxes are based on the shipping address and the current order doesn't
     * have any, it would use the billing address rather than using the Shopping base location.
     *
     * Will use the base country unless customer addresses are set.
     *
     * @param array $args Added in 3.0.0 to pass things like location.
     */
    public function calculate_taxes($args = array())
    {
    }
    /**
     * Update tax lines for the order based on the line item taxes themselves.
     */
    public function update_taxes()
    {
    }
    /**
     * Helper function.
     * If you add all items in this order in cart again, this would be the cart subtotal (assuming all other settings are same).
     *
     * @return float Cart subtotal.
     */
    protected function get_cart_subtotal_for_order()
    {
    }
    /**
     * Helper function.
     * If you add all items in this order in cart again, this would be the cart total (assuming all other settings are same).
     *
     * @return float Cart total.
     */
    protected function get_cart_total_for_order()
    {
    }
    /**
     * Calculate totals by looking at the contents of the order. Stores the totals and returns the orders final total.
     *
     * @since 2.2
     * @param  bool $and_taxes Calc taxes if true.
     * @return float calculated grand total.
     */
    public function calculate_totals($and_taxes = \true)
    {
    }
    /**
     * Get item subtotal - this is the cost before discount.
     *
     * @param object $item Item to get total from.
     * @param bool   $inc_tax (default: false).
     * @param bool   $round (default: true).
     * @return float
     */
    public function get_item_subtotal($item, $inc_tax = \false, $round = \true)
    {
    }
    /**
     * Get line subtotal - this is the cost before discount.
     *
     * @param object $item Item to get total from.
     * @param bool   $inc_tax (default: false).
     * @param bool   $round (default: true).
     * @return float
     */
    public function get_line_subtotal($item, $inc_tax = \false, $round = \true)
    {
    }
    /**
     * Calculate item cost - useful for gateways.
     *
     * @param object $item Item to get total from.
     * @param bool   $inc_tax (default: false).
     * @param bool   $round (default: true).
     * @return float
     */
    public function get_item_total($item, $inc_tax = \false, $round = \true)
    {
    }
    /**
     * Calculate line total - useful for gateways.
     *
     * @param object $item Item to get total from.
     * @param bool   $inc_tax (default: false).
     * @param bool   $round (default: true).
     * @return float
     */
    public function get_line_total($item, $inc_tax = \false, $round = \true)
    {
    }
    /**
     * Get item tax - useful for gateways.
     *
     * @param mixed $item Item to get total from.
     * @param bool  $round (default: true).
     * @return float
     */
    public function get_item_tax($item, $round = \true)
    {
    }
    /**
     * Get line tax - useful for gateways.
     *
     * @param mixed $item Item to get total from.
     * @return float
     */
    public function get_line_tax($item)
    {
    }
    /**
     * Gets line subtotal - formatted for display.
     *
     * @param object $item Item to get total from.
     * @param string $tax_display Incl or excl tax display mode.
     * @return string
     */
    public function get_formatted_line_subtotal($item, $tax_display = '')
    {
    }
    /**
     * Gets order total - formatted for display.
     *
     * @return string
     */
    public function get_formatted_order_total()
    {
    }
    /**
     * Gets subtotal - subtotal is shown before discounts, but with localised taxes.
     *
     * @param bool   $compound (default: false).
     * @param string $tax_display (default: the tax_display_cart value).
     * @return string
     */
    public function get_subtotal_to_display($compound = \false, $tax_display = '')
    {
    }
    /**
     * Gets shipping (formatted).
     *
     * @param string $tax_display Excl or incl tax display mode.
     * @return string
     */
    public function get_shipping_to_display($tax_display = '')
    {
    }
    /**
     * Get the discount amount (formatted).
     *
     * @since  2.3.0
     * @param string $tax_display Excl or incl tax display mode.
     * @return string
     */
    public function get_discount_to_display($tax_display = '')
    {
    }
    /**
     * Add total row for subtotal.
     *
     * @param array  $total_rows Reference to total rows array.
     * @param string $tax_display Excl or incl tax display mode.
     */
    protected function add_order_item_totals_subtotal_row(&$total_rows, $tax_display)
    {
    }
    /**
     * Add total row for discounts.
     *
     * @param array  $total_rows Reference to total rows array.
     * @param string $tax_display Excl or incl tax display mode.
     */
    protected function add_order_item_totals_discount_row(&$total_rows, $tax_display)
    {
    }
    /**
     * Add total row for shipping.
     *
     * @param array  $total_rows Reference to total rows array.
     * @param string $tax_display Excl or incl tax display mode.
     */
    protected function add_order_item_totals_shipping_row(&$total_rows, $tax_display)
    {
    }
    /**
     * Add total row for fees.
     *
     * @param array  $total_rows Reference to total rows array.
     * @param string $tax_display Excl or incl tax display mode.
     */
    protected function add_order_item_totals_fee_rows(&$total_rows, $tax_display)
    {
    }
    /**
     * Add total row for taxes.
     *
     * @param array  $total_rows Reference to total rows array.
     * @param string $tax_display Excl or incl tax display mode.
     */
    protected function add_order_item_totals_tax_rows(&$total_rows, $tax_display)
    {
    }
    /**
     * Add total row for grand total.
     *
     * @param array  $total_rows Reference to total rows array.
     * @param string $tax_display Excl or incl tax display mode.
     */
    protected function add_order_item_totals_total_row(&$total_rows, $tax_display)
    {
    }
    /**
     * Get totals for display on pages and in emails.
     *
     * @param mixed $tax_display Excl or incl tax display mode.
     * @return array
     */
    public function get_order_item_totals($tax_display = '')
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
     * Checks the order status against a passed in status.
     *
     * @param array|string $status Status to check.
     * @return bool
     */
    public function has_status($status)
    {
    }
    /**
     * Check whether this order has a specific shipping method or not.
     *
     * @param string $method_id Method ID to check.
     * @return bool
     */
    public function has_shipping_method($method_id)
    {
    }
    /**
     * Returns true if the order contains a free product.
     *
     * @since 2.5.0
     * @return bool
     */
    public function has_free_item()
    {
    }
}