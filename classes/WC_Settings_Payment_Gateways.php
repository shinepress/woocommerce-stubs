<?php


/**
 * WC_Settings_Payment_Gateways.
 */
class WC_Settings_Payment_Gateways extends \WC_Settings_Page
{
    const TAB_NAME = 'checkout';
    const MAIN_SECTION_NAME = 'main';
    const OFFLINE_SECTION_NAME = 'offline';
    const COD_SECTION_NAME = 'cod';
    // Cash on delivery.
    const BACS_SECTION_NAME = 'bacs';
    // Direct bank transfer.
    const CHEQUE_SECTION_NAME = 'cheque';
    // Cheque payments.
    /**
     * Get the whitelist of sections to render using React.
     *
     * @return array List of section identifiers.
     */
    private function get_reactify_render_sections()
    {
    }
    /**
     * Standardize the current section name.
     *
     * @param string $section The section name to standardize.
     *
     * @return string The standardized section name.
     */
    private function standardize_section_name(string $section): string
    {
    }
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'payment';
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Get settings array.
     *
     * This is just for backward compatibility with the rest of the codebase (primarily API responses).
     *
     * @return array
     */
    protected function get_settings_for_default_section()
    {
    }
    /**
     * Check if the given section should be rendered using React.
     *
     * @param string $section The section to check.
     * @return bool Whether the section should be rendered using React.
     */
    private function should_render_react_section($section)
    {
    }
    /**
     * Render the React section.
     *
     * @param string $section The section to render.
     */
    private function render_react_section(string $section)
    {
    }
    /**
     * Render the classic gateway settings page.
     *
     * @param array  $payment_gateways The payment gateways.
     * @param string $current_section  The current section.
     */
    private function render_classic_gateway_settings_page(array $payment_gateways, string $current_section)
    {
    }
    /**
     * Run the 'admin_options' method on a given gateway.
     *
     * This method exists to help with unit testing.
     *
     * @param object $gateway The gateway object to run the method on.
     */
    protected function run_gateway_admin_options($gateway)
    {
    }
    /**
     * Get all sections for the current page.
     *
     * Reactified section pages won't have any sections.
     * The rest of the settings pages will get the default/own section and those added via
     * the `woocommerce_get_sections_checkout` filter.
     *
     * @return array The sections for this settings page.
     */
    public function get_sections()
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
    /**
     * Hide the help tabs.
     */
    public function hide_help_tabs()
    {
    }
    /**
     * Suppress WP admin notices on the WooCommerce Payments settings page.
     */
    public function suppress_admin_notices()
    {
    }
    /**
     * Suppress the store-alerts WCAdmin feature on the WooCommerce Payments settings page and Reactified sections.
     *
     * @param mixed $features The WCAdmin features list.
     *
     * @return mixed The modified features list.
     */
    public function suppress_store_alerts($features)
    {
    }
}