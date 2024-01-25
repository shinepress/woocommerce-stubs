<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductReviews class.
 */
class ProductReviews extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-reviews';
    /**
     * The routes schema.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'product-review';
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Get a collection of reviews.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Prepends internal property prefix to query parameters to match our response fields.
     *
     * @param string $query_param Query parameter.
     * @return string
     */
    protected function normalize_query_param($query_param)
    {
    }
    /**
     * Get the query params for collections of products.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
}