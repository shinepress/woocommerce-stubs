<?php


class WC_Admin_Log_Table_List extends \WP_List_Table
{
    /**
     * Initialize the log table list.
     */
    public function __construct()
    {
    }
    /**
     * Display level dropdown
     *
     * @global wpdb $wpdb
     */
    public function level_dropdown()
    {
    }
    /**
     * Get list columns.
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * Column cb.
     *
     * @param  array $log
     * @return string
     */
    public function column_cb($log)
    {
    }
    /**
     * Timestamp column.
     *
     * @param  array $log
     * @return string
     */
    public function column_timestamp($log)
    {
    }
    /**
     * Level column.
     *
     * @param  array $log
     * @return string
     */
    public function column_level($log)
    {
    }
    /**
     * Message column.
     *
     * @param  array $log
     * @return string
     */
    public function column_message($log)
    {
    }
    /**
     * Source column.
     *
     * @param  array $log
     * @return string
     */
    public function column_source($log)
    {
    }
    /**
     * Get bulk actions.
     *
     * @return array
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Extra controls to be displayed between bulk actions and pagination.
     *
     * @param string $which
     */
    protected function extra_tablenav($which)
    {
    }
    /**
     * Get a list of sortable columns.
     *
     * @return array
     */
    protected function get_sortable_columns()
    {
    }
    /**
     * Display source dropdown
     *
     * @global wpdb $wpdb
     */
    protected function source_dropdown()
    {
    }
    /**
     * Prepare table list items.
     *
     * @global wpdb $wpdb
     */
    public function prepare_items()
    {
    }
    /**
     * Get prepared LIMIT clause for items query
     *
     * @global wpdb $wpdb
     *
     * @return string Prepared LIMIT clause for items query.
     */
    protected function get_items_query_limit()
    {
    }
    /**
     * Get prepared OFFSET clause for items query
     *
     * @global wpdb $wpdb
     *
     * @return string Prepared OFFSET clause for items query.
     */
    protected function get_items_query_offset()
    {
    }
    /**
     * Get prepared ORDER BY clause for items query
     *
     * @return string Prepared ORDER BY clause for items query.
     */
    protected function get_items_query_order()
    {
    }
    /**
     * Get prepared WHERE clause for items query
     *
     * @global wpdb $wpdb
     *
     * @return string Prepared WHERE clause for items query.
     */
    protected function get_items_query_where()
    {
    }
    /**
     * Set _column_headers property for table list
     */
    protected function prepare_column_headers()
    {
    }
}