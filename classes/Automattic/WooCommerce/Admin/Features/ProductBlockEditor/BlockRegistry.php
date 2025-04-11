<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Product block registration and style registration functionality.
 */
class BlockRegistry
{
    /**
     * Generic blocks directory.
     */
    const GENERIC_BLOCKS_DIR = 'product-editor/blocks/generic';
    /**
     * Product fields blocks directory.
     */
    const PRODUCT_FIELDS_BLOCKS_DIR = 'product-editor/blocks/product-fields';
    /**
     * Array of all available generic blocks.
     */
    const GENERIC_BLOCKS = array('woocommerce/conditional', 'woocommerce/product-checkbox-field', 'woocommerce/product-collapsible', 'woocommerce/product-radio-field', 'woocommerce/product-pricing-field', 'woocommerce/product-section', 'woocommerce/product-section-description', 'woocommerce/product-subsection', 'woocommerce/product-subsection-description', 'woocommerce/product-details-section-description', 'woocommerce/product-tab', 'woocommerce/product-toggle-field', 'woocommerce/product-taxonomy-field', 'woocommerce/product-text-field', 'woocommerce/product-text-area-field', 'woocommerce/product-number-field', 'woocommerce/product-linked-list-field', 'woocommerce/product-select-field', 'woocommerce/product-notice-field');
    /**
     * Array of all available product fields blocks.
     */
    const PRODUCT_FIELDS_BLOCKS = array('woocommerce/product-catalog-visibility-field', 'woocommerce/product-custom-fields', 'woocommerce/product-custom-fields-toggle-field', 'woocommerce/product-description-field', 'woocommerce/product-downloads-field', 'woocommerce/product-images-field', 'woocommerce/product-inventory-email-field', 'woocommerce/product-sku-field', 'woocommerce/product-name-field', 'woocommerce/product-regular-price-field', 'woocommerce/product-sale-price-field', 'woocommerce/product-schedule-sale-fields', 'woocommerce/product-shipping-class-field', 'woocommerce/product-shipping-dimensions-fields', 'woocommerce/product-summary-field', 'woocommerce/product-tag-field', 'woocommerce/product-inventory-quantity-field', 'woocommerce/product-variation-items-field', 'woocommerce/product-password-field', 'woocommerce/product-list-field', 'woocommerce/product-has-variations-notice', 'woocommerce/product-single-variation-notice');
    /**
     * Singleton instance.
     *
     * @var BlockRegistry
     */
    private static $instance = null;
    /**
     * Get the singleton instance.
     */
    public static function get_instance(): \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\BlockRegistry
    {
    }
    /**
     * Constructor
     */
    protected function __construct()
    {
    }
    /**
     * Get a file path for a given block file.
     *
     * @param string $path File path.
     * @param string $dir File directory.
     */
    private function get_file_path($path, $dir)
    {
    }
    /**
     * Register all the product blocks.
     */
    private function register_product_blocks()
    {
    }
    /**
     * Register product related block categories.
     *
     * @param array[]                 $block_categories Array of categories for block types.
     * @param WP_Block_Editor_Context $editor_context   The current block editor context.
     */
    public function register_categories($block_categories, $editor_context)
    {
    }
    /**
     * Get the block name without the "woocommerce/" prefix.
     *
     * @param string $block_name Block name.
     *
     * @return string
     */
    private function remove_block_prefix($block_name)
    {
    }
    /**
     * Augment the attributes of a block by adding attributes that are used by the product editor.
     *
     * @param array $attributes Block attributes.
     */
    private function augment_attributes($attributes)
    {
    }
    /**
     * Checks for block attribute role support.
     */
    private function has_role_support()
    {
    }
    /**
     * Augment the uses_context of a block by adding attributes that are used by the product editor.
     *
     * @param array $uses_context Block uses_context.
     */
    private function augment_uses_context($uses_context)
    {
    }
    /**
     * Register a single block.
     *
     * @param string $block_name Block name.
     * @param string $block_dir Block directory.
     *
     * @return WP_Block_Type|false The registered block type on success, or false on failure.
     */
    private function register_block($block_name, $block_dir)
    {
    }
    /**
     * Check if a block is registered.
     *
     * @param string $block_name Block name.
     */
    public function is_registered($block_name): bool
    {
    }
    /**
     * Unregister a block.
     *
     * @param string $block_name Block name.
     */
    public function unregister($block_name)
    {
    }
    /**
     * Register a block type from metadata stored in the block.json file.
     *
     * @param string $file_or_folder Path to the JSON file with metadata definition for the block or
     * path to the folder where the `block.json` file is located.
     *
     * @return \WP_Block_Type|false The registered block type on success, or false on failure.
     */
    public function register_block_type_from_metadata($file_or_folder)
    {
    }
}