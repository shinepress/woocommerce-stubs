<?php


/**
 * WC_Settings_Tax.
 */
class WC_Settings_Tax extends \WC_Settings_Page
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add this page to settings.
     *
     * @param array $pages Existing pages.
     * @return array|mixed
     */
    public function add_settings_page($pages)
    {
    }
    /**
     * Get sections.
     *
     * @return array
     */
    public function get_sections()
    {
    }
    /**
     * Get settings array.
     *
     * @param string $current_section Current section being shown.
     * @return array
     */
    public function get_settings($current_section = '')
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
    /**
     * Output tax rate tables.
     */
    public function output_tax_rates()
    {
    }
    /**
     * Get tax class being edited.
     *
     * @return string
     */
    private static function get_current_tax_class()
    {
    }
    /**
     * Get a posted tax rate.
     *
     * @param string $key   Key of tax rate in the post data array.
     * @param int    $order Position/order of rate.
     * @param string $class Tax class for rate.
     * @return array
     */
    private function get_posted_tax_rate($key, $order, $class)
    {
    }
    /**
     * Save tax rates.
     */
    public function save_tax_rates()
    {
    }
}