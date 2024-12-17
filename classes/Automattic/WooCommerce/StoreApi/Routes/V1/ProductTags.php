<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * ProductTags class.
 */
class ProductTags extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractTermsRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-tags';
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Get the path of this rest route.
     *
     * @return string
     */
    public static function get_path_regex()
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
     * Get a collection of terms.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
}