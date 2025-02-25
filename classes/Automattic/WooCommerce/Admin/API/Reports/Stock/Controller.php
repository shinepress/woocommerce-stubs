<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Stock;

/**
 * REST API Reports stock controller class.
 *
 * @internal
 * @extends GenericController
 */
class Controller extends \Automattic\WooCommerce\Admin\API\Reports\GenericController implements \Automattic\WooCommerce\Admin\API\Reports\ExportableInterface
{
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'reports/stock';
    /**
     * Registered stock status options.
     *
     * @var array
     */
    protected $status_options;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Maps query arguments from the REST request.
     *
     * @param  WP_REST_Request $request Request array.
     * @return array
     */
    protected function prepare_reports_query($request)
    {
    }
    /**
     * Query products.
     *
     * @param  array $query_args Query args.
     * @return array
     */
    protected function get_products($query_args)
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
     * Add in conditional search filters for products.
     *
     * @internal
     * @param string $where Where clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_filter($where, $wp_query)
    {
    }
    /**
     * Join posts meta tables when product search or low stock query is present.
     *
     * @internal
     * @param string $join Join clause used to search posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_join($join, $wp_query)
    {
    }
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @internal
     * @param string $sql SQL join.
     * @return string
     */
    protected static function append_product_sorting_table_join($sql)
    {
    }
    /**
     * Group by post ID to prevent duplicates.
     *
     * @internal
     * @param string $groupby Group by clause used to organize posts.
     * @param object $wp_query WP_Query object.
     * @return string
     */
    public static function add_wp_query_group_by($groupby, $wp_query)
    {
    }
    /**
     * Custom orderby clauses using the lookup tables.
     *
     * @internal
     * @param array  $args Query args.
     * @param object $wp_query WP_Query object.
     * @return array
     */
    public static function add_wp_query_orderby($args, $wp_query)
    {
    }
    /**
     * Prepare a report data item for serialization.
     *
     * @param  WC_Product      $product Report data item as returned from Data Store.
     * @param  WP_REST_Request $request Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($product, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param  WC_Product $product Object data.
     * @return array
     */
    protected function prepare_links($product)
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