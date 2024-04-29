<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers;

/**
 * REST API Reports customers controller class.
 *
 * @internal
 * @extends GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
{
    /**
     * Exportable traits.
     */
    use \Automattic\WooCommerce\Admin\API\Reports\ExportableTraits;
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/customers';
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
     * Get one report.
     *
     * @param WP_REST_Request $request Request data.
     * @return array|WP_Error
     */
    public function get_item($request)
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
     * Prepare links for the request.
     *
     * @param array $object Object data.
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