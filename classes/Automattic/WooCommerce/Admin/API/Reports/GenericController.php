<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * WC REST API Reports controller extended
 * to be shared as a generic base for all Analytics controllers.
 *
 * @internal
 * @extends WC_REST_Reports_Controller
 */
abstract class GenericController extends \WC_REST_Reports_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Add pagination headers and links.
     *
     * @param WP_REST_Request        $request   Request data.
     * @param WP_REST_Response|array $response  Response data.
     * @param int                    $total     Total results.
     * @param int                    $page      Current page.
     * @param int                    $max_pages Total amount of pages.
     * @return WP_REST_Response
     */
    public function add_pagination_headers($request, $response, int $total, int $page, int $max_pages)
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
     * Prepare a report object for serialization.
     *
     * @param array           $report  Report data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($report, $request)
    {
    }
}