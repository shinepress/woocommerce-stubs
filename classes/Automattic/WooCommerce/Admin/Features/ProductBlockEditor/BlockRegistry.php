<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor;

/**
 * Product block registration and style registration functionality.
 */
class BlockRegistry
{
    /**
     * The directory where blocks are stored after build.
     */
    const BLOCKS_DIR = 'product-editor/blocks';
    /**
     * Array of all available product blocks.
     */
    const PRODUCT_BLOCKS = ['woocommerce/product-name', 'woocommerce/product-pricing', 'woocommerce/product-section', 'woocommerce/product-tab'];
    /**
     * Get a file path for a given block file.
     *
     * @param string $path File path.
     */
    private function get_file_path($path)
    {
    }
    /**
     * Initialize all blocks.
     */
    public function init()
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
     * Register a single block.
     *
     * @param string $block_name Block name.
     *
     * @return WP_Block_Type|false The registered block type on success, or false on failure.
     */
    private function register_block($block_name)
    {
    }
}