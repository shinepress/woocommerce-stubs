<?php


/**
 * WC_Helper_File_Headers Class
 *
 * Adds some filters to be able to parse the `Woo` header from locally
 * installed Woo plugins and themes
 */
class WC_Helper_File_Headers
{
    /**
     * Load functions adds the `extra_headers` filter on the `extra_plugin_headers`
     * and `extra_theme_headers` hooks.
     */
    public static function load()
    {
    }
    /**
     * Additional theme style.css and plugin file headers.
     *
     * Format: Woo: product_id:file_id
     */
    public static function extra_headers($headers)
    {
    }
}