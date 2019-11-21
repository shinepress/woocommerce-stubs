<?php


/**
 * Main WooCommerce Class.
 *
 * @class WooCommerce
 */
final class WooCommerce
{
    /**
     * WooCommerce version.
     *
     * @var string
     */
    public $version = '3.7.1';
    /**
     * The single instance of the class.
     *
     * @var WooCommerce
     * @since 2.1
     */
    protected static $_instance = \null;
    /**
     * Session instance.
     *
     * @var WC_Session|WC_Session_Handler
     */
    public $session = \null;
    /**
     * Query instance.
     *
     * @var WC_Query
     */
    public $query = \null;
    /**
     * Product factory instance.
     *
     * @var WC_Product_Factory
     */
    public $product_factory = \null;
    /**
     * Countries instance.
     *
     * @var WC_Countries
     */
    public $countries = \null;
    /**
     * Integrations instance.
     *
     * @var WC_Integrations
     */
    public $integrations = \null;
    /**
     * Cart instance.
     *
     * @var WC_Cart
     */
    public $cart = \null;
    /**
     * Customer instance.
     *
     * @var WC_Customer
     */
    public $customer = \null;
    /**
     * Order factory instance.
     *
     * @var WC_Order_Factory
     */
    public $order_factory = \null;
    /**
     * Structured data instance.
     *
     * @var WC_Structured_Data
     */
    public $structured_data = \null;
    /**
     * Array of deprecated hook handlers.
     *
     * @var array of WC_Deprecated_Hooks
     */
    public $deprecated_hook_handlers = array();
    /**
     * Main WooCommerce Instance.
     *
     * Ensures only one instance of WooCommerce is loaded or can be loaded.
     *
     * @since 2.1
     * @static
     * @see WC()
     * @return WooCommerce - Main instance.
     */
    public static function instance()
    {
    }
    /**
     * Cloning is forbidden.
     *
     * @since 2.1
     */
    public function __clone()
    {
    }
    /**
     * Unserializing instances of this class is forbidden.
     *
     * @since 2.1
     */
    public function __wakeup()
    {
    }
    /**
     * Auto-load in-accessible properties on demand.
     *
     * @param mixed $key Key name.
     * @return mixed
     */
    public function __get($key)
    {
    }
    /**
     * WooCommerce Constructor.
     */
    public function __construct()
    {
    }
    /**
     * When WP has loaded all plugins, trigger the `woocommerce_loaded` hook.
     *
     * This ensures `woocommerce_loaded` is called only after all other plugins
     * are loaded, to avoid issues caused by plugin directory naming changing
     * the load order. See #21524 for details.
     *
     * @since 3.6.0
     */
    public function on_plugins_loaded()
    {
    }
    /**
     * Hook into actions and filters.
     *
     * @since 2.3
     */
    private function init_hooks()
    {
    }
    /**
     * Ensures fatal errors are logged so they can be picked up in the status report.
     *
     * @since 3.2.0
     */
    public function log_errors()
    {
    }
    /**
     * Define WC Constants.
     */
    private function define_constants()
    {
    }
    /**
     * Register custom tables within $wpdb object.
     */
    private function define_tables()
    {
    }
    /**
     * Define constant if not already set.
     *
     * @param string      $name  Constant name.
     * @param string|bool $value Constant value.
     */
    private function define($name, $value)
    {
    }
    /**
     * Returns true if the request is a non-legacy REST API request.
     *
     * Legacy REST requests should still run some extra code for backwards compatibility.
     *
     * @todo: replace this function once core WP function is available: https://core.trac.wordpress.org/ticket/42061.
     *
     * @return bool
     */
    public function is_rest_api_request()
    {
    }
    /**
     * What type of request is this?
     *
     * @param  string $type admin, ajax, cron or frontend.
     * @return bool
     */
    private function is_request($type)
    {
    }
    /**
     * Include required core files used in admin and on the frontend.
     */
    public function includes()
    {
    }
    /**
     * Include classes for theme support.
     *
     * @since 3.3.0
     */
    private function theme_support_includes()
    {
    }
    /**
     * Include required frontend files.
     */
    public function frontend_includes()
    {
    }
    /**
     * Function used to Init WooCommerce Template Functions - This makes them pluggable by plugins and themes.
     */
    public function include_template_functions()
    {
    }
    /**
     * Init WooCommerce when WordPress Initialises.
     */
    public function init()
    {
    }
    /**
     * Load Localisation files.
     *
     * Note: the first-loaded translation file overrides any following ones if the same translation is present.
     *
     * Locales found in:
     *      - WP_LANG_DIR/woocommerce/woocommerce-LOCALE.mo
     *      - WP_LANG_DIR/plugins/woocommerce-LOCALE.mo
     */
    public function load_plugin_textdomain()
    {
    }
    /**
     * Ensure theme and server variable compatibility and setup image sizes.
     */
    public function setup_environment()
    {
    }
    /**
     * Ensure post thumbnail support is turned on.
     */
    private function add_thumbnail_support()
    {
    }
    /**
     * Add WC Image sizes to WP.
     *
     * As of 3.3, image sizes can be registered via themes using add_theme_support for woocommerce
     * and defining an array of args. If these are not defined, we will use defaults. This is
     * handled in wc_get_image_size function.
     *
     * 3.3 sizes:
     *
     * woocommerce_thumbnail - Used in product listings. We assume these work for a 3 column grid layout.
     * woocommerce_single - Used on single product pages for the main image.
     *
     * @since 2.3
     */
    public function add_image_sizes()
    {
    }
    /**
     * Get the plugin url.
     *
     * @return string
     */
    public function plugin_url()
    {
    }
    /**
     * Get the plugin path.
     *
     * @return string
     */
    public function plugin_path()
    {
    }
    /**
     * Get the template path.
     *
     * @return string
     */
    public function template_path()
    {
    }
    /**
     * Get Ajax URL.
     *
     * @return string
     */
    public function ajax_url()
    {
    }
    /**
     * Return the WC API URL for a given request.
     *
     * @param string    $request Requested endpoint.
     * @param bool|null $ssl     If should use SSL, null if should auto detect. Default: null.
     * @return string
     */
    public function api_request_url($request, $ssl = \null)
    {
    }
    /**
     * Load & enqueue active webhooks.
     *
     * @since 2.2
     */
    private function load_webhooks()
    {
    }
    /**
     * Initialize the customer and cart objects and setup customer saving on shutdown.
     *
     * @since 3.6.4
     * @return void
     */
    public function initialize_cart()
    {
    }
    /**
     * Initialize the session class.
     *
     * @since 3.6.4
     * @return void
     */
    public function initialize_session()
    {
    }
    /**
     * Set tablenames inside WPDB object.
     */
    public function wpdb_table_fix()
    {
    }
    /**
     * Ran when any plugin is activated.
     *
     * @since 3.6.0
     * @param string $filename The filename of the activated plugin.
     */
    public function activated_plugin($filename)
    {
    }
    /**
     * Ran when any plugin is deactivated.
     *
     * @since 3.6.0
     * @param string $filename The filename of the deactivated plugin.
     */
    public function deactivated_plugin($filename)
    {
    }
    /**
     * Get queue instance.
     *
     * @return WC_Queue_Interface
     */
    public function queue()
    {
    }
    /**
     * Get Checkout Class.
     *
     * @return WC_Checkout
     */
    public function checkout()
    {
    }
    /**
     * Get gateways class.
     *
     * @return WC_Payment_Gateways
     */
    public function payment_gateways()
    {
    }
    /**
     * Get shipping class.
     *
     * @return WC_Shipping
     */
    public function shipping()
    {
    }
    /**
     * Email Class.
     *
     * @return WC_Emails
     */
    public function mailer()
    {
    }
    /**
     * Check if plugin assets are built and minified
     *
     * @return bool
     */
    public function build_dependencies_satisfied()
    {
    }
    /**
     * Output a admin notice when build dependencies not met.
     *
     * @return void
     */
    public function build_dependencies_notice()
    {
    }
}