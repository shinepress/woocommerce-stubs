<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Admin\API\Reports\DataStore: Common parent for custom report data stores.
 */
class DataStore extends \Automattic\WooCommerce\Admin\API\Reports\SqlQuery
{
    /**
     * Cache group for the reports.
     *
     * @var string
     */
    protected $cache_group = 'reports';
    /**
     * Time out for the cache.
     *
     * @var int
     */
    protected $cache_timeout = 3600;
    /**
     * Table used as a data store for this report.
     *
     * @var string
     */
    protected static $table_name = '';
    /**
     * Mapping columns to data type to return correct response types.
     *
     * @var array
     */
    protected $column_types = array();
    // @todo This does not really belong here, maybe factor out the comparison as separate class?
    /**
     * Order by property, used in the cmp function.
     *
     * @var string
     */
    private $order_by = '';
    /**
     * Order property, used in the cmp function.
     *
     * @var string
     */
    private $order = '';
    /**
     * Query limit parameters.
     *
     * @var array
     */
    private $limit_parameters = array();
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context = 'reports';
    /**
     * Subquery object for query nesting.
     *
     * @var SqlQuery
     */
    protected $subquery;
    /**
     * Totals query object.
     *
     * @var SqlQuery
     */
    protected $total_query;
    /**
     * Intervals query object.
     *
     * @var SqlQuery
     */
    protected $interval_query;
    /**
     * Class constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get table name from database class.
     */
    public static function get_db_table_name()
    {
    }
    /**
     * Set table name from database class.
     */
    protected static function set_db_table_name()
    {
    }
    /**
     * Whether or not the report should use the caching layer.
     *
     * Provides an opportunity for plugins to prevent reports from using cache.
     *
     * @return boolean Whether or not to utilize caching.
     */
    protected function should_use_cache()
    {
    }
    /**
     * Returns string to be used as cache key for the data.
     *
     * @param array $params Query parameters.
     * @return string
     */
    protected function get_cache_key($params)
    {
    }
    /**
     * Wrapper around Cache::get().
     *
     * @param string $cache_key Cache key.
     * @return mixed
     */
    protected function get_cached_data($cache_key)
    {
    }
    /**
     * Wrapper around Cache::set().
     *
     * @param string $cache_key Cache key.
     * @param mixed  $value     New value.
     * @return bool
     */
    protected function set_cached_data($cache_key, $value)
    {
    }
    /**
     * Compares two report data objects by pre-defined object property and ASC/DESC ordering.
     *
     * @param stdClass $a Object a.
     * @param stdClass $b Object b.
     * @return string
     */
    private function interval_cmp($a, $b)
    {
    }
    /**
     * Sorts intervals according to user's request.
     *
     * They are pre-sorted in SQL, but after adding gaps, they need to be sorted including the added ones.
     *
     * @param stdClass $data      Data object, must contain an array under $data->intervals.
     * @param string   $sort_by   Ordering property.
     * @param string   $direction DESC/ASC.
     */
    protected function sort_intervals(&$data, $sort_by, $direction)
    {
    }
    /**
     * Sorts array of arrays based on subarray key $sort_by.
     *
     * @param array  $arr       Array to sort.
     * @param string $sort_by   Ordering property.
     * @param string $direction DESC/ASC.
     */
    protected function sort_array(&$arr, $sort_by, $direction)
    {
    }
    /**
     * Fills in interval gaps from DB with 0-filled objects.
     *
     * @param array    $db_intervals   Array of all intervals present in the db.
     * @param DateTime $start_datetime Start date.
     * @param DateTime $end_datetime   End date.
     * @param string   $time_interval  Time interval, e.g. day, week, month.
     * @param stdClass $data           Data with SQL extracted intervals.
     * @return stdClass
     */
    protected function fill_in_missing_intervals($db_intervals, $start_datetime, $end_datetime, $time_interval, &$data)
    {
    }
    /**
     * Converts input datetime parameters to local timezone. If there are no inputs from the user in query_args,
     * uses default from $defaults.
     *
     * @param array $query_args Array of query arguments.
     * @param array $defaults Array of default values.
     */
    protected function normalize_timezones(&$query_args, $defaults)
    {
    }
    /**
     * Removes extra records from intervals so that only requested number of records get returned.
     *
     * @param stdClass $data           Data from whose intervals the records get removed.
     * @param int      $page_no        Offset requested by the user.
     * @param int      $items_per_page Number of records requested by the user.
     * @param int      $db_interval_count Database interval count.
     * @param int      $expected_interval_count Expected interval count on the output.
     * @param string   $order_by Order by field.
     * @param string   $order ASC or DESC.
     */
    protected function remove_extra_records(&$data, $page_no, $items_per_page, $db_interval_count, $expected_interval_count, $order_by, $order)
    {
    }
    /**
     * Returns expected number of items on the page in case of date ordering.
     *
     * @param int $expected_interval_count Expected number of intervals in total.
     * @param int $items_per_page          Number of items per page.
     * @param int $page_no                 Page number.
     *
     * @return float|int
     */
    protected function expected_intervals_on_page($expected_interval_count, $items_per_page, $page_no)
    {
    }
    /**
     * Returns true if there are any intervals that need to be filled in the response.
     *
     * @param int    $expected_interval_count Expected number of intervals in total.
     * @param int    $db_records              Total number of records for given period in the database.
     * @param int    $items_per_page          Number of items per page.
     * @param int    $page_no                 Page number.
     * @param string $order                   asc or desc.
     * @param string $order_by                Column by which the result will be sorted.
     * @param int    $intervals_count         Number of records for given (possibly shortened) time interval.
     *
     * @return bool
     */
    protected function intervals_missing($expected_interval_count, $db_records, $items_per_page, $page_no, $order, $order_by, $intervals_count)
    {
    }
    /**
     * Updates the LIMIT query part for Intervals query of the report.
     *
     * If there are less records in the database than time intervals, then we need to remap offset in SQL query
     * to fetch correct records.
     *
     * @param array  $query_args Query arguments.
     * @param int    $db_interval_count Database interval count.
     * @param int    $expected_interval_count Expected interval count on the output.
     * @param string $table_name Name of the db table relevant for the date constraint.
     */
    protected function update_intervals_sql_params(&$query_args, $db_interval_count, $expected_interval_count, $table_name)
    {
    }
    /**
     * Casts strings returned from the database to appropriate data types for output.
     *
     * @param array $array Associative array of values extracted from the database.
     * @return array|WP_Error
     */
    protected function cast_numbers($array)
    {
    }
    /**
     * Returns a list of columns selected by the query_args formatted as a comma separated string.
     *
     * @param array $query_args User-supplied options.
     * @return string
     */
    protected function selected_columns($query_args)
    {
    }
    /**
     * Get the excluded order statuses used when calculating reports.
     *
     * @return array
     */
    protected static function get_excluded_report_order_statuses()
    {
    }
    /**
     * Maps order status provided by the user to the one used in the database.
     *
     * @param string $status Order status.
     * @return string
     */
    protected static function normalize_order_status($status)
    {
    }
    /**
     * Normalizes order_by clause to match to SQL query.
     *
     * @param string $order_by Order by option requested by user.
     * @return string
     */
    protected function normalize_order_by($order_by)
    {
    }
    /**
     * Updates start and end dates for intervals so that they represent intervals' borders, not times when data in db were recorded.
     *
     * E.g. if there are db records for only Tuesday and Thursday this week, the actual week interval is [Mon, Sun], not [Tue, Thu].
     *
     * @param DateTime $start_datetime Start date.
     * @param DateTime $end_datetime End date.
     * @param string   $time_interval Time interval, e.g. day, week, month.
     * @param array    $intervals Array of intervals extracted from SQL db.
     */
    protected function update_interval_boundary_dates($start_datetime, $end_datetime, $time_interval, &$intervals)
    {
    }
    /**
     * Change structure of intervals to form a correct response.
     *
     * Also converts local datetimes to GMT and adds them to the intervals.
     *
     * @param array $intervals Time interval, e.g. day, week, month.
     */
    protected function create_interval_subtotals(&$intervals)
    {
    }
    /**
     * Fills WHERE clause of SQL request with date-related constraints.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     */
    protected function add_time_period_sql_params($query_args, $table_name)
    {
    }
    /**
     * Fills LIMIT clause of SQL request based on user supplied parameters.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_limit_sql_params($query_args)
    {
    }
    /**
     * Fills LIMIT parameters of SQL request based on user supplied parameters.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_limit_params($query_args = array())
    {
    }
    /**
     * Generates a virtual table given a list of IDs.
     *
     * @param array $ids          Array of IDs.
     * @param array $id_field     Name of the ID field.
     * @param array $other_values Other values that must be contained in the virtual table.
     * @return array
     */
    protected function get_ids_table($ids, $id_field, $other_values = array())
    {
    }
    /**
     * Returns a comma separated list of the fields in the `query_args`, if there aren't, returns `report_columns` keys.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_fields($query_args)
    {
    }
    /**
     * Returns a comma separated list of the field names prepared to be used for a selection after a join with `default_results`.
     *
     * @param array $fields                 Array of fields name.
     * @param array $default_results_fields Fields to load from `default_results` table.
     * @param array $outer_selections       Array of fields that are not selected in the inner query.
     * @return string
     */
    protected function format_join_selections($fields, $default_results_fields, $outer_selections = array())
    {
    }
    /**
     * Fills ORDER BY clause of SQL request based on user supplied parameters.
     *
     * @param array $query_args Parameters supplied by the user.
     */
    protected function add_order_by_sql_params($query_args)
    {
    }
    /**
     * Fills FROM and WHERE clauses of SQL request for 'Intervals' section of data response based on user supplied parameters.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Name of the db table relevant for the date constraint.
     */
    protected function add_intervals_sql_params($query_args, $table_name)
    {
    }
    /**
     * Get join and where clauses for refunds based on user supplied parameters.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_refund_subquery($query_args)
    {
    }
    /**
     * Returns an array of products belonging to given categories.
     *
     * @param array $categories List of categories IDs.
     * @return array|stdClass
     */
    protected function get_products_by_cat_ids($categories)
    {
    }
    /**
     * Get WHERE filter by object ids subquery.
     *
     * @param string $select_table Select table name.
     * @param string $select_field Select table object ID field name.
     * @param string $filter_table Lookup table name.
     * @param string $filter_field Lookup table object ID field name.
     * @param string $compare      Comparison string (IN|NOT IN).
     * @param string $id_list      Comma separated ID list.
     *
     * @return string
     */
    protected function get_object_where_filter($select_table, $select_field, $filter_table, $filter_field, $compare, $id_list)
    {
    }
    /**
     * Returns an array of ids of allowed products, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_included_products_array($query_args)
    {
    }
    /**
     * Returns comma separated ids of allowed products, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_products($query_args)
    {
    }
    /**
     * Returns comma separated ids of allowed variations, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_variations($query_args)
    {
    }
    /**
     * Returns comma separated ids of excluded variations, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_variations($query_args)
    {
    }
    /**
     * Returns an array of ids of disallowed products, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return array
     */
    protected function get_excluded_products_array($query_args)
    {
    }
    /**
     * Returns comma separated ids of excluded products, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_products($query_args)
    {
    }
    /**
     * Returns comma separated ids of included categories, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_categories($query_args)
    {
    }
    /**
     * Returns comma separated ids of included coupons, based on query arguments from the user.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $field      Field name in the parameter list.
     * @return string
     */
    protected function get_included_coupons($query_args, $field = 'coupon_includes')
    {
    }
    /**
     * Returns comma separated ids of excluded coupons, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_coupons($query_args)
    {
    }
    /**
     * Returns comma separated ids of included orders, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_orders($query_args)
    {
    }
    /**
     * Returns comma separated ids of excluded orders, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_orders($query_args)
    {
    }
    /**
     * Returns comma separated ids of included users, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_included_users($query_args)
    {
    }
    /**
     * Returns comma separated ids of excluded users, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_excluded_users($query_args)
    {
    }
    /**
     * Returns order status subquery to be used in WHERE SQL query, based on query arguments from the user.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $operator   AND or OR, based on match query argument.
     * @return string
     */
    protected function get_status_subquery($query_args, $operator = 'AND')
    {
    }
    /**
     * Add order status SQL clauses if included in query.
     *
     * @param array    $query_args Parameters supplied by the user.
     * @param string   $table_name Database table name.
     * @param SqlQuery $sql_query  Query object.
     */
    protected function add_order_status_clause($query_args, $table_name, &$sql_query)
    {
    }
    /**
     * Add order by SQL clause if included in query.
     *
     * @param array    $query_args Parameters supplied by the user.
     * @param SqlQuery $sql_query  Query object.
     * @return string Order by clause.
     */
    protected function add_order_by_clause($query_args, &$sql_query)
    {
    }
    /**
     * Add order by order SQL clause.
     *
     * @param array    $query_args Parameters supplied by the user.
     * @param SqlQuery $sql_query  Query object.
     */
    protected function add_orderby_order_clause($query_args, &$sql_query)
    {
    }
    /**
     * Returns customer subquery to be used in WHERE SQL query, based on query arguments from the user.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_customer_subquery($query_args)
    {
    }
    /**
     * Returns product attribute subquery elements used in JOIN and WHERE clauses,
     * based on query arguments from the user.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $table_name Database table name.
     * @return array
     */
    protected function get_attribute_subqueries($query_args, $table_name)
    {
    }
    /**
     * Returns logic operator for WHERE subclause based on 'match' query argument.
     *
     * @param array $query_args Parameters supplied by the user.
     * @return string
     */
    protected function get_match_operator($query_args)
    {
    }
    /**
     * Returns filtered comma separated ids, based on query arguments from the user.
     *
     * @param array  $query_args Parameters supplied by the user.
     * @param string $field      Query field to filter.
     * @param string $separator  Field separator.
     * @return string
     */
    protected function get_filtered_ids($query_args, $field, $separator = ',')
    {
    }
    /**
     * Assign report columns once full table name has been assigned.
     */
    protected function assign_report_columns()
    {
    }
}