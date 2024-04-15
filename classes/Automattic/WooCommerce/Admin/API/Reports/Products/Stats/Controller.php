<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Products\Stats;

/**
 * REST API Reports products stats controller class.
 *
 * @internal
 * @extends GenericStatsController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericStatsController
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/products/stats';
    /**
     * Mapping between external parameter name and name used in query class.
     *
     * @var array
     */
    protected $param_mapping = array('categories' => 'category_includes', 'products' => 'product_includes', 'variations' => 'variation_includes');
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get all reports.
     *
     * @param WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_items($request)
    {
    }
    /**
     * Prepare a report object for serialization.
     *
     * @param array           $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
    /**
     * Get the Report's item properties schema.
     * Will be used by `get_item_schema` as `totals` and `subtotals`.
     *
     * @return array
     */
    protected function get_item_properties_schema()
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
     * Set the default results to 0 if API returns an empty array
     *
     * @internal
     * @param Mixed $results Report data.
     * @return object
     */
    public function set_default_report_data($results)
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