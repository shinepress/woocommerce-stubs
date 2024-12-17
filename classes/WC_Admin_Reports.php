<?php


/**
 * WC_Admin_Reports Class.
 */
class WC_Admin_Reports
{
    /**
     * Register the proper hook handlers.
     */
    public static function register_hook_handlers()
    {
    }
    /**
     * Get an instance of WC_Admin_Report.
     *
     * @return WC_Admin_Report
     */
    public static function get_report_instance()
    {
    }
    /**
     * Filter handler for replacing the data of the status widget on the Dashboard page.
     *
     * @param array $status_widget_reports The data to display in the status widget.
     */
    public static function replace_dashboard_status_widget_reports($status_widget_reports)
    {
    }
    /**
     * Handles output of the reports page in admin.
     */
    public static function output()
    {
    }
    /**
     * Returns the definitions for the reports to show in admin.
     *
     * @return array
     */
    public static function get_reports()
    {
    }
    /**
     * Get a report from our reports subfolder.
     *
     * @param string $name
     */
    public static function get_report($name)
    {
    }
}