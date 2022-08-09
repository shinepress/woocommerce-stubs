<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Coupons\Stats;

/**
 * API\Reports\Coupons\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Coupons\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('date_start' => 'strval', 'date_end' => 'strval', 'date_start_gmt' => 'strval', 'date_end_gmt' => 'strval', 'amount' => 'floatval', 'coupons_count' => 'intval', 'orders_count' => 'intval');
    /**
     * SQL columns to select in the db query.
     *
     * @var array
     */
    protected $report_columns;
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'coupons_stats';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'coupons_stats';
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
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}