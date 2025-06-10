<?php

namespace Automattic\WooCommerce\Internal\CostOfGoodsSold;

/**
 * Main controller for the Cost of Goods Sold feature.
 */
class CostOfGoodsSoldController implements \Automattic\WooCommerce\Internal\RegisterHooksInterface
{
    /**
     * The instance of FeaturesController to use.
     *
     * @var FeaturesController
     */
    private \Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller;
    /**
     * Register hooks.
     */
    public function register()
    {
    }
    /**
     * Initialize the instance, runs when the instance is created by the dependency injection container.
     *
     * @internal
     * @param FeaturesController $features_controller The instance of FeaturesController to use.
     */
    final public function init(\Automattic\WooCommerce\Internal\Features\FeaturesController $features_controller)
    {
    }
    /**
     * Is the Cost of Goods Sold engine enabled?
     *
     * @return bool True if the engine is enabled, false otherwise.
     */
    public function feature_is_enabled(): bool
    {
    }
    /**
     * Add the feature information for the features settings page.
     *
     * @param FeaturesController $features_controller The instance of FeaturesController to use.
     *
     * @internal For exclusive usage of WooCommerce core, backwards compatibility not guaranteed.
     */
    public function add_feature_definition($features_controller)
    {
    }
    /**
     * Add the entry for "add/remove COGS value column to/from the product meta lookup table" to the WooCommerce admin tools.
     *
     * @internal Hook handler, not to be explicitly used from outside the class.
     *
     * @param array $tools_array Array to add the tool to.
     * @return array Updated tools array.
     */
    public function add_debug_tools_entry(array $tools_array): array
    {
    }
    /**
     * Handler for the "add COGS value column to the product meta lookup table" admin tool.
     *
     * @internal Tool callback, not to be explicitly used from outside the class.
     */
    public function generate_lookup_cogs_columns()
    {
    }
    /**
     * Handler for the "remove COGS value column to the product meta lookup table" admin tool.
     *
     * @internal Tool callback, not to be explicitly used from outside the class.
     */
    public function remove_lookup_cogs_columns()
    {
    }
    /**
     * Tells if the COGS value column exists in the product meta lookup table.
     *
     * @return bool True if the column exists, false otherwise.
     */
    public function product_meta_lookup_table_cogs_value_columns_exist(): bool
    {
    }
    /**
     * Get the tooltip text for the COGS value field in the product editor.
     *
     * @param bool $for_variable_products True to get the value for variable products, false for other types of products.
     * @return string The string to use as tooltip (translated but not escaped).
     */
    public function get_general_cost_edit_field_tooltip(bool $for_variable_products)
    {
    }
}