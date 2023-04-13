<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats;

/**
 * API\Reports\Products\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Products\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'product_id' => 'intval', 'items_sold' => 'intval', 'net_revenue' => 'floatval', 'orders_count' => 'intval', 'products_count' => 'intval', 'variations_count' => 'intval');
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'products_stats';
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'products_stats';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Updates the database query with parameters used for Products Stats report: categories and order status.
     *
     * @param array $query_args       Query arguments supplied by the user.
     */
    protected function update_sql_query_params($query_args)
    {
    }
    /**
     * Returns the report data based on parameters supplied by the user.
     *
     * @since 3.5.0
     * @param array $query_args  Query parameters.
     * @return stdClass|WP_Error Data.
     */
    public function get_data($query_args)
    {
    }
    /**
     * Normalizes order_by clause to match to SQL query.
     *
     * @param string $order_by Order by option requeste by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}