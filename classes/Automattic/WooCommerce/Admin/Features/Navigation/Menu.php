<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * Contains logic for the WooCommerce Navigation menu.
 */
class Menu
{
    /**
     * Class instance.
     *
     * @var Menu instance
     */
    protected static $instance = null;
    /**
     * Array index of menu capability.
     *
     * @var int
     */
    const CAPABILITY = 1;
    /**
     * Array index of menu callback.
     *
     * @var int
     */
    const CALLBACK = 2;
    /**
     * Array index of menu callback.
     *
     * @var int
     */
    const SLUG = 3;
    /**
     * Array index of menu CSS class string.
     *
     * @var int
     */
    const CSS_CLASSES = 4;
    /**
     * Array of usable menu IDs.
     */
    const MENU_IDS = array('primary', 'favorites', 'plugins', 'secondary');
    /**
     * Store menu items.
     *
     * @var array
     */
    protected static $menu_items = array();
    /**
     * Store categories with menu item IDs.
     *
     * @var array
     */
    protected static $categories = array('woocommerce' => array());
    /**
     * Registered callbacks or URLs with migration boolean as key value pairs.
     *
     * @var array
     */
    protected static $callbacks = array();
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
     * Convert a WordPress menu callback to a URL.
     *
     * @param string $callback Menu callback.
     * @return string
     */
    public static function get_callback_url($callback)
    {
    }
    /**
     * Get the parent key if one exists.
     *
     * @param string $callback Callback or URL.
     * @return string|null
     */
    public static function get_parent_key($callback)
    {
    }
    /**
     * Adds a top level menu item to the navigation.
     *
     * @param array $args Array containing the necessary arguments.
     *    $args = array(
     *      'id'      => (string) The unique ID of the menu item. Required.
     *      'title'   => (string) Title of the menu item. Required.
     *      'url'     => (string) URL or callback to be used. Required.
     *      'order'   => (int) Menu item order.
     *      'migrate' => (bool) Whether or not to hide the item in the wp admin menu.
     *      'menuId'  => (string) The ID of the menu to add the category to.
     *    ).
     */
    private static function add_category($args)
    {
    }
    /**
     * Adds a child menu item to the navigation.
     *
     * @param array $args Array containing the necessary arguments.
     *    $args = array(
     *      'id'              => (string) The unique ID of the menu item. Required.
     *      'title'           => (string) Title of the menu item. Required.
     *      'parent'          => (string) Parent menu item ID.
     *      'capability'      => (string) Capability to view this menu item.
     *      'url'             => (string) URL or callback to be used. Required.
     *      'order'           => (int) Menu item order.
     *      'migrate'         => (bool) Whether or not to hide the item in the wp admin menu.
     *      'menuId'          => (string) The ID of the menu to add the item to.
     *      'matchExpression' => (string) A regular expression used to identify if the menu item is active.
     *    ).
     */
    private static function add_item($args)
    {
    }
    /**
     * Get an item's menu ID from its parent.
     *
     * @param array $item Item args.
     * @return string
     */
    public static function get_item_menu_id($item)
    {
    }
    /**
     * Adds a plugin category.
     *
     * @param array $args Array containing the necessary arguments.
     *    $args = array(
     *      'id'      => (string) The unique ID of the menu item. Required.
     *      'title'   => (string) Title of the menu item. Required.
     *      'url'     => (string) URL or callback to be used. Required.
     *      'migrate' => (bool) Whether or not to hide the item in the wp admin menu.
     *      'order'   => (int) Menu item order.
     *    ).
     */
    public static function add_plugin_category($args)
    {
    }
    /**
     * Adds a plugin item.
     *
     * @param array $args Array containing the necessary arguments.
     *    $args = array(
     *      'id'              => (string) The unique ID of the menu item. Required.
     *      'title'           => (string) Title of the menu item. Required.
     *      'parent'          => (string) Parent menu item ID.
     *      'capability'      => (string) Capability to view this menu item.
     *      'url'             => (string) URL or callback to be used. Required.
     *      'migrate'         => (bool) Whether or not to hide the item in the wp admin menu.
     *      'order'           => (int) Menu item order.
     *      'matchExpression' => (string) A regular expression used to identify if the menu item is active.
     *    ).
     */
    public static function add_plugin_item($args)
    {
    }
    /**
     * Adds a plugin setting item.
     *
     * @param array $args Array containing the necessary arguments.
     *    $args = array(
     *      'id'         => (string) The unique ID of the menu item. Required.
     *      'title'      => (string) Title of the menu item. Required.
     *      'capability' => (string) Capability to view this menu item.
     *      'url'        => (string) URL or callback to be used. Required.
     *      'migrate'    => (bool) Whether or not to hide the item in the wp admin menu.
     *    ).
     */
    public static function add_setting_item($args)
    {
    }
    /**
     * Get menu item templates for a given post type.
     *
     * @param string $post_type Post type to add.
     * @param array  $menu_args Arguments merged with the returned menu items.
     * @return array
     */
    public static function get_post_type_items($post_type, $menu_args = array())
    {
    }
    /**
     * Get menu item templates for a given taxonomy.
     *
     * @param string $taxonomy Taxonomy to add.
     * @param array  $menu_args Arguments merged with the returned menu items.
     * @return array
     */
    public static function get_taxonomy_items($taxonomy, $menu_args = array())
    {
    }
    /**
     * Add core menu items.
     */
    public function add_core_items()
    {
    }
    /**
     * Add an item or taxonomy.
     *
     * @param array $menu_item Menu item.
     */
    public function add_item_and_taxonomy($menu_item)
    {
    }
    /**
     * Migrate any remaining WooCommerce child items.
     *
     * @param array $menu Menu items.
     * @return array
     */
    public function migrate_core_child_items($menu)
    {
    }
    /**
     * Check if a menu item's callback is registered in the menu.
     *
     * @param array $menu_item Menu item args.
     * @return bool
     */
    public static function has_callback($menu_item)
    {
    }
    /**
     * Hides all WP admin menus items and adds screen IDs to check for new items.
     */
    public static function migrate_menu_items()
    {
    }
    /**
     * Add a callback to identify and hide pages in the WP menu.
     */
    public static function hide_wp_menu_item($callback)
    {
    }
    /**
     * Get registered menu items.
     *
     * @return array
     */
    public static function get_items()
    {
    }
    /**
     * Get registered menu items.
     *
     * @return array
     */
    public static function get_category_items($category)
    {
    }
    /**
     * Get registered callbacks.
     *
     * @return array
     */
    public static function get_callbacks()
    {
    }
    /**
     * Gets the menu item data mapped by category and menu ID.
     *
     * @return array
     */
    public static function get_mapped_menu_items()
    {
    }
    /**
     * Add the menu to the page output.
     *
     * @param array $menu Menu items.
     * @return array
     */
    public function enqueue_data($menu)
    {
    }
}