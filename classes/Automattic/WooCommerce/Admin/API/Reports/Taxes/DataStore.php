<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Taxes;

/**
 * API\Reports\Taxes\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_order_tax_lookup';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'taxes';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('tax_rate_id' => 'intval', 'name' => 'strval', 'tax_rate' => 'floatval', 'country' => 'strval', 'state' => 'strval', 'priority' => 'intval', 'total_tax' => 'floatval', 'order_tax' => 'floatval', 'shipping_tax' => 'floatval', 'orders_count' => 'intval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'taxes';
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
     * Fills FROM clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args          Query arguments supplied by the user.
     * @param string $order_status_filter Order status subquery.
     */
    protected function add_from_sql_params($query_args, $order_status_filter)
    {
    }
    /**
     * Updates the database query with parameters used for Taxes report: categories and order status.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
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
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param string $order_by Sorting criterion.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Create or update an entry in the wc_order_tax_lookup table for an order.
     *
     * @param int $order_id Order ID.
     * @return int|bool Returns -1 if order won't be processed, or a boolean indicating processing success.
     */
    public static function sync_order_taxes($order_id)
    {
    }
    /**
     * Clean taxes data when an order is deleted.
     *
     * @param int $order_id Order ID.
     */
    public static function sync_on_order_delete($order_id)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}