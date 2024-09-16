<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * Contains logic for the Navigation
 */
class Init
{
    /**
     * Option name used to toggle this feature.
     */
    const TOGGLE_OPTION_NAME = 'woocommerce_navigation_enabled';
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Create a deprecation notice.
     *
     * @param string $fcn The function that is deprecated.
     */
    public static function deprecation_notice($fcn)
    {
    }
}