<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1\AI;

/**
 * Product class.
 *
 * @internal
 */
class Product extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/product';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'ai/product';
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
     * Update product with the content and image powered by AI.
     *
     * @param  \WP_REST_Request $request Request object.
     *
     * @return bool|string|\WP_Error|\WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
}