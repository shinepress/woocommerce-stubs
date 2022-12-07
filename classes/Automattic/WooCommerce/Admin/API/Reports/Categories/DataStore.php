<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Categories;

/**
 * API\Reports\Categories\DataStore.
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
    protected $cache_key = 'categories';
    /**
     * Order by setting used for sorting categories data.
     *
     * @var string
     */
    private $order_by = '';
    /**
     * Order setting used for sorting categories data.
     *
     * @var string
     */
    private $order = '';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('category_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval');
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'categories';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Return the database query with parameters used for Categories report: time span and order status.
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
     * Returns an array of ids of included categories, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_categories_array($query_args)
    {
    }
    /**
     * Returns the page of data according to page number and items per page.
     *
     * @param array   $data           Data to paginate.
     * @param integer $page_no        Page number.
     * @param integer $items_per_page Number of items per page.
     * @return array
     */
    protected function page_records($data, $page_no, $items_per_page)
    {
    }
    /**
     * Enriches the category data.
     *
     * @param array $categories_data Categories data.
     * @param array $query_args  Query parameters.
     */
    protected function include_extended_info(&$categories_data, $query_args)
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
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}