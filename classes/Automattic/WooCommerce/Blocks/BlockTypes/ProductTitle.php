<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductTitle class.
 */
class ProductTitle extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-title';
    /**
     * API version name.
     *
     * @var string
     */
    protected $api_version = '3';
    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
    {
    }
}