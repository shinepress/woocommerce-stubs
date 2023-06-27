<?php


/**
 * Legacy API.
 */
class WC_Legacy_API
{
    /**
     * This is the major version for the REST API and takes
     * first-order position in endpoint URLs.
     *
     * @deprecated 2.6.0
     * @var string
     */
    const VERSION = '3.1.0';
    /**
     * The REST API server.
     *
     * @deprecated 2.6.0
     * @var WC_API_Server
     */
    public $server;
    /**
     * REST API authentication class instance.
     *
     * @deprecated 2.6.0
     * @var WC_API_Authentication
     */
    public $authentication;
    /**
     * Init the legacy API.
     */
    public function init()
    {
    }
    /**
     * Add new query vars.
     *
     * @since 2.0
     * @param array $vars Vars.
     * @return string[]
     */
    public function add_query_vars($vars)
    {
    }
    /**
     * Add new endpoints.
     *
     * @since 2.0
     */
    public static function add_endpoint()
    {
    }
    /**
     * Handle REST API requests.
     *
     * @since 2.2
     * @deprecated 2.6.0
     */
    public function handle_rest_api_requests()
    {
    }
    /**
     * Include required files for REST API request.
     *
     * @since 2.1
     * @deprecated 2.6.0
     */
    public function includes()
    {
    }
    /**
     * Register available API resources.
     *
     * @since 2.1
     * @deprecated 2.6.0
     * @param WC_API_Server $server the REST server.
     */
    public function register_resources($server)
    {
    }
    /**
     * Handle legacy v1 REST API requests.
     *
     * @since 2.2
     * @deprecated 2.6.0
     */
    private function handle_v1_rest_api_request()
    {
    }
    /**
     * Handle legacy v2 REST API requests.
     *
     * @since 2.4
     * @deprecated 2.6.0
     */
    private function handle_v2_rest_api_request()
    {
    }
    /**
     * Rest API Init.
     *
     * @deprecated 3.7.0 - REST API classes autoload.
     */
    public function rest_api_init()
    {
    }
    /**
     * Include REST API classes.
     *
     * @deprecated 3.7.0 - REST API classes autoload.
     */
    public function rest_api_includes()
    {
    }
    /**
     * Register REST API routes.
     *
     * @deprecated 3.7.0
     */
    public function register_rest_routes()
    {
    }
}