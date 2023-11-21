<?php


/**
 * WC_API class.
 */
class WC_API extends \WC_Legacy_API
{
    /**
     * Init the API by setting up action and filter hooks.
     */
    public function init()
    {
    }
    /**
     * Get the version of the REST API package being ran. Since API package was merged into core, this now follows WC version.
     *
     * @since 3.7.0
     * @return string|null
     */
    public function get_rest_api_package_version()
    {
    }
    /**
     * Get the version of the REST API package being ran.
     *
     * @since 3.7.0
     * @return string
     */
    public function get_rest_api_package_path()
    {
    }
    /**
     * Return if the rest API classes were already loaded.
     *
     * @since 3.7.0
     * @return boolean
     */
    protected function is_rest_api_loaded()
    {
    }
    /**
     * Get data from a WooCommerce API endpoint.
     *
     * @since 3.7.0
     * @param string $endpoint Endpoint.
     * @param array  $params Params to pass with request.
     * @return array|\WP_Error
     */
    public function get_endpoint_data($endpoint, $params = array())
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
     * Register WC settings from WP-API to the REST API.
     *
     * @since  3.0.0
     */
    public function register_wp_admin_settings()
    {
    }
}