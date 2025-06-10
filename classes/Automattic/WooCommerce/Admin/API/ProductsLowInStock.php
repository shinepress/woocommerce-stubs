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
     * Return # of low in stock count.
     *
     * @param WP_REST_Request $request request object.
     *
     * @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function get_low_in_stock_count($request)
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
    protected function get_low_in_stock_products($page = 1, $per_page = 1, $status = \Automattic\WooCommerce\Enums\ProductStatus::PUBLISH)
    {
    }
    /**
     * Get the count of low in stock products.
     *
     * @param bool   $sidewide_stock_threshold_only Boolean to check if the store is using sitewide stock threshold only.
     * @param string $status Post status.
     * @param int    $low_stock_threshold Low stock threshold.
     *
     * @return int
     */
    protected function get_count($sidewide_stock_threshold_only, $status, $low_stock_threshold)
    {
    }
    /**
     * Check to see if store is using sitewide threshold only. Meaning that it does not have any custom
     * stock threshold for a product.
     *
     * @param int|null $low_stock_threshold Low stock threshold.
     * @return bool
     */
    protected function is_using_sitewide_stock_threshold_only($low_stock_threshold = null)
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
     * Return a query string for low in stock products.
     * The query string includes the following replacement strings:
     * - :selects
     * - :postmeta_join
     * - :postmeta_wheres
     * - :orderAndLimit
     *
     * @param array $replacements  of replacement strings.
     *
     * @return string
     */
    private function get_base_query($replacements = array())
    {
    }
    /**
     * Add sitewide stock query string to base query string.
     *
     * @param string $query Base query string.
     *
     * @return string
     */
    private function add_sitewide_stock_query_str($query)
    {
    }
    /**
     * Get a query string for products with a custom stock threshold.
     *
     * @return string
     */
    private function get_products_with_custom_stock_threshold_count_query_str()
    {
    }
    /**
     * Get a query string for products without a custom stock threshold.
     *
     * @return string
     */
    private function get_products_without_custom_stock_threshold_count_query_str()
    {
    }
    /**
     * Generate a query.
     *
     * @param bool $sitewide_only generates a query for sitewide low stock threshold only query.
     *
     * @return string
     */
    protected function get_query($sitewide_only = false)
    {
    }
    /**
     * Generate a count query.
     *
     * @param bool $sitewide_only generates a query for sitewide low stock threshold only query.
     *
     * @return string
     */
    protected function get_count_query($sitewide_only = false)
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
    /**
     * Get the query params for collections for /count-low-in-stock endpoint.
     *
     * @return array
     */
    public function get_low_in_stock_count_params()
    {
    }
    /**
     * Get the schema for /count-low-in-stock response.
     *
     * @return array
     */
    public function get_low_in_stock_count_schema()
    {
    }
}