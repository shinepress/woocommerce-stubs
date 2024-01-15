<?php

namespace Automattic\WooCommerce\StoreApi;

/**
 * RoutesController class.
 */
class RoutesController
{
    /**
     * Stores schema_controller.
     *
     * @var SchemaController
     */
    protected $schema_controller;
    /**
     * Stores routes.
     *
     * @var array
     */
    protected $routes = [];
    /**
     * Constructor.
     *
     * @param SchemaController $schema_controller Schema controller class passed to each route.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\SchemaController $schema_controller)
    {
    }
    /**
     * Register all Store API routes. This includes routes under specific version namespaces.
     */
    public function register_all_routes()
    {
    }
    /**
     * Get a route class instance.
     *
     * Each route class is instantized with the SchemaController instance, and its main Schema Type.
     *
     * @throws \Exception If the schema does not exist.
     * @param string $name Name of schema.
     * @param string $version API Version being requested.
     * @return AbstractRoute
     */
    public function get($name, $version = 'v1')
    {
    }
    /**
     * Register defined list of routes with WordPress.
     *
     * @param string $version API Version being registered..
     * @param string $namespace Overrides the default route namespace.
     */
    protected function register_routes($version = 'v1', $namespace = 'wc/store/v1')
    {
    }
}