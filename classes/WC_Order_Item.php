<?php


/**
 * Order item class.
 */
class WC_Order_Item extends \WC_Data implements \ArrayAccess
{
    /**
     * Order Data array. This is the core order data exposed in APIs since 3.0.0.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array('order_id' => 0, 'name' => '');
    /**
     * Stores meta in cache for future reads.
     * A group must be set to to enable caching.
     *
     * @var string
     */
    protected $cache_group = 'order-items';
    /**
     * Meta type. This should match up with
     * the types available at https://developer.wordpress.org/reference/functions/add_metadata/.
     * WP defines 'post', 'user', 'comment', and 'term'.
     *
     * @var string
     */
    protected $meta_type = 'order_item';
    /**
     * This is the name of this object type.
     *
     * @var string
     */
    protected $object_type = 'order_item';
    /**
     * Constructor.
     *
     * @param int|object|array $item ID to load from the DB, or WC_Order_Item object.
     */
    public function __construct($item = 0)
    {
    }
    /**
     * Merge changes with data and clear.
     * Overrides WC_Data::apply_changes.
     * array_replace_recursive does not work well for order items because it merges taxes instead
     * of replacing them.
     *
     * @since 3.2.0
     */
    public function apply_changes()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Get order ID this meta belongs to.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return int
     */
    public function get_order_id($context = 'view')
    {
    }
    /**
     * Get order item name.
     *
     * @param  string $context What the value is for. Valid values are 'view' and 'edit'.
     * @return string
     */
    public function get_name($context = 'view')
    {
    }
    /**
     * Get order item type. Overridden by child classes.
     *
     * @return string
     */
    public function get_type()
    {
    }
    /**
     * Get quantity.
     *
     * @return int
     */
    public function get_quantity()
    {
    }
    /**
     * Get tax status.
     *
     * @return string
     */
    public function get_tax_status()
    {
    }
    /**
     * Get tax class.
     *
     * @return string
     */
    public function get_tax_class()
    {
    }
    /**
     * Get parent order object.
     *
     * @return WC_Order
     */
    public function get_order()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */
    /**
     * Set order ID.
     *
     * @param int $value Order ID.
     */
    public function set_order_id($value)
    {
    }
    /**
     * Set order item name.
     *
     * @param string $value Item name.
     */
    public function set_name($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Other Methods
    |--------------------------------------------------------------------------
    */
    /**
     * Type checking.
     *
     * @param  string|array $type Type.
     * @return boolean
     */
    public function is_type($type)
    {
    }
    /**
     * Calculate item taxes.
     *
     * @since  3.2.0
     * @param  array $calculate_tax_for Location data to get taxes for. Required.
     * @return bool  True if taxes were calculated.
     */
    public function calculate_taxes($calculate_tax_for = array())
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Meta Data Handling
    |--------------------------------------------------------------------------
    */
    /**
     * Wrapper for get_formatted_meta_data that includes all metadata by default. See https://github.com/woocommerce/woocommerce/pull/30948
     *
     * @param string $hideprefix  Meta data prefix, (default: _).
     * @param bool   $include_all Include all meta data, this stop skip items with values already in the product name.
     * @return array
     */
    public function get_all_formatted_meta_data($hideprefix = '_', $include_all = \true)
    {
    }
    /**
     * Expands things like term slugs before return.
     *
     * @param string $hideprefix  Meta data prefix, (default: _).
     * @param bool   $include_all Include all meta data, this stop skip items with values already in the product name.
     * @return array
     */
    public function get_formatted_meta_data($hideprefix = '_', $include_all = \false)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Array Access Methods
    |--------------------------------------------------------------------------
    |
    | For backwards compatibility with legacy arrays.
    |
    */
    /**
     * OffsetSet for ArrayAccess.
     *
     * @param string $offset Offset.
     * @param mixed  $value  Value.
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * OffsetUnset for ArrayAccess.
     *
     * @param string $offset Offset.
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /**
     * OffsetExists for ArrayAccess.
     *
     * @param string $offset Offset.
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
    /**
     * OffsetGet for ArrayAccess.
     *
     * @param string $offset Offset.
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
}