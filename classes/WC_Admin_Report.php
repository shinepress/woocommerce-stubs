<?php


/**
 * Admin Report.
 *
 * Extended by reports to show charts and stats in admin.
 *
 * @author      WooThemes
 * @category    Admin
 * @package     WooCommerce/Admin/Reports
 * @version     2.1.0
 */
class WC_Admin_Report
{
    /**
     * The chart interval.
     *
     * @var int
     */
    public $chart_interval;
    /**
     * Group by SQL query.
     *
     * @var string
     */
    public $group_by_query;
    /**
     * The bar width.
     *
     * @var int
     */
    public $barwidth;
    /**
     * Group chart item by day or month.
     *
     * @var string
     */
    public $chart_groupby;
    /**
     * The start date of the report.
     *
     * @var int timestamp
     */
    public $start_date;
    /**
     * The end date of the report.
     *
     * @var int timestamp
     */
    public $end_date;
    /**
     * Get report totals such as order totals and discount amounts.
     *
     * Data example:
     *
     * '_order_total' => array(
     *     'type'     => 'meta',
     *     'function' => 'SUM',
     *     'name'     => 'total_sales'
     * )
     *
     * @param  array $args
     * @return mixed depending on query_type
     */
    public function get_order_report_data($args = array())
    {
    }
    /**
     * Put data with post_date's into an array of times.
     *
     * @param  array  $data array of your data
     * @param  string $date_key key for the 'date' field. e.g. 'post_date'
     * @param  string $data_key key for the data you are charting
     * @param  int    $interval
     * @param  string $start_date
     * @param  string $group_by
     * @return array
     */
    public function prepare_chart_data($data, $date_key, $data_key, $interval, $start_date, $group_by)
    {
    }
    /**
     * Prepares a sparkline to show sales in the last X days.
     *
     * @param  int    $id ID of the product to show. Blank to get all orders.
     * @param  int    $days Days of stats to get.
     * @param  string $type Type of sparkline to get. Ignored if ID is not set.
     * @return string
     */
    public function sales_sparkline($id = '', $days = 7, $type = 'sales')
    {
    }
    /**
     * Get the current range and calculate the start and end dates.
     *
     * @param  string $current_range
     */
    public function calculate_current_range($current_range)
    {
    }
    /**
     * Return currency tooltip JS based on WooCommerce currency position settings.
     *
     * @return string
     */
    public function get_currency_tooltip()
    {
    }
    /**
     * Get the main chart.
     */
    public function get_main_chart()
    {
    }
    /**
     * Get the legend for the main chart sidebar.
     *
     * @return array
     */
    public function get_chart_legend()
    {
    }
    /**
     * Get chart widgets.
     *
     * @return array
     */
    public function get_chart_widgets()
    {
    }
    /**
     * Get an export link if needed.
     */
    public function get_export_button()
    {
    }
    /**
     * Output the report.
     */
    public function output_report()
    {
    }
    /**
     * Check nonce for current range.
     *
     * @since  3.0.4
     * @param  string $current_range Current range.
     */
    public function check_current_range_nonce($current_range)
    {
    }
}