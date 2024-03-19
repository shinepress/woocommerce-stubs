<?php


/**
 * WC_Admin_Addons Class.
 */
class WC_Admin_Addons
{
    /**
     * Get featured for the addons screen
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @return array of objects
     */
    public static function get_featured()
    {
    }
    /**
     * Render featured products and banners using WCCOM's the Featured 2.0 Endpoint
     *
     * @return void
     */
    public static function render_featured()
    {
    }
    /**
     * Fetch featured products from WCCOM's the Featured 2.0 Endpoint and cache the data for a day.
     *
     * @return array|WP_Error
     */
    public static function fetch_featured()
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
     * @return object|WP_Error  Object with products and promotions properties, or WP_Error
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
     * @deprecated 5.9.0 No longer used in In-App Marketplace
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
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     */
    public static function output_storefront_button()
    {
    }
    /**
     * Handles the outputting of a banner block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Banner data.
     */
    public static function output_banner_block($block)
    {
    }
    /**
     * Handles the outputting of a column.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Column data.
     */
    public static function output_column($block)
    {
    }
    /**
     * Handles the outputting of a column block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Column block data.
     */
    public static function output_column_block($block)
    {
    }
    /**
     * Handles the outputting of a small light block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Block data.
     */
    public static function output_small_light_block($block)
    {
    }
    /**
     * Handles the outputting of a small dark block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Block data.
     */
    public static function output_small_dark_block($block)
    {
    }
    /**
     * Handles the outputting of the WooCommerce Services banner block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Block data.
     */
    public static function output_wcs_banner_block($block = array())
    {
    }
    /**
     * Handles the outputting of the WooCommerce Pay banner block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
     *
     * @param object $block Block data.
     */
    public static function output_wcpay_banner_block($block = array())
    {
    }
    /**
     * Output the HTML for the promotion block.
     *
     * @param array $promotion Array of promotion block data.
     * @return void
     */
    public static function output_search_promotion_block(array $promotion)
    {
    }
    /**
     * Handles the output of a full-width block.
     *
     * @deprecated 5.9.0 No longer used in In-App Marketplace
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
     * Handles the outputting of featured page
     *
     * @param array $blocks Featured page's blocks.
     */
    private static function output_featured($blocks)
    {
    }
    /**
     * Render a group block including products
     *
     * @param mixed $block Block of the page for rendering.
     *
     * @return void
     */
    private static function output_group($block)
    {
    }
    /**
     * Render a banner contains a product
     *
     * @param mixed $block Block of the page for rendering.
     *
     * @return void
     */
    private static function output_banner($block)
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
     * Output HTML for a promotion action.
     *
     * @param array $action Array of action properties.
     *
     * @return void
     */
    public static function output_promotion_action(array $action)
    {
    }
    /**
     * Output HTML for a promotion action if data couldn't be fetched.
     *
     * @param string $message Error message.
     *
     * @return void
     */
    public static function output_empty($message = '')
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
     * @param string $section Optional. Extensions tab.
     *
     * @return void
     */
    public static function install_woocommerce_payments_addon($section = '_featured')
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
     * Determine which class should be used for a rating star:
     * - golden
     * - half-filled (50/50 golden and gray)
     * - gray
     *
     * Consider ratings from 3.0 to 4.0 as an example
     * 3.0 will produce 3 stars
     * 3.1 to 3.5 will produce 3 stars and a half star
     * 3.6 to 4.0 will product 4 stars
     *
     * @param float $rating Rating of a product.
     * @param int   $index  Index of a star in a row.
     *
     * @return string CSS class to use.
     */
    public static function get_star_class($rating, $index)
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
     * Format the promotion data ready for display, ie fetch locales and actions.
     *
     * @param array $promotions Array of promotoin objects.
     * @return array Array of formatted promotions ready for output.
     */
    public static function format_promotions(array $promotions): array
    {
    }
    /**
     * Map data from different endpoints to a universal format
     *
     * Search and featured products has a slightly different products' field names.
     * Mapping converts different data structures into a universal one for further processing.
     *
     * @param mixed $data Product Card Data.
     *
     * @return object Converted data.
     */
    public static function map_product_card_data($data)
    {
    }
    /**
     * Render a product card
     *
     * There's difference in data structure (e.g. field names) between endpoints such as search and
     * featured. Inner mapping helps to use universal field names for further work.
     *
     * @param mixed  $data       Product data.
     * @param string $block_type Block type that's different from the default product card, e.g. a banner.
     *
     * @return void
     */
    public static function render_product_card($data, $block_type = \null)
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
     * Make wp_safe_remote_get request to Woo.com endpoint.
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