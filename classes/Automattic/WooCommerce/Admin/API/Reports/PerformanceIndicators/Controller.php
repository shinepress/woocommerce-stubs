<?php

namespace Automattic\WooCommerce\Admin\API\Reports\PerformanceIndicators;

/**
 * REST API Reports Performance indicators controller class.
 *
 * @internal
 * @extends WC_REST_Reports_Controller
 */
class Controller extends \WC_REST_Reports_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/performance-indicators';
    /**
     * Contains a list of endpoints by report slug.
     *
     * @var array
     */
    protected $endpoints = array();
    /**
     * Contains a list of active Jetpack module slugs.
     *
     * @var array
     */
    protected $active_jetpack_modules = null;
    /**
     * Contains a list of allowed stats.
     *
     * @var array
     */
    protected $allowed_stats = array();
    /**
     * Contains a list of stat labels.
     *
     * @var array
     */
    protected $labels = array();
    /**
     * Contains a list of endpoints by url.
     *
     * @var array
     */
    protected $urls = array();
    /**
     * Contains a cache of retrieved stats data, grouped by report slug.
     *
     * @var array
     */
    protected $stats_data = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Register the routes for reports.
     */
    public function register_routes()
    {
    }
    /**
     * Maps query arguments from the REST request.
     *
     * @param array $request Request array.
     * @return array
     */
    protected function prepare_reports_query($request)
    {
    }
    /**
     * Get analytics report data and endpoints.
     */
    private function get_analytics_report_data()
    {
    }
    /**
     * Get active Jetpack modules.
     *
     * @return array List of active Jetpack module slugs.
     */
    private function get_active_jetpack_modules()
    {
    }
    /**
     * Set active Jetpack modules.
     *
     * @internal
     * @param array $modules List of active Jetpack module slugs.
     */
    public function set_active_jetpack_modules($modules)
    {
    }
    /**
     * Get active Jetpack modules and endpoints.
     */
    private function get_jetpack_modules_data()
    {
    }
    /**
     * Get information such as allowed stats, stat labels, and endpoint data from stats reports.
     *
     * @return WP_Error|True
     */
    private function get_indicator_data()
    {
    }
    /**
     * Returns a list of allowed performance indicators.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_allowed_items($request)
    {
    }
    /**
     * Sorts the list of stats. Sorted by custom arrangement.
     *
     * @internal
     * @see https://github.com/woocommerce/woocommerce-admin/issues/1282
     * @param object $a First item.
     * @param object $b Second item.
     * @return order
     */
    public function sort($a, $b)
    {
    }
    /**
     * Get report stats data, avoiding duplicate requests for stats that use the same endpoint.
     *
     * @param string $report Report slug to request data for.
     * @param array  $query_args Report query args.
     * @return WP_REST_Response|WP_Error Report stats data.
     */
    private function get_stats_data($report, $query_args)
    {
    }
    /**
     * Get all reports.
     *
     * @param  WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param stdClass        $stat_data    Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($stat_data, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param \Automattic\WooCommerce\Admin\API\Reports\Query $object Object data.
     * @return array
     */
    protected function prepare_links($object)
    {
    }
    /**
     * Returns the endpoint part of a stat request (prefix) and the actual stat total we want.
     * To allow extensions to namespace (example: fue/emails/sent), we break on the last forward slash.
     *
     * @param string $full_stat A stat request string like orders/avg_order_value or fue/emails/sent.
     * @return array Containing the prefix (endpoint) and suffix (stat).
     */
    private function get_stats_parts($full_stat)
    {
    }
    /**
     * Format the data returned from the API for given stats.
     *
     * @param array  $data Data from external endpoint.
     * @param string $stat Name of the stat.
     * @param string $report Name of the report.
     * @param string $chart Name of the chart.
     * @param array  $query_args Query args.
     * @return mixed
     */
    public function format_data_value($data, $stat, $report, $chart, $query_args)
    {
    }
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Get schema for the list of allowed performance indicators.
     *
     * @return array $schema
     */
    public function get_public_allowed_item_schema()
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}