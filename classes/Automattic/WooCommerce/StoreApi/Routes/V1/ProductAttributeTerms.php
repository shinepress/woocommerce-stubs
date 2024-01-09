<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductAttributeTerms class.
 */
class ProductAttributeTerms extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractTermsRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-attribute-terms';
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
     * Get the query params for collections of attributes.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get a collection of attribute terms.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
}