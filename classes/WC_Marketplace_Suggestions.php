<?php


/**
 * Marketplace suggestions core behaviour.
 */
class WC_Marketplace_Suggestions
{
    /**
     * Initialise.
     */
    public static function init()
    {
    }
    /**
     * Product data tabs filter
     *
     * Adds a new Extensions tab to the product data meta box.
     *
     * @param array $tabs Existing tabs.
     *
     * @return array
     */
    public static function product_data_tabs($tabs)
    {
    }
    /**
     * Render additional panels in the proudct data metabox.
     */
    public static function product_data_panels()
    {
    }
    /**
     * Return an array of suggestions the user has dismissed.
     */
    public static function get_dismissed_suggestions()
    {
    }
    /**
     * POST handler for adding a dismissed suggestion.
     */
    public static function post_add_dismissed_suggestion_handler()
    {
    }
    /**
     * Render suggestions containers in products list empty state.
     */
    public static function render_products_list_empty_state()
    {
    }
    /**
     * Render suggestions containers in orders list empty state.
     */
    public static function render_orders_list_empty_state()
    {
    }
    /**
     * Render a suggestions container element, with the specified context.
     *
     * @param string $context Suggestion context name (rendered as a css class).
     */
    public static function render_suggestions_container($context)
    {
    }
    /**
     * Should suggestions be displayed?
     *
     * @param string $screen_id The current admin screen.
     *
     * @return bool
     */
    public static function show_suggestions_for_screen($screen_id)
    {
    }
    /**
     * Should suggestions be displayed?
     *
     * @return bool
     */
    public static function allow_suggestions()
    {
    }
    /**
     * Pull suggestion data from remote endpoint & cache in a transient.
     *
     * @return array of json API data
     */
    public static function get_suggestions_api_data()
    {
    }
}