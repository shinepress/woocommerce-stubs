<?php


/**
 * WC_API class.
 */
class WC_API extends \WC_Legacy_API
{
    /**
     * Setup class.
     *
     * @since 2.0
     */
    public function __construct()
    {
    }
    /**
     * Init the WC API by adding endpoints for those requests.
     */
    private function wc_api_init()
    {
    }
    /**
     * Init WP REST API by hooking into `rest_api_init`.
     *
     * @since 2.6.0
     */
    private function rest_api_init()
    {
    }
    /**
     * Add new query vars.
     *
     * @since 2.0
     * @param array $vars Query vars.
     * @return string[]
     */
    public function add_query_vars($vars)
    {
    }
    /**
     * WC API for payment gateway IPNs, etc.
     *
     * @since 2.0
     */
    public static function add_endpoint()
    {
    }
    /**
     * API request - Trigger any API requests.
     *
     * @since   2.0
     * @version 2.4
     */
    public function handle_api_requests()
    {
    }
    /**
     * Include REST API classes.
     *
     * @since 2.6.0
     */
    public function rest_api_includes()
    {
    }
    /**
     * Register REST API routes.
     *
     * @since 2.6.0
     */
    public function register_rest_routes()
    {
    }
    /**
     * Register WC settings from WP-API to the REST API.
     *
     * @since  3.0.0
     */
    public function register_wp_admin_settings()
    {
    }
}