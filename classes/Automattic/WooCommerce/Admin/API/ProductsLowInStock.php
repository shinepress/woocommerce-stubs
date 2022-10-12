<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * ProductsLowInStock controller.
 *
 * @internal
 * @extends WC_REST_Products_Controller
 */
final class ProductsLowInStock extends \WC_REST_Products_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Get low in stock products.
     *
     * @param WP_REST_Request $request request object.
     *
     * @return WP_REST_Response|WP_ERROR
     */
    public function get_items($request)
    {
    }
    /**
     * Set the last order date for each data.
     *
     * @param array $results query result from get_low_in_stock_products.
     *
     * @return mixed
     */
    protected function set_last_order_date($results = array())
    {
    }
    /**
     * Get low in stock products data.
     *
     * @param int    $page current page.
     * @param int    $per_page items per page.
     * @param string $status post status.
     *
     * @return array
     */
    protected function get_low_in_stock_products($page = 1, $per_page = 1, $status = 'publish')
    {
    }
    /**
     * Check to see if store is using sitewide threshold only. Meaning that it does not have any custom
     * stock threshold for a product.
     *
     * @return bool
     */
    protected function is_using_sitewide_stock_threshold_only()
    {
    }
    /**
     * Transform post object to expected API response.
     *
     * @param object $query_result a row of query result from get_low_in_stock_products().
     *
     * @return array
     */
    protected function transform_post_to_api_response($query_result)
    {
    }
    /**
     * Generate a query.
     *
     * @param bool $siteside_only generates a query for sitewide low stock threshold only query.
     *
     * @return string
     */
    protected function get_query($siteside_only = false)
    {
    }
    /**
     * Get the query params for collections of attachments.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}