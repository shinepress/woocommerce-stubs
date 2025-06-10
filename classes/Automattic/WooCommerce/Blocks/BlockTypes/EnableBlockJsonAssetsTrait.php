<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

trait EnableBlockJsonAssetsTrait
{
    /**
     * Disable the script handle for this block type. We use block.json to load the script.
     *
     * @param string|null $key The key of the script to get.
     * @return null
     */
    // phpcs:ignore
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Disable the style handle for this block type. We use block.json to load the style.
     *
     * @return null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Disable the editor style handle for this block type. We use block.json to load the style.
     *
     * @return null
     */
    protected function get_block_type_editor_style()
    {
    }
}