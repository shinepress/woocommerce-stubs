<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Order class.
 */
class Order extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractRoute
{
    use \Automattic\WooCommerce\StoreApi\Utilities\OrderAuthorizationTrait;
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'order';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'order';
    /**
     * Order controller class instance.
     *
     * @var OrderController
     */
    protected $order_controller;
    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema Controller instance.
     * @param AbstractSchema   $schema Schema class for this route.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller, \Automattic\WooCommerce\StoreApi\Schemas\v1\AbstractSchema $schema)
    {
    }
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
     * Handle the request and return a valid response for this endpoint.
     *
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
}