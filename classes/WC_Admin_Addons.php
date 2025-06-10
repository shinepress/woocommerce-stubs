<?php


/**
 * WC_Admin_Addons Class.
 */
class WC_Admin_Addons
{
    /**
     * Fetch featured products from WCCOM's the Featured 3.0 Endpoint and cache the data for a day.
     *
     * @return array|WP_Error
     */
    public static function fetch_featured()
    {
    }
    /**
     * Fetch markup and other info for the preview of a product.
     *
     * @param int $product_id The ID of the product to fetch preview for.
     * @return array|WP_Error Preview data or error object.
     */
    public static function fetch_product_preview(int $product_id)
    {
    }
    /**
     * Check if the error is due to an SSL error
     *
     * @param string $error_message Error message.
     *
     * @return bool True if SSL error, false otherwise
     */
    public static function is_ssl_error($error_message)
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
     * Process requests to legacy marketplace menu and redirect to correct in-app pages.
     *
     * @return void
     */
    public static function handle_legacy_marketplace_redirects()
    {
    }
    /**
     * We're displaying page=wc-addons and page=wc-addons&section=helper as two separate pages.
     * When we're on those pages, add body classes to distinguishe them.
     *
     * @param string $admin_body_class Unfiltered body class.
     *
     * @return string Body class with added class for Marketplace or My Subscriptions page.
     */
    public static function filter_admin_body_classes(string $admin_body_class = ''): string
    {
    }
    /**
     * Take an action object and return the URL based on properties of the action.
     *
     * @param object $action Action object.
     * @return string URL.
     */
    public static function get_action_url($action): string
    {
    }
    /**
     * Retrieves the locale data from a transient.
     *
     * Transient value is an array of locale data in the following format:
     * array(
     *    'en_US' => ...,
     *    'fr_FR' => ...,
     * )
     *
     * If the transient does not exist, does not have a value, or has expired,
     * then the return value will be false.
     *
     * @param string $transient Transient name. Expected to not be SQL-escaped.
     * @param string $locale  Locale to retrieve.
     * @return mixed Value of transient.
     */
    private static function get_locale_data_from_transient($transient, $locale)
    {
    }
    /**
     * Sets the locale data in a transient.
     *
     * Transient value is an array of locale data in the following format:
     * array(
     *    'en_US' => ...,
     *    'fr_FR' => ...,
     * )
     *
     * @param string $transient  Transient name. Expected to not be SQL-escaped.
     *                           Must be 172 characters or fewer in length.
     * @param mixed  $value      Transient value. Must be serializable if non-scalar.
     *                           Expected to not be SQL-escaped.
     * @param string $locale  Locale to set.
     * @param int    $expiration Optional. Time until expiration in seconds. Default 0 (no expiration).
     * @return bool True if the value was set, false otherwise.
     */
    private static function set_locale_data_in_transient($transient, $value, $locale, $expiration = 0)
    {
    }
    /**
     * Process API response from WooCommerce.com endpoints.
     *
     * @param array|WP_Error $response    The response from the API request.
     * @param string         $context     Context for error messages (e.g. 'featured', 'product-preview').
     * @param bool           $associative Whether to decode the JSON as an associative array.
     *
     * @return array|WP_Error Processed API data or WP_Error on failure.
     */
    private static function process_api_response($response, $context = 'api', $associative = \false)
    {
    }
    /**
     * Make wp_safe_remote_get request to WooCommerce.com endpoint.
     * Optionally pass user auth token, locale or country.
     *
     * @param string $url     URL to request.
     * @param ?array $options Options for the request. For example, to pass auth token, locale and country,
     *                        pass array( 'auth' => true, 'locale' => true, 'country' => true, ).
     *
     * @return array|WP_Error
     */
    public static function fetch($url, $options = array())
    {
    }
}