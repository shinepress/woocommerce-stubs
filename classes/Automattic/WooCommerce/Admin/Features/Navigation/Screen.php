<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * Contains logic for the WooCommerce Navigation menu.
 */
class Screen
{
    /**
     * Class instance.
     *
     * @var Screen instance
     */
    protected static $instance = null;
    /**
     * Screen IDs of registered pages.
     *
     * @var array
     */
    protected static $screen_ids = array();
    /**
     * Registered post types.
     *
     * @var array
     */
    protected static $post_types = array();
    /**
     * Registered taxonomies.
     *
     * @var array
     */
    protected static $taxonomies = array();
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
     * Returns an array of filtered screen ids.
     */
    public static function get_screen_ids()
    {
    }
    /**
     * Returns an array of registered post types.
     */
    public static function get_post_types()
    {
    }
    /**
     * Returns an array of registered post types.
     */
    public static function get_taxonomies()
    {
    }
    /**
     * Check if we're on a WooCommerce page
     *
     * @return bool
     */
    public static function is_woocommerce_page()
    {
    }
    /**
     * Check if a given taxonomy is a WooCommerce core related taxonomy.
     *
     * @param string $taxonomy Taxonomy.
     * @return bool
     */
    public static function is_woocommerce_core_taxonomy($taxonomy)
    {
    }
    /**
     * Add navigation classes to body.
     *
     * @param string $classes Classes.
     * @return string
     */
    public function add_body_class($classes)
    {
    }
    /**
     * Adds a screen ID to the list of screens that use the navigtion.
     * Finds the parent if none is given to grab the correct screen ID.
     *
     * @param string      $callback Callback or URL for page.
     * @param string|null $parent   Parent screen ID.
     */
    public static function add_screen($callback, $parent = null)
    {
    }
    /**
     * Get the plugin page slug.
     *
     * @param string $callback Callback.
     * @return string
     */
    public static function get_plugin_page($callback)
    {
    }
    /**
     * Register post type for use in WooCommerce Navigation screens.
     *
     * @param string $post_type Post type to add.
     */
    public static function register_post_type($post_type)
    {
    }
    /**
     * Register taxonomy for use in WooCommerce Navigation screens.
     *
     * @param string $taxonomy Taxonomy to add.
     */
    public static function register_taxonomy($taxonomy)
    {
    }
}