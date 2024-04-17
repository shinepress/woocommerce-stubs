<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTypesController class.
 *
 * @since 5.0.0
 * @internal
 */
final class BlockTypesController
{
    /**
     * Instance of the asset API.
     *
     * @var AssetApi
     */
    protected $asset_api;
    /**
     * Instance of the asset data registry.
     *
     * @var AssetDataRegistry
     */
    protected $asset_data_registry;
    /**
     * Constructor.
     *
     * @param AssetApi          $asset_api Instance of the asset API.
     * @param AssetDataRegistry $asset_data_registry Instance of the asset data registry.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Assets\Api $asset_api, \Automattic\WooCommerce\Blocks\Assets\AssetDataRegistry $asset_data_registry)
    {
    }
    /**
     * Initialize class features.
     */
    protected function init()
    {
    }
    /**
     * Check if the current post has a block with a specific attribute value.
     *
     * @param string $block_id The block ID to check for.
     * @param string $attribute The attribute to check.
     * @param string $value The value to check for.
     * @return boolean
     */
    private function has_block_variation($block_id, $attribute, $value)
    {
    }
    /**
     * Register blocks, hooking up assets and render functions as needed.
     */
    public function register_blocks()
    {
    }
    /**
     * Add data- attributes to blocks when rendered if the block is under the woocommerce/ namespace.
     *
     * @param string $content Block content.
     * @param array  $block Parsed block data.
     * @return string
     */
    public function add_data_attributes($content, $block)
    {
    }
    /**
     * Adds a redirect field to the login form so blocks can redirect users after login.
     */
    public function redirect_to_field()
    {
    }
    /**
     * Hide legacy widgets with a feature complete block equivalent in the inserter
     * and prevent them from showing as an option in the Legacy Widget block.
     *
     * @param array $widget_types An array of widgets hidden in core.
     * @return array $widget_types An array inluding the WooCommerce widgets to hide.
     */
    public function hide_legacy_widgets_with_block_equivalent($widget_types)
    {
    }
    /**
     * Delete product transients when a product is deleted.
     */
    public function delete_product_transients()
    {
    }
    /**
     * Get list of block types.
     *
     * @return array
     */
    protected function get_block_types()
    {
    }
}