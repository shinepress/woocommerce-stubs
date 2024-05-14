<?php

namespace Automattic\WooCommerce\Admin\Features;

/**
 * Takes care of Launch Your Store related actions.
 */
class LaunchYourStore
{
    const BANNER_DISMISS_USER_META_KEY = 'woocommerce_coming_soon_banner_dismissed';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Save values submitted from WooCommerce -> Settings -> General.
     *
     * @return void
     */
    public function save_site_visibility_options()
    {
    }
    /**
     * Preload settings for Site Visibility.
     *
     * @param array $settings settings array.
     *
     * @return mixed
     */
    public function preload_settings($settings)
    {
    }
    /**
     * User must be an admin or editor.
     *
     * @return bool
     */
    private function is_manager_or_admin()
    {
    }
    /**
     * Add 'coming soon' banner on the frontend when the following conditions met.
     *
     * - User must be either an admin or store editor (must be logged in).
     * - 'woocommerce_coming_soon' option value must be 'yes'
     * - The page must not be the Coming soon page itself.
     */
    public function maybe_add_coming_soon_banner_on_frontend()
    {
    }
    /**
     * Register user meta fields for Launch Your Store.
     */
    public function register_launch_your_store_user_meta_fields()
    {
    }
    /**
     * Reset 'woocommerce_coming_soon_banner_dismissed' user meta to 'no'.
     *
     * Runs when a user logs-in successfully.
     *
     * @param string $user_login user login.
     * @param object $user user object.
     */
    public function reset_woocommerce_coming_soon_banner_dismissed($user_login, $user)
    {
    }
}