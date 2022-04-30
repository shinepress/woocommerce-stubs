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
     * @param  string $category Addon (sub) category.
     * @param  string $term     Search terms.
     * @param  string $country  Store country.
     *
     * @return string url parameter string
     */
    public static function build_parameter_string($category, $term, $country)
    {
    }
    /**
     * Call API to get extensions
     *
     * @param  string $category Addon (sub) category.
     * @param  string $term     Search terms.
     * @param  string $country  Store country.
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
     * @param  string $section_id Required section ID.
     *
     * @return object|bool
     */
    public static function get_section($section_id)
    {
    }
    /**
     * Get section content for the addons screen.
     *
     * @param  string $section_id Required section ID.
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
     * @param object $block Banner data.
     */
    public static function output_banner_block($block)
    {
    }
    /**
     * Handles the outputting of a column.
     *
     * @param object $block Column data.
     */
    public static function output_column($block)
    {
    }
    /**
     * Handles the outputting of a column block.
     *
     * @param object $block Column block data.
     */
    public static function output_column_block($block)
    {
    }
    /**
     * Handles the outputting of a small light block.
     *
     * @param object $block Block data.
     */
    public static function output_small_light_block($block)
    {
    }
    /**
     * Handles the outputting of a small dark block.
     *
     * @param object $block Block data.
     */
    public static function output_small_dark_block($block)
    {
    }
    /**
     * Handles the outputting of the WooCommerce Services banner block.
     *
     * @param object $block Block data.
     */
    public static function output_wcs_banner_block($block = array())
    {
    }
    /**
     * Handles the outputting of the WooCommerce Pay banner block.
     *
     * @param object $block Block data.
     */
    public static function output_wcpay_banner_block($block = array())
    {
    }
    /**
     * Handles the output of a full-width block.
     *
     * @param array $section Section data.
     */
    public static function output_promotion_block($section)
    {
    }
    /**
     * Handles the outputting of featured sections
     *
     * @param array $sections Section data.
     */
    public static function output_featured_sections($sections)
    {
    }
    /**
     * Returns in-app-purchase URL params.
     */
    public static function get_in_app_purchase_url_params()
    {
    }
    /**
     * Add in-app-purchase URL params to link.
     *
     * Adds various url parameters to a url to support a streamlined
     * flow for obtaining and setting up WooCommerce extensons.
     *
     * @param string $url    Destination URL.
     */
    public static function add_in_app_purchase_url_params($url)
    {
    }
    /**
     * Outputs a button.
     *
     * @param string $url    Destination URL.
     * @param string $text   Button label text.
     * @param string $style  Button style class.
     * @param string $plugin The plugin the button is promoting.
     */
    public static function output_button($url, $text, $style, $plugin = '')
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
     * Install WooCommerce Payments from the Extensions screens.
     *
     * @param string $section Optional. Extenstions tab.
     *
     * @return void
     */
    public static function install_woocommerce_payments_addon($section = '_featured')
    {
    }
    /**
     * Should an extension be shown on the featured page.
     *
     * @param object $item Item data.
     * @return boolean
     */
    public static function show_extension($item)
    {
    }
}