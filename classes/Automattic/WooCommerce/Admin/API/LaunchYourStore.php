<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * Launch Your Store controller.
 *
 * @internal
 */
class LaunchYourStore
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
    protected $rest_base = 'launch-your-store';
    /**
     * Register routes.
     */
    public function register_routes()
    {
    }
    /**
     * User must be either shop_manager or administrator.
     *
     * @return bool
     */
    public function must_be_shop_manager_or_admin()
    {
    }
    /**
     * Initializes options for coming soon. Does not override if options exist.
     *
     * @return bool|void
     */
    public function initialize_coming_soon()
    {
    }
}