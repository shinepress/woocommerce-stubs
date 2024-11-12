<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Patterns class.
 */
class Patterns extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'patterns';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'patterns';
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
     * Fetch a single pattern from the PTK to ensure the API is available.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_Error|\WP_HTTP_Response|WP_REST_Response
     * @throws RouteException If the patterns cannot be fetched.
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Fetch the patterns from the PTK and update the transient.
     *
     * @param WP_REST_Request $request Request object.
     *
     * @return WP_REST_Response
     * @throws Exception If the patterns cannot be fetched.
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
}