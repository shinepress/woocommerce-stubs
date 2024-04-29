<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * Product Query filters class.
 */
class ProductQueryFilters
{
    /**
     * Get filtered min price for current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return object
     */
    public function get_filtered_price($request)
    {
    }
    /**
     * Get stock status counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array status=>count pairs.
     */
    public function get_stock_status_counts($request)
    {
    }
    /**
     * Generate calculate query by stock status.
     *
     * @param string $status status to calculate.
     * @param string $product_query_sql product query for current filter state.
     * @param array  $stock_status_options available stock status options.
     *
     * @return false|string
     */
    private function generate_stock_status_count_query($status, $product_query_sql, $stock_status_options)
    {
    }
    /**
     * Get terms list for a given taxonomy.
     *
     * @param string $taxonomy Taxonomy name.
     *
     * @return array
     */
    public function get_terms_list(string $taxonomy)
    {
    }
    /**
     * Get the empty terms list for a given taxonomy.
     *
     * @param string $taxonomy Taxonomy name.
     *
     * @return array
     */
    public function get_empty_terms_list(string $taxonomy)
    {
    }
    /**
     * Get attribute and meta counts.
     *
     * @param WP_REST_Request $request Request data.
     * @param string          $filtered_attribute The attribute to count.
     *
     * @return array
     */
    public function get_attribute_counts($request, $filtered_attribute)
    {
    }
    /**
     * Get rating counts for the current products.
     *
     * @param \WP_REST_Request $request The request object.
     * @return array rating=>count pairs.
     */
    public function get_rating_counts($request)
    {
    }
    /**
     * Gets product by metas.
     *
     * @since TBD
     * @param array $metas Array of metas to query.
     * @return array $results
     */
    public function get_product_by_metas($metas = array())
    {
    }
    /**
     * Gets product by filtered terms.
     *
     * @since TBD
     * @param string $taxonomy Taxonomy name.
     * @param array  $term_ids Term IDs.
     * @param string $query_type or | and.
     * @return array Product IDs.
     */
    public function get_product_by_filtered_terms($taxonomy = '', $term_ids = array(), $query_type = 'or')
    {
    }
}