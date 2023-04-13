<?php

namespace Automattic\WooCommerce\Admin\Features\MultichannelMarketing;

/**
 * Contains logic for Multichannel Marketing.
 */
class Init
{
    /**
     * Option name used to toggle this feature.
     */
    const TOGGLE_OPTION_NAME = 'woocommerce_multichannel_marketing_enabled';
    /**
     * Determines if the feature has been toggled on or off.
     *
     * @var boolean
     */
    protected static $is_updated = false;
    /**
     * Hook into WooCommerce.
     */
    public function __construct()
    {
    }
    /**
     * Add the feature toggle to the features settings.
     *
     * @param array $features Feature sections.
     * @return array
     */
    public static function add_feature_toggle($features)
    {
    }
    /**
     * Reloads the page when the option is toggled to make sure all Multichannel Marketing features are loaded.
     *
     * @param string $old_value Old value.
     * @param string $value     New value.
     */
    public static function reload_page_on_toggle($old_value, $value)
    {
    }
    /**
     * Reload the page if the setting has been updated.
     */
    public static function maybe_reload_page()
    {
    }
}