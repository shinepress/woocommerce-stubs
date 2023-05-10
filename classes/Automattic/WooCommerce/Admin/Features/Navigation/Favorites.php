<?php

namespace Automattic\WooCommerce\Admin\Features\Navigation;

/**
 * Contains logic for the WooCommerce Navigation menu.
 */
class Favorites
{
    /**
     * Array index of menu capability.
     *
     * @var int
     */
    const META_NAME = 'navigation_favorites';
    /**
     * Get class instance.
     */
    final public static function instance()
    {
    }
    /**
     * Set given favorites string to the user meta data.
     *
     * @param string|number $user_id User id.
     * @param array         $favorites Array of favorite values to set.
     */
    private static function set_meta_value($user_id, $favorites)
    {
    }
    /**
     * Add item to favorites
     *
     * @param string        $item_id Identifier of item to add.
     * @param string|number $user_id Identifier of user to add to.
     * @return WP_Error|Boolean   Throws exception if item already exists.
     */
    public static function add_item($item_id, $user_id)
    {
    }
    /**
     * Remove item from favorites
     *
     * @param string        $item_id Identifier of item to remove.
     * @param string|number $user_id Identifier of user to remove from.
     * @return \WP_Error|Boolean   Throws exception if item does not exist.
     */
    public static function remove_item($item_id, $user_id)
    {
    }
    /**
     * Get all registered favorites.
     *
     * @param string|number $user_id Identifier of user to query.
     * @return WP_Error|Array
     */
    public static function get_all($user_id)
    {
    }
}