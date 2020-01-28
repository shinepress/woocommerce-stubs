<?php


/**
 * Action Scheduler Abstract List Table class
 *
 * This abstract class enhances WP_List_Table making it ready to use.
 *
 * By extending this class we can focus on describing how our table looks like,
 * which columns needs to be shown, filter, ordered by and more and forget about the details.
 *
 * This class supports:
 *	- Bulk actions
 *	- Search
 *  - Sortable columns
 *  - Automatic translations of the columns
 *
 * @codeCoverageIgnore
 * @since  2.0.0
 */
abstract class ActionScheduler_Abstract_ListTable extends \WP_List_Table
{
    /**
     * The table name
     */
    protected $table_name;
    /**
     * Package name, used in translations
     */
    protected $package;
    /**
     * How many items do we render per page?
     */
    protected $items_per_page = 10;
    /**
     * Enables search in this table listing. If this array
     * is empty it means the listing is not searchable.
     */
    protected $search_by = array();
    /**
     * Columns to show in the table listing. It is a key => value pair. The
     * key must much the table column name and the value is the label, which is
     * automatically translated.
     */
    protected $columns = array();
    /**
     * Defines the row-actions. It expects an array where the key
     * is the column name and the value is an array of actions.
     *
     * The array of actions are key => value, where key is the method name
     * (with the prefix row_action_<key>) and the value is the label
     * and title.
     */
    protected $row_actions = array();
    /**
     * The Primary key of our table
     */
    protected $ID = 'ID';
    /**
     * Enables sorting, it expects an array
     * of columns (the column names are the values)
     */
    protected $sort_by = array();
    protected $filter_by = array();
    /**
     * @var array The status name => count combinations for this table's items. Used to display status filters.
     */
    protected $status_counts = array();
    /**
     * @var array Notices to display when loading the table. Array of arrays of form array( 'class' => {updated|error}, 'message' => 'This is the notice text display.' ).
     */
    protected $admin_notices = array();
    /**
     * @var string Localised string displayed in the <h1> element above the able.
     */
    protected $table_header;
    /**
     * Enables bulk actions. It must be an array where the key is the action name
     * and the value is the label (which is translated automatically). It is important
     * to notice that it will check that the method exists (`bulk_$name`) and will throw
     * an exception if it does not exists.
     *
     * This class will automatically check if the current request has a bulk action, will do the
     * validations and afterwards will execute the bulk method, with two arguments. The first argument
     * is the array with primary keys, the second argument is a string with a list of the primary keys,
     * escaped and ready to use (with `IN`).
     */
    protected $bulk_actions = array();
    /**
     * Makes translation easier, it basically just wraps
     * `_x` with some default (the package name)
     */
    protected function translate($text, $context = '')
    {
    }
    /**
     * Reads `$this->bulk_actions` and returns an array that WP_List_Table understands. It
     * also validates that the bulk method handler exists. It throws an exception because
     * this is a library meant for developers and missing a bulk method is a development-time error.
     */
    protected function get_bulk_actions()
    {
    }
    /**
     * Checks if the current request has a bulk action. If that is the case it will validate and will
     * execute the bulk method handler. Regardless if the action is valid or not it will redirect to
     * the previous page removing the current arguments that makes this request a bulk action.
     */
    protected function process_bulk_action()
    {
    }
    /**
     * Default code for deleting entries. We trust ids_sql because it is
     * validated already by process_bulk_action()
     */
    protected function bulk_delete(array $ids, $ids_sql)
    {
    }
    /**
     * Prepares the _column_headers property which is used by WP_Table_List at rendering.
     * It merges the columns and the sortable columns.
     */
    protected function prepare_column_headers()
    {
    }
    /**
     * Reads $this->sort_by and returns the columns name in a format that WP_Table_List
     * expects
     */
    public function get_sortable_columns()
    {
    }
    /**
     * Returns the columns names for rendering. It adds a checkbox for selecting everything
     * as the first column
     */
    public function get_columns()
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
     * Returns the number of items to offset/skip for this current view.
     *
     * @return int
     */
    protected function get_items_offset()
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
     * Prepares the ORDER BY sql statement. It uses `$this->sort_by` to know which
     * columns are sortable. This requests validates the orderby $_GET parameter is a valid
     * column and sortable. It will also use order (ASC|DESC) using DESC by default.
     */
    protected function get_items_query_order()
    {
    }
    /**
     * Return the sortable column specified for this request to order the results by, if any.
     *
     * @return string
     */
    protected function get_request_orderby()
    {
    }
    /**
     * Return the sortable column order specified for this request.
     *
     * @return string
     */
    protected function get_request_order()
    {
    }
    /**
     * Return the status filter for this request, if any.
     *
     * @return string
     */
    protected function get_request_status()
    {
    }
    /**
     * Return the search filter for this request, if any.
     *
     * @return string
     */
    protected function get_request_search_query()
    {
    }
    /**
     * Process and return the columns name. This is meant for using with SQL, this means it
     * always includes the primary key.
     *
     * @return array
     */
    protected function get_table_columns()
    {
    }
    /**
     * Check if the current request is doing a "full text" search. If that is the case
     * prepares the SQL to search texts using LIKE.
     *
     * If the current request does not have any search or if this list table does not support
     * that feature it will return an empty string.
     *
     * TODO:
     *   - Improve search doing LIKE by word rather than by phrases.
     *
     * @return string
     */
    protected function get_items_query_search()
    {
    }
    /**
     * Prepares the SQL to filter rows by the options defined at `$this->filter_by`. Before trusting
     * any data sent by the user it validates that it is a valid option.
     */
    protected function get_items_query_filters()
    {
    }
    /**
     * Prepares the data to feed WP_Table_List.
     *
     * This has the core for selecting, sorting and filting data. To keep the code simple
     * its logic is split among many methods (get_items_query_*).
     *
     * Beside populating the items this function will also count all the records that matches
     * the filtering criteria and will do fill the pagination variables.
     */
    public function prepare_items()
    {
    }
    public function extra_tablenav($which)
    {
    }
    /**
     * Set the data for displaying. It will attempt to unserialize (There is a chance that some columns
     * are serialized). This can be override in child classes for further data transformation.
     */
    protected function set_items(array $items)
    {
    }
    /**
     * Renders the checkbox for each row, this is the first column and it is named ID regardless
     * of how the primary key is named (to keep the code simpler). The bulk actions will do the proper
     * name transformation though using `$this->ID`.
     */
    public function column_cb($row)
    {
    }
    /**
     * Renders the row-actions.
     *
     * This method renders the action menu, it reads the definition from the $row_actions property,
     * and it checks that the row action method exists before rendering it.
     *
     * @param array $row     Row to render
     * @param $column_name   Current row
     * @return
     */
    protected function maybe_render_actions($row, $column_name)
    {
    }
    protected function process_row_actions()
    {
    }
    /**
     * Default column formatting, it will escape everything for security.
     */
    public function column_default($item, $column_name)
    {
    }
    /**
     * Display the table heading and search query, if any
     */
    protected function display_header()
    {
    }
    /**
     * Display the table heading and search query, if any
     */
    protected function display_admin_notices()
    {
    }
    /**
     * Prints the available statuses so the user can click to filter.
     */
    protected function display_filter_by_status()
    {
    }
    /**
     * Renders the table list, we override the original class to render the table inside a form
     * and to render any needed HTML (like the search box). By doing so the callee of a function can simple
     * forget about any extra HTML.
     */
    protected function display_table()
    {
    }
    /**
     * Render the list table page, including header, notices, status filters and table.
     */
    public function display_page()
    {
    }
    /**
     * Get the text to display in the search box on the list table.
     */
    protected function get_search_box_placeholder()
    {
    }
}