<?php


/**
 * WC_Admin_Setup_Wizard class.
 */
class WC_Admin_Setup_Wizard
{
    /**
     * Current step
     *
     * @var string
     */
    private $step = '';
    /**
     * Steps for the setup wizard
     *
     * @var array
     */
    private $steps = array();
    /**
     * Actions to be executed after the HTTP response has completed
     *
     * @var array
     */
    private $deferred_actions = array();
    /**
     * Tweets user can optionally send after install
     *
     * @var array
     */
    private $tweets = array('Someone give me woo-t, I just set up a new store with #WordPress and @WooCommerce!', 'Someone give me high five, I just set up a new store with #WordPress and @WooCommerce!');
    /**
     * Hook in tabs.
     */
    public function __construct()
    {
    }
    /**
     * Add admin menus/screens.
     */
    public function admin_menus()
    {
    }
    /**
     * The theme "extra" should only be shown if the current user can modify themes
     * and the store doesn't already have a WooCommerce theme.
     *
     * @return boolean
     */
    protected function should_show_theme()
    {
    }
    /**
     * Is the user using a default WP theme?
     *
     * @return boolean
     */
    protected function is_default_theme()
    {
    }
    /**
     * The "automated tax" extra should only be shown if the current user can
     * install plugins and the store is in a supported country.
     */
    protected function should_show_automated_tax()
    {
    }
    /**
     * Should we show the Mailchimp install option?
     * True only if the user can install plugins.
     *
     * @return boolean
     */
    protected function should_show_mailchimp()
    {
    }
    /**
     * Should we display the 'Recommended' step?
     * True if at least one of the recommendations will be displayed.
     *
     * @return boolean
     */
    protected function should_show_recommended_step()
    {
    }
    /**
     * Register/enqueue scripts and styles for the Setup Wizard.
     *
     * Hooked onto 'admin_enqueue_scripts'.
     */
    public function enqueue_scripts()
    {
    }
    /**
     * Show the setup wizard.
     */
    public function setup_wizard()
    {
    }
    /**
     * Get the URL for the next step's screen.
     *
     * @param string $step  slug (default: current step).
     * @return string       URL for next step if a next step exists.
     *                      Admin URL if it's the last step.
     *                      Empty string on failure.
     * @since 3.0.0
     */
    public function get_next_step_link($step = '')
    {
    }
    /**
     * Setup Wizard Header.
     */
    public function setup_wizard_header()
    {
    }
    /**
     * Setup Wizard Footer.
     */
    public function setup_wizard_footer()
    {
    }
    /**
     * Output the steps.
     */
    public function setup_wizard_steps()
    {
    }
    /**
     * Output the content for the current step.
     */
    public function setup_wizard_content()
    {
    }
    /**
     * Initial "store setup" step.
     * Location, product type, page setup, and tracking opt-in.
     */
    public function wc_setup_store_setup()
    {
    }
    /**
     * Save initial store settings.
     */
    public function wc_setup_store_setup_save()
    {
    }
    /**
     * Finishes replying to the client, but keeps the process running for further (async) code execution.
     *
     * @see https://core.trac.wordpress.org/ticket/41358 .
     */
    protected function close_http_connection()
    {
    }
    /**
     * Function called after the HTTP request is finished, so it's executed without the client having to wait for it.
     *
     * @see WC_Admin_Setup_Wizard::install_plugin
     * @see WC_Admin_Setup_Wizard::install_theme
     */
    public function run_deferred_actions()
    {
    }
    /**
     * Helper method to queue the background install of a plugin.
     *
     * @param string $plugin_id  Plugin id used for background install.
     * @param array  $plugin_info Plugin info array containing name and repo-slug, and optionally file if different from [repo-slug].php.
     */
    protected function install_plugin($plugin_id, $plugin_info)
    {
    }
    /**
     * Helper method to queue the background install of a theme.
     *
     * @param string $theme_id  Theme id used for background install.
     */
    protected function install_theme($theme_id)
    {
    }
    /**
     * Helper method to install Jetpack.
     */
    protected function install_jetpack()
    {
    }
    /**
     * Helper method to install WooCommerce Services and its Jetpack dependency.
     */
    protected function install_woocommerce_services()
    {
    }
    /**
     * Retrieve info for missing WooCommerce Services and/or Jetpack plugin.
     *
     * @return array
     */
    protected function get_wcs_requisite_plugins()
    {
    }
    /**
     * Plugin install info message markup with heading.
     */
    public function plugin_install_info()
    {
    }
    /**
     * Get shipping methods based on country code.
     *
     * @param string $country_code Country code.
     * @param string $currency_code Currency code.
     * @return array
     */
    protected function get_wizard_shipping_methods($country_code, $currency_code)
    {
    }
    /**
     * Render the available shipping methods for a given country code.
     *
     * @param string $country_code Country code.
     * @param string $currency_code Currency code.
     * @param string $input_prefix Input prefix.
     */
    protected function shipping_method_selection_form($country_code, $currency_code, $input_prefix)
    {
    }
    /**
     * Render a product weight unit dropdown.
     *
     * @return string
     */
    protected function get_product_weight_selection()
    {
    }
    /**
     * Render a product dimension unit dropdown.
     *
     * @return string
     */
    protected function get_product_dimension_selection()
    {
    }
    /**
     * Shipping.
     */
    public function wc_setup_shipping()
    {
    }
    /**
     * Save shipping options.
     */
    public function wc_setup_shipping_save()
    {
    }
    /**
     * Is Stripe country supported
     * https://stripe.com/global .
     *
     * @param string $country_code Country code.
     */
    protected function is_stripe_supported_country($country_code)
    {
    }
    /**
     * Is PayPal currency supported.
     *
     * @param string $currency Currency code.
     * @return boolean
     */
    protected function is_paypal_supported_currency($currency)
    {
    }
    /**
     * Is Klarna Checkout country supported.
     *
     * @param string $country_code Country code.
     */
    protected function is_klarna_checkout_supported_country($country_code)
    {
    }
    /**
     * Is Klarna Payments country supported.
     *
     * @param string $country_code Country code.
     */
    protected function is_klarna_payments_supported_country($country_code)
    {
    }
    /**
     * Is Square country supported
     *
     * @param string $country_code Country code.
     */
    protected function is_square_supported_country($country_code)
    {
    }
    /**
     * Is eWAY Payments country supported
     *
     * @param string $country_code Country code.
     */
    protected function is_eway_payments_supported_country($country_code)
    {
    }
    /**
     * Is ShipStation country supported
     *
     * @param string $country_code Country code.
     */
    protected function is_shipstation_supported_country($country_code)
    {
    }
    /**
     * Is WooCommerce Services shipping label country supported
     *
     * @param string $country_code Country code.
     */
    protected function is_wcs_shipping_labels_supported_country($country_code)
    {
    }
    /**
     * Helper method to retrieve the current user's email address.
     *
     * @return string Email address
     */
    protected function get_current_user_email()
    {
    }
    /**
     * Array of all possible "in cart" gateways that can be offered.
     *
     * @return array
     */
    protected function get_wizard_available_in_cart_payment_gateways()
    {
    }
    /**
     * Simple array of "in cart" gateways to show in wizard.
     *
     * @return array
     */
    public function get_wizard_in_cart_payment_gateways()
    {
    }
    /**
     * Simple array of "manual" gateways to show in wizard.
     *
     * @return array
     */
    protected function get_wizard_manual_payment_gateways()
    {
    }
    /**
     * Display service item in list.
     *
     * @param int   $item_id Item ID.
     * @param array $item_info Item info array.
     */
    public function display_service_item($item_id, $item_info)
    {
    }
    /**
     * Is it a featured service?
     *
     * @param array $service Service info array.
     * @return boolean
     */
    public function is_featured_service($service)
    {
    }
    /**
     * Is this a non featured service?
     *
     * @param array $service Service info array.
     * @return boolean
     */
    public function is_not_featured_service($service)
    {
    }
    /**
     * Payment Step.
     */
    public function wc_setup_payment()
    {
    }
    /**
     * Payment Step save.
     */
    public function wc_setup_payment_save()
    {
    }
    protected function display_recommended_item($item_info)
    {
    }
    /**
     * Recommended step
     */
    public function wc_setup_recommended()
    {
    }
    /**
     * Recommended step save.
     */
    public function wc_setup_recommended_save()
    {
    }
    /**
     * Go to the next step if Jetpack was connected.
     */
    protected function wc_setup_activate_actions()
    {
    }
    protected function wc_setup_activate_get_feature_list()
    {
    }
    protected function wc_setup_activate_get_feature_list_str()
    {
    }
    /**
     * Activate step.
     */
    public function wc_setup_activate()
    {
    }
    protected function get_all_activate_errors()
    {
    }
    protected function get_activate_error_message($code = '')
    {
    }
    /**
     * Activate step save.
     *
     * Install, activate, and launch connection flow for Jetpack.
     */
    public function wc_setup_activate_save()
    {
    }
    /**
     * Final step.
     */
    public function wc_setup_ready()
    {
    }
}