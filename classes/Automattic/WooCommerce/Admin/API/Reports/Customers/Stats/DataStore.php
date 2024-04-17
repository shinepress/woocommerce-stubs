<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers\Stats;

/**
 * API\Reports\Customers\Stats\DataStore.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\Customers\DataStore implements \Automattic\WooCommerce\Admin\API\Reports\DataStoreInterface
{
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array('customers_count' => 'intval', 'avg_orders_count' => 'floatval', 'avg_total_spend' => 'floatval', 'avg_avg_order_value' => 'floatval');
    /**
     * Cache identifier.
     *
     * @var string
     */
    protected $cache_key = 'customers_stats';
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'customers_stats';
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
}