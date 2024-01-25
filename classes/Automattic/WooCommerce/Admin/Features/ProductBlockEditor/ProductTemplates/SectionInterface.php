<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Interface for section containers, which contain sub-sections and blocks.
 */
interface SectionInterface extends \Automattic\WooCommerce\Admin\BlockTemplates\BlockContainerInterface
{
    /**
     * Adds a new sub-section to the section.
     *
     * @param array $block_config block config.
     * @return SectionInterface new block section.
     */
    public function add_section(array $block_config): \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\SectionInterface;
    /**
     * Adds a new block to the section.
     *
     * @param array $block_config block config.
     */
    public function add_block(array $block_config): \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface;
}