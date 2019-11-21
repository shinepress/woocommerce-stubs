<?php


/**
 * WC_Report_Customer_List.
 *
 * @author      WooThemes
 * @category    Admin
 * @package     WooCommerce/Admin/Reports
 * @version     2.1.0
 */
class WC_Report_Customer_List extends \WP_List_Table
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * No items found text.
     */
    public function no_items()
    {
    }
    /**
     * Output the report.
     */
    public function output_report()
    {
    }
    /**
     * Get column value.
     *
     * @param WP_User $user
     * @param string  $column_name
     * @return string
     */
    public function column_default($user, $column_name)
    {
    }
    /**
     * Get columns.
     *
     * @return array
     */
    public function get_columns()
    {
    }
    /**
     * Order users by name.
     *
     * @param WP_User_Query $query
     *
     * @return WP_User_Query
     */
    public function order_by_last_name($query)
    {
    }
    /**
     * Prepare customer list items.
     */
    public function prepare_items()
    {
    }
}