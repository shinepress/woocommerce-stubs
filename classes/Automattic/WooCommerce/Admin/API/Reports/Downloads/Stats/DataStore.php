<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Downloads\Stats;

/**
 * API\Reports\Downloads\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Downloads\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('download_count' => 'intval');
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'downloads_stats';
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'downloads_stats';
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
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