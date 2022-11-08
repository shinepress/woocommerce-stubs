<?php


/**
 * WC_Settings_Page.
 */
abstract class WC_Settings_Page
{
    /**
     * Setting page id.
     *
     * @var string
     */
    protected $id = '';
    /**
     * Setting page label.
     *
     * @var string
     */
    protected $label = '';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get settings page ID.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get settings page label.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_label()
    {
    }
    /**
     * Add this page to settings.
     *
     * @param array $pages The settings array where we'll add ourselves.
     *
     * @return mixed
     */
    public function add_settings_page($pages)
    {
    }
    /**
     * Get settings array for the default section.
     *
     * External settings classes (registered via 'woocommerce_get_settings_pages' filter)
     * might have redefined this method as "get_settings($section_id='')", thus we need
     * to use this method internally instead of 'get_settings_for_section' to register settings
     * and render settings pages.
     *
     * *But* we can't just redefine the method as "get_settings($section_id='')" here, since this
     * will break on PHP 8 if any external setting class have it as 'get_settings()'.
     *
     * Thus we leave the method signature as is and use 'func_get_arg' to get the setting id
     * if it's supplied, and we use this method internally; but it's deprecated and should
     * otherwise never be used.
     *
     * @deprecated 5.4.0 Use 'get_settings_for_section' (passing an empty string for default section)
     *
     * @return array Settings array, each item being an associative array representing a setting.
     */
    public function get_settings()
    {
    }
    /**
     * Get settings array.
     *
     * The strategy for getting the settings is as follows:
     *
     * - If a method named 'get_settings_for_{section_id}_section' exists in the class
     *   it will be invoked (for the default '' section, the method name is 'get_settings_for_default_section').
     *   Derived classes can implement these methods as required.
     *
     * - Otherwise, 'get_settings_for_section_core' will be invoked. Derived classes can override it
     *   as an alternative to implementing 'get_settings_for_{section_id}_section' methods.
     *
     * @param string $section_id The id of the section to return settings for, an empty string for the default section.
     *
     * @return array Settings array, each item being an associative array representing a setting.
     */
    final public function get_settings_for_section($section_id)
    {
    }
    /**
     * Get the settings for a given section.
     * This method is invoked from 'get_settings_for_section' when no 'get_settings_for_{current_section}_section'
     * method exists in the class.
     *
     * When overriding, note that the 'woocommerce_get_settings_' filter must NOT be triggered,
     * as this is already done by 'get_settings_for_section'.
     *
     * @param string $section_id The section name to get the settings for.
     *
     * @return array Settings array, each item being an associative array representing a setting.
     */
    protected function get_settings_for_section_core($section_id)
    {
    }
    /**
     * Get all sections for this page, both the own ones and the ones defined via filters.
     *
     * @return array
     */
    public function get_sections()
    {
    }
    /**
     * Get own sections for this page.
     * Derived classes should override this method if they define sections.
     * There should always be one default section with an empty string as identifier.
     *
     * Example:
     * return array(
     *   ''        => __( 'General', 'woocommerce' ),
     *   'foobars' => __( 'Foos & Bars', 'woocommerce' ),
     * );
     *
     * @return array An associative array where keys are section identifiers and the values are translated section names.
     */
    protected function get_own_sections()
    {
    }
    /**
     * Output sections.
     */
    public function output_sections()
    {
    }
    /**
     * Output the HTML for the settings.
     */
    public function output()
    {
    }
    /**
     * Save settings and trigger the 'woocommerce_update_options_'.id action.
     */
    public function save()
    {
    }
    /**
     * Save settings for current section.
     */
    protected function save_settings_for_current_section()
    {
    }
    /**
     * Trigger the 'woocommerce_update_options_'.id action.
     *
     * @param string $section_id Section to trigger the action for, or null for current section.
     */
    protected function do_update_options_action($section_id = \null)
    {
    }
}