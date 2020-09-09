<?php


/**
 * REST API Data countries controller class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Controller
 */
class WC_REST_Data_Countries_Controller extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'data/countries';
    /**
     * Register routes.
     *
     * @since 3.5.0
     */
    public function register_routes()
    {
    }
    /**
     * Get a list of countries and states.
     *
     * @param  string          $country_code Country code.
     * @param  WP_REST_Request $request      Request data.
     * @return array|mixed Response data, ready for insertion into collection data.
     */
    public function get_country($country_code = \false, $request)
    {
    }
    /**
     * Return the list of states for all countries.
     *
     * @since  3.5.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Return the list of states for a given country.
     *
     * @since  3.5.0
     * @param  WP_REST_Request $request Request data.
     * @return WP_Error|WP_REST_Response
     */
    public function get_item($request)
    {
    }
    /**
     * Prepare the data object for response.
     *
     * @since  3.5.0
     * @param object          $item Data object.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($item, $request)
    {
    }
    /**
     * Prepare links for the request.
     *
     * @param object $item Data object.
     * @return array Links for the given country.
     */
    protected function prepare_links($item)
    {
    }
    /**
     * Get the location schema, conforming to JSON Schema.
     *
     * @since  3.5.0
     * @return array
     */
    public function get_item_schema()
    {
    }
}