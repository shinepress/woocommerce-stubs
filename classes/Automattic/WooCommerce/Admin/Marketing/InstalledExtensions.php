<?php

namespace Automattic\WooCommerce\Admin\Marketing;

/**
 * Installed Marketing Extensions class.
 */
class InstalledExtensions
{
    /**
     * Gets an array of plugin data for the "Installed marketing extensions" card.
     *
     * Valid extensions statuses are: installed, activated, configured
     */
    public static function get_data()
    {
    }
    /**
     * Get allowed plugins.
     *
     * @return array
     */
    public static function get_allowed_plugins()
    {
    }
    /**
     * Get AutomateWoo extension data.
     *
     * @return array|bool
     */
    protected static function get_automatewoo_extension_data()
    {
    }
    /**
     * Get MailChimp extension data.
     *
     * @return array|bool
     */
    protected static function get_mailchimp_extension_data()
    {
    }
    /**
     * Get Facebook extension data.
     *
     * @return array|bool
     */
    protected static function get_facebook_extension_data()
    {
    }
    /**
     * Get Pinterest extension data.
     *
     * @return array|bool
     */
    protected static function get_pinterest_extension_data()
    {
    }
    /**
     * Get Google extension data.
     *
     * @return array|bool
     */
    protected static function get_google_extension_data()
    {
    }
    /**
     * Get Hubspot extension data.
     *
     * @return array|bool
     */
    protected static function get_hubspot_extension_data()
    {
    }
    /**
     * Get Amazon / Ebay extension data.
     *
     * @return array|bool
     */
    protected static function get_amazon_ebay_extension_data()
    {
    }
    /**
     * Get MailPoet extension data.
     *
     * @return array|bool
     */
    protected static function get_mailpoet_extension_data()
    {
    }
    /**
     * Get an array of basic data for a given extension.
     *
     * @param string $slug Plugin slug.
     *
     * @return array|false
     */
    protected static function get_extension_base_data($slug)
    {
    }
}