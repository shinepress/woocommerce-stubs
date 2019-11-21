<?php


/**
 * WC_Shop_Customizer class.
 */
class WC_Shop_Customizer
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add settings to the customizer.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_sections($wp_customize)
    {
    }
    /**
     * Frontend CSS styles.
     */
    public function add_frontend_scripts()
    {
    }
    /**
     * CSS styles to improve our form.
     */
    public function add_styles()
    {
    }
    /**
     * Scripts to improve our form.
     */
    public function add_scripts()
    {
    }
    /**
     * Sanitize the shop page & category display setting.
     *
     * @param string $value '', 'subcategories', or 'both'.
     * @return string
     */
    public function sanitize_archive_display($value)
    {
    }
    /**
     * Sanitize the catalog orderby setting.
     *
     * @param string $value An array key from the below array.
     * @return string
     */
    public function sanitize_default_catalog_orderby($value)
    {
    }
    /**
     * Store notice section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    private function add_store_notice_section($wp_customize)
    {
    }
    /**
     * Product catalog section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_product_catalog_section($wp_customize)
    {
    }
    /**
     * Product images section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    private function add_product_images_section($wp_customize)
    {
    }
    /**
     * Checkout section.
     *
     * @param WP_Customize_Manager $wp_customize Theme Customizer object.
     */
    public function add_checkout_section($wp_customize)
    {
    }
    /**
     * Sanitize field display.
     *
     * @param string $value '', 'subcategories', or 'both'.
     * @return string
     */
    public function sanitize_checkout_field_display($value)
    {
    }
}