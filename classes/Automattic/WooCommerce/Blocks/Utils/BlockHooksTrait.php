<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * BlockHooksTrait
 *
 * Shared functionality for using the Block Hooks API with WooCommerce Blocks.
 */
trait BlockHooksTrait
{
    /**
     * Callback for `hooked_block_types` to auto-inject the mini-cart block into headers after navigation.
     *
     * @param array                    $hooked_blocks An array of block slugs hooked into a given context.
     * @param string                   $position      Position of the block insertion point.
     * @param string                   $anchor_block  The block acting as the anchor for the inserted block.
     * @param \WP_Block_Template|array $context       Where the block is embedded.
     * @since 8.6.0
     * @return array An array of block slugs hooked into a given context.
     */
    public function register_hooked_block($hooked_blocks, $position, $anchor_block, $context)
    {
    }
    /**
     * Checks if the provided context contains a the block already.
     *
     * @param array|\WP_Block_Template $context Where the block is embedded.
     * @return boolean
     */
    protected function has_block_in_content($context)
    {
    }
    /**
     * Given a provided context, returns whether the context refers to header content.
     *
     * @param array|\WP_Block_Template $context Where the block is embedded.
     * @param string                   $area The area to check against before inserting.
     * @return boolean
     */
    protected function is_template_part_or_pattern($context, $area)
    {
    }
    /**
     * Returns whether the pattern is excluded or not
     *
     * @param array|\WP_Block_Template $context Where the block is embedded.
     * @param array                    $pattern_exclude_list List of pattern slugs to exclude.
     * @return boolean
     */
    protected function pattern_is_excluded($context, $pattern_exclude_list = array())
    {
    }
}