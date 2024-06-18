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
    /**
     * Update woocommerce_admin_launch_your_store_survey_completed to yes or no
     *
     * @param \WP_REST_Request $request WP_REST_Request object.
     *
     * @return \WP_REST_Response
     */
    public function update_survey_status(\WP_REST_Request $request)
    {
    }
}