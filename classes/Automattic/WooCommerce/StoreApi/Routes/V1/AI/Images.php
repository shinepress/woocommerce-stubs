<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1\AI;

/**
 * Patterns class.
 */
class Images extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/images';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'ai/images';
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
     * Generate Images from Pexels
     *
     * @param  \WP_REST_Request $request Request object.
     *
     * @return bool|string|\WP_Error|\WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
}