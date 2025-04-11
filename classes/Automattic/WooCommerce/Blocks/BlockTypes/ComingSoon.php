<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ComingSoon class.
 */
class ComingSoon extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'coming-soon';
    /**
     * It is necessary to register and enqueue assets during the render phase because we want to load assets only if the block has the content.
     */
    protected function register_block_type_assets()
    {
    }
    public function initialize()
    {
    }
    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @internal This prevents the block script being enqueued on all pages. It is only enqueued as needed. Note that
     * we intentionally do not pass 'script' to register_block_type.
     *
     * @param array    $attributes  Any attributes that currently are available from the block.
     * @param string   $content    The block content.
     * @param WP_Block $block    The block object.
     */
    protected function enqueue_assets(array $attributes, $content, $block)
    {
    }
    /**
     * Enqueue coming soon deprecated styles in site editor to support
     * coming soon templates created before WooCommerce 9.8.0
     */
    public function enqueue_block_assets()
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string|null
     */
    protected function get_block_type_script($key = null)
    {
    }
}