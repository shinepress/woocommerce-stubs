<?php

namespace Automattic\WooCommerce\Admin\Features\MarketingRecommendations;

/**
 * Marketing Recommendations engine.
 * This goes through the specs and gets marketing recommendations.
 */
class Init
{
    /**
     * Slug of the category specifying marketing extensions on the Woo.com store.
     *
     * @var string
     */
    const MARKETING_EXTENSION_CATEGORY_SLUG = 'marketing';
    /**
     * Slug of the subcategory specifying marketing channels on the Woo.com store.
     *
     * @var string
     */
    const MARKETING_CHANNEL_SUBCATEGORY_SLUG = 'sales-channels';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Delete the specs transient.
     */
    public static function delete_specs_transient()
    {
    }
    /**
     * Get specs or fetch remotely if they don't exist.
     */
    public static function get_specs()
    {
    }
    /**
     * Load recommended plugins from Woo.com
     *
     * @return array
     */
    public static function get_recommended_plugins(): array
    {
    }
    /**
     * Return only the recommended marketing channels from Woo.com.
     *
     * @return array
     */
    public static function get_recommended_marketing_channels(): array
    {
    }
    /**
     * Return all recommended marketing extensions EXCEPT the marketing channels from Woo.com.
     *
     * @return array
     */
    public static function get_recommended_marketing_extensions_excluding_channels(): array
    {
    }
    /**
     * Returns whether a plugin is a marketing extension.
     *
     * @param array $plugin_data The plugin properties returned by the API.
     *
     * @return bool
     */
    protected static function is_marketing_plugin(array $plugin_data): bool
    {
    }
    /**
     * Returns whether a plugin is a marketing channel.
     *
     * @param array $plugin_data The plugin properties returned by the API.
     *
     * @return bool
     */
    protected static function is_marketing_channel_plugin(array $plugin_data): bool
    {
    }
    /**
     * Convert an object to an array.
     * This is used to convert the specs to an array so that they can be returned by the API.
     *
     * @param mixed $obj Object to convert.
     * @return array
     */
    protected static function object_to_array($obj)
    {
    }
}