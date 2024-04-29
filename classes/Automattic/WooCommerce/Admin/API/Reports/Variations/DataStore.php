<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Variations;

/**
 * API\Reports\Variations\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_order_product_lookup';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'variations';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'variation_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'name' => 'strval', 'price' => 'floatval', 'image' => 'strval', 'permalink' => 'strval', 'sku' => 'strval');
    /**
     * Extended product attributes to include in the data.
     *
     * @var array
     */
    protected $extended_attributes = array('name', 'price', 'image', 'permalink', 'stock_status', 'stock_quantity', 'low_stock_amount', 'sku');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'variations';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Fills FROM clause of SQL request based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $arg_name   Target of the JOIN sql param.
     */
    protected function add_from_sql_params($query_args, $arg_name)
    {
    }
    /**
     * Generate a subquery for order_item_id based on the attribute filters.
     *
     * @param array $query_args Query arguments supplied by the user.
     * @return string
     */
    protected function get_order_item_by_attribute_subquery($query_args)
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
     * Maps ordering specified by the user to columns in the database/fields in the data.
     *
     * @param string $order_by Sorting criterion.
     *
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Enriches the product data with attributes specified by the extended_attributes.
     *
     * @param array $products_data Product data.
     * @param array $query_args Query parameters.
     */
    protected function include_extended_info(&$products_data, $query_args)
    {
    }
    /**
     * Returns if simple products should be excluded from the report.
     *
     * @internal
     *
     * @param array $query_args Query parameters.
     *
     * @return boolean
     */
    protected function should_exclude_simple_products(array $query_args)
    {
    }
    /**
     * Fill missing extended_info.name for the deleted products.
     *
     * @param array $products Product data.
     */
    protected function fill_deleted_product_name(array &$products)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @param array $query_args Query parameters.
     *
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}