<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * PaymentGatewaySuggetsions Controller.
 *
 * @internal
 * @extends WC_REST_Data_Controller
 */
class PaymentGatewaySuggestions extends \WC_REST_Data_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-admin';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'payment-gateway-suggestions';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * Check if a given request has access to manage plugins.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_permission_check($request)
    {
    }
    /**
     * Check if a given request has access to manage woocommerce.
     *
     * @return \WP_Error|boolean
     */
    public function user_can_manage_woocommerce()
    {
    }
    /**
     * Return suggested payment gateways.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function get_suggestions($request)
    {
    }
    /**
     * Dismisses suggested payment gateways.
     *
     * @return \WP_Error|\WP_HTTP_Response|\WP_REST_Response
     */
    public function dismiss_payment_gateway_suggestion()
    {
    }
    /**
     * Get the schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}