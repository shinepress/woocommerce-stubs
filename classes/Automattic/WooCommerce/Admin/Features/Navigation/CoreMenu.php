<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * CoreMenu class. Handles registering Core menu items.
 */
class CoreMenu
{
    /**
     * Class instance.
     *
     * @var Menu instance
     */
    protected static $instance = null;
    /**
     * Get class instance.
     */
    final public static function instance()
    {
    }
    /**
     * Init.
     */
    public function init()
    {
    }
    /**
     * Add registered admin settings as menu items.
     */
    public static function get_setting_items()
    {
    }
    /**
     * Get unfulfilled order count
     *
     * @return array
     */
    public static function get_shop_order_count()
    {
    }
    /**
     * Get all menu categories.
     *
     * @return array
     */
    public static function get_categories()
    {
    }
    /**
     * Get all menu items.
     *
     * @return array
     */
    public static function get_items()
    {
    }
    /**
     * Get items for tools category.
     *
     * @return array
     */
    public static function get_tool_items()
    {
    }
    /**
     * Get legacy report items.
     *
     * @return array
     */
    public static function get_legacy_report_items()
    {
    }
    /**
     * Register all core post types.
     */
    public function register_post_types()
    {
    }
    /**
     * Add the dashboard items to the WP menu to create a quick-access flyout menu.
     */
    public function add_dashboard_menu_items()
    {
    }
    /**
     * Get items excluded from WooCommerce menu migration.
     *
     * @return array
     */
    public static function get_excluded_items()
    {
    }
}