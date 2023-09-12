<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Coupons;

/**
 * API\Reports\Coupons\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_order_coupon_lookup';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'coupons';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('coupon_id' => 'intval', 'amount' => 'floatval', 'orders_count' => 'intval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'coupons';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Set up all the hooks for maintaining and populating table data.
     */
    public static function init()
    {
    }
    /**
     * Returns an array of ids of included coupons, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_included_coupons_array($query_args)
    {
    }
    /**
     * Updates the database query with parameters used for Products report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
    {
    }
    /**
     * Fills ORDER BY clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $from_arg   Target of the JOIN sql param.
     * @param string $id_cell    ID cell identifier, like `table_name.id_column_name`.
     */
    protected function add_order_by_params($query_args, $from_arg, $id_cell)
    {
    }
    /**
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Enriches the coupon data with extra attributes.
     *
     * @param array $coupon_data Coupon data.
     * @param array $query_args Query parameters.
     */
    protected function include_extended_info(&$coupon_data, $query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Get coupon ID for an order.
     *
     * Tries to get the ID from order item meta, then falls back to a query of published coupons.
     *
     * @param \WC_Order_Item_Coupon $coupon_item The coupon order item object.
     * @return int Coupon ID on success, 0 on failure.
     */
    public static function get_coupon_id(\WC_Order_Item_Coupon $coupon_item)
    {
    }
    /**
     * Create or update an an entry in the wc_order_coupon_lookup table for an order.
     *
     * @since 3.5.0
     * @param int $order_id Order ID.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function sync_order_coupons($order_id)
    {
    }
    /**
     * Clean coupons data when an order is deleted.
     *
     * @param int $order_id Order ID.
     */
    public static function sync_on_order_delete($order_id)
    {
    }
    /**
     * Gets coupons based on the provided arguments.
     *
     * @todo Upon core merge, including this in core's `class-wc-coupon-data-store-cpt.php` might make more sense.
     * @param array $args Array of args to filter the query by. Supports `include`.
     * @return array Array of results.
     */
    public function get_coupons($args)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}