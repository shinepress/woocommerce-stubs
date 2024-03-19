<?php


/**
 * WC_Admin_Marketplace_Promotions class.
 */
class WC_Admin_Marketplace_Promotions
{
    const TRANSIENT_NAME = 'woocommerce_marketplace_promotions';
    const SCHEDULED_ACTION_HOOK = 'woocommerce_marketplace_fetch_promotions';
    /**
     * The user's locale, for example en_US.
     *
     * @var string
     */
    public static string $locale;
    /**
     * On all admin pages, schedule an action to fetch promotions data.
     * Add menu badge to WooCommerce Extensions item if the promotions
     * API requests one.
     *
     * @return void
     */
    public static function init_marketplace_promotions()
    {
    }
    /**
     * Check if the request is for an admin page, and not ajax.
     * We may want to add a menu bubble to WooCommerce Extensions
     * on any admin page, as the user may view the WooCommerce flyout
     * menu.
     *
     * @return bool
     */
    private static function is_admin_page(): bool
    {
    }
    /**
     * Get promotions to show in the Woo in-app marketplace.
     * Only run on selected pages in the main WooCommerce menu in wp-admin.
     * Loads promotions in transient with one day life.
     *
     * @return void
     */
    public static function fetch_marketplace_promotions()
    {
    }
    /**
     * If there's an active promotion of the format `menu_bubble`,
     * add a filter to show a bubble on the Extensions item in the
     * WooCommerce menu.
     *
     * @return void
     * @throws Exception  If we are unable to create a DateTime from the date_to_gmt.
     */
    private static function maybe_show_bubble_promotions()
    {
    }
    /**
     * From the array of promotions, select those of a given format.
     *
     * @param ? array  $promotions  Array of data about promotions of all formats.
     * @param ? string $format      Format we want to filter for.
     *
     * @return array
     */
    private static function get_promotions_of_format($promotions = array(), $format = ''): array
    {
    }
    /**
     * Find promotions that are still active – they have a date range that
     * includes the current date.
     *
     * @param ?array $promotions  Data about current promotions.
     *
     * @return array
     */
    private static function get_active_promotions($promotions = array())
    {
    }
    /**
     * Callback for the `woocommerce_marketplace_menu_items` filter
     * in `Automattic\WooCommerce\Internal\Admin\Marketplace::get_marketplace_pages`.
     * At the moment, the Extensions page is the only page in `$menu_items`.
     * Adds a bubble to the menu item.
     *
     * @param array  $menu_items  Arrays representing items in nav menu.
     * @param ?array $promotion   Data about a promotion from the Woo.com API.
     *
     * @return array
     */
    public static function filter_marketplace_menu_items($menu_items, $promotion = array())
    {
    }
    /**
     * Return the markup for a menu item bubble with a given text.
     *
     * @param string $bubble_text Text of bubble.
     *
     * @return string
     */
    private static function append_bubble($bubble_text)
    {
    }
    /**
     * When WooCommerce is deactivated, clear the scheduled action.
     *
     * @return void
     */
    public static function clear_scheduled_event()
    {
    }
}