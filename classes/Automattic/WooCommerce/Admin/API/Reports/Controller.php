<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * REST API Reports controller class.
 *
 * @internal
 * @extends GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
{
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
     * Get the order number for an order. If no filter is present for `woocommerce_order_number`, we can just return the ID.
     * Returns the parent order number if the order is actually a refund.
     *
     * @param  int $order_id Order ID.
     * @return string|null The Order Number or null if the order doesn't exist.
     */
    protected function get_order_number($order_id)
    {
    }
    /**
     * Whether the order is valid.
     *
     * @param bool|WC_Order|WC_Order_Refund $order Order object.
     * @return bool True if the order is valid, false otherwise.
     */
    protected function is_valid_order($order)
    {
    }
    /**
     * Get the order total with the related currency formatting.
     * Returns the parent order total if the order is actually a refund.
     *
     * @param  int $order_id Order ID.
     * @return string|null The Order Number or null if the order doesn't exist.
     */
    protected function get_total_formatted($order_id)
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
     * Get order statuses without prefixes.
     * Includes unregistered statuses that have been marked "actionable".
     *
     * @internal
     * @return array
     */
    public static function get_order_statuses()
    {
    }
    /**
     * Get order statuses (and labels) without prefixes.
     *
     * @internal
     * @return array
     */
    public static function get_order_status_labels()
    {
    }
}