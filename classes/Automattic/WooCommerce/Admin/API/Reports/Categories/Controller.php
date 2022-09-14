<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Categories;

/**
 * REST API Reports categories controller class.
 *
 * @internal
 * @extends \Automattic\WooCommerce\Admin\API\Reports\Controller
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\Controller implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
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
    protected $rest_base = 'reports/categories';
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
     * @param stdClass        $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
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
     * Get the Report's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
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
    /**
     * Get the column names for export.
     *
     * @return array Key value pair of Column ID => Label.
     */
    public function get_export_columns()
    {
    }
    /**
     * Get the column values for export.
     *
     * @param array $item Single report item/row.
     * @return array Key value pair of Column ID => Row Value.
     */
    public function prepare_item_for_export($item)
    {
    }
}