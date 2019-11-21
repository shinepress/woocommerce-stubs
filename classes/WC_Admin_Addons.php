<?php


/**
 * WC_Admin_Addons Class.
 */
class WC_Admin_Addons
{
    /**
     * Get featured for the addons screen
     *
     * @return array of objects
     */
    public static function get_featured()
    {
    }
    /**
     * Build url parameter string
     *
     * @param  string $category
     * @param  string $term
     * @param  string $country
     *
     * @return string url parameter string
     */
    public static function build_parameter_string($category, $term, $country)
    {
    }
    /**
     * Call API to get extensions
     *
     * @param  string $category
     * @param  string $term
     * @param  string $country
     *
     * @return array of extensions
     */
    public static function get_extension_data($category, $term, $country)
    {
    }
    /**
     * Get sections for the addons screen
     *
     * @return array of objects
     */
    public static function get_sections()
    {
    }
    /**
     * Get section for the addons screen.
     *
     * @param  string $section_id
     *
     * @return object|bool
     */
    public static function get_section($section_id)
    {
    }
    /**
     * Get section content for the addons screen.
     *
     * @param  string $section_id
     *
     * @return array
     */
    public static function get_section_data($section_id)
    {
    }
    /**
     * Handles the outputting of a contextually aware Storefront link (points to child themes if Storefront is already active).
     */
    public static function output_storefront_button()
    {
    }
    /**
     * Handles the outputting of a banner block.
     *
     * @param object $block
     */
    public static function output_banner_block($block)
    {
    }
    /**
     * Handles the outputting of a column.
     *
     * @param object $block
     */
    public static function output_column($block)
    {
    }
    /**
     * Handles the outputting of a column block.
     *
     * @param object $block
     */
    public static function output_column_block($block)
    {
    }
    /**
     * Handles the outputting of a small light block.
     *
     * @param object $block
     */
    public static function output_small_light_block($block)
    {
    }
    /**
     * Handles the outputting of a small dark block.
     *
     * @param object $block
     */
    public static function output_small_dark_block($block)
    {
    }
    /**
     * Handles the outputting of the WooCommerce Services banner block.
     *
     * @param object $block
     */
    public static function output_wcs_banner_block($block = array())
    {
    }
    /**
     * Handles the outputting of featured sections
     *
     * @param array $sections
     */
    public static function output_featured_sections($sections)
    {
    }
    /**
     * Outputs a button.
     *
     * @param string $url
     * @param string $text
     * @param string $theme
     * @param string $plugin
     */
    public static function output_button($url, $text, $theme, $plugin = '')
    {
    }
    /**
     * Handles output of the addons page in admin.
     */
    public static function output()
    {
    }
    /**
     * Install WooCommerce Services from Extensions screens.
     */
    public static function install_woocommerce_services_addon()
    {
    }
    /**
     * Should an extension be shown on the featured page.
     *
     * @param object $item
     * @return boolean
     */
    public static function show_extension($item)
    {
    }
}