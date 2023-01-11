<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Downloads;

/**
 * API\Reports\Downloads\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Table used to get the data.
     *
     * @var string
     */
    protected static $table_name = 'wc_download_log';
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'downloads';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array(
        'id' => 'intval',
        'date' => 'strval',
        'date_gmt' => 'strval',
        'download_id' => 'strval',
        // String because this can sometimes be a hash.
        'file_name' => 'strval',
        'product_id' => 'intval',
        'order_id' => 'intval',
        'user_id' => 'intval',
        'ip_address' => 'strval',
    );
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'downloads';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
    /**
     * Updates the database query with parameters used for downloads report.
     *
     * @param array $query_args Query arguments supplied by the user.
     */
    protected function add_sql_query_params($query_args)
    {
    }
    /**
     * Returns comma separated ids of included ip address, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_ip_addresses($query_args)
    {
    }
    /**
     * Returns comma separated ids of excluded ip address, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_ip_addresses($query_args)
    {
    }
    /**
     * Returns filtered comma separated ids, based on query arguments from the user.
     *
     * @param array  $query_args  Parameters supplied by the user.
     * @param string $field       Query field to filter.
     * @return string
     */
    protected function get_filtered_ip_addresses($query_args, $field)
    {
    }
    /**
     * Returns comma separated ids of included customers, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_customers($query_args)
    {
    }
    /**
     * Returns comma separated ids of excluded customers, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_customers($query_args)
    {
    }
    /**
     * Gets WHERE time clause of SQL request with date-related constraints.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     * @return string
     */
    protected function add_time_period_sql_params($query_args, $table_name)
    {
    }
    /**
     * Fills ORDER BY clause of SQL request based on user supplied parameters.
     *
     * @param array $query_args Parameters supplied by the user.
     */
    protected function add_order_by($query_args)
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
     * Initialize query objects.
     */
    protected function initialize_queries()
    {
    }
}