<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Admin\API\Reports\SqlQuery: Common parent for manipulating SQL query clauses.
 */
class SqlQuery
{
    /**
     * List of SQL clauses.
     *
     * @var array
     */
    private $sql_clauses = array('select' => array(), 'from' => array(), 'left_join' => array(), 'join' => array(), 'right_join' => array(), 'where' => array(), 'where_time' => array(), 'group_by' => array(), 'having' => array(), 'limit' => array(), 'order_by' => array(), 'union' => array());
    /**
     * SQL clause merge filters.
     *
     * @var array
     */
    private $sql_filters = array('where' => array('where', 'where_time'), 'join' => array('right_join', 'join', 'left_join'));
    /**
     * Data store context used to pass to filters.
     *
     * @var string
     */
    protected $context;
    /**
     * Constructor.
     *
     * @param string $context Optional context passed to filters. Default empty string.
     */
    public function __construct($context = '')
    {
    }
    /**
     * Add a SQL clause to be included when get_data is called.
     *
     * @param string $type   Clause type.
     * @param string $clause SQL clause.
     */
    public function add_sql_clause($type, $clause)
    {
    }
    /**
     * Get SQL clause by type.
     *
     * @param string $type     Clause type.
     * @param string $handling Whether to filter the return value (filtered|unfiltered). Default unfiltered.
     *
     * @return string SQL clause.
     */
    protected function get_sql_clause($type, $handling = 'unfiltered')
    {
    }
    /**
     * Clear SQL clauses by type.
     *
     * @param string|array $types Clause type.
     */
    protected function clear_sql_clause($types)
    {
    }
    /**
     * Replace strings within SQL clauses by type.
     *
     * @param string $type    Clause type.
     * @param string $search  String to search for.
     * @param string $replace Replacement string.
     */
    protected function str_replace_clause($type, $search, $replace)
    {
    }
    /**
     * Get the full SQL statement.
     *
     * @return string
     */
    public function get_query_statement()
    {
    }
    /**
     * Reinitialize the clause array.
     */
    public function clear_all_clauses()
    {
    }
}