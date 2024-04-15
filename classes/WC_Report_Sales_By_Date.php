<?php


/**
 * WC_Report_Sales_By_Date
 */
class WC_Report_Sales_By_Date extends \WC_Admin_Report
{
    /**
     * Chart colors.
     *
     * @var array
     */
    public $chart_colours = array();
    /**
     * The report data.
     *
     * @var stdClass
     */
    private $report_data;
    /**
     * Get report data.
     *
     * @return stdClass
     */
    public function get_report_data()
    {
    }
    /**
     * Get all data needed for this report and store in the class.
     */
    private function query_report_data()
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
     * Output the report.
     */
    public function output_report()
    {
    }
    /**
     * Output an export link.
     */
    public function get_export_button()
    {
    }
    /**
     * Round our totals correctly.
     *
     * @param array|string $amount Chart total.
     *
     * @return array|string
     */
    private function round_chart_totals($amount)
    {
    }
    /**
     * Get the main chart.
     */
    public function get_main_chart()
    {
    }
}