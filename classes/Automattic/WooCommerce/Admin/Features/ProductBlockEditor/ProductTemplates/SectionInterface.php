<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Interface for block containers.
 */
interface SectionInterface extends \Automattic\WooCommerce\Admin\BlockTemplates\BlockContainerInterface
{
    /**
     * Adds a new section block.
     *
     * @param array $block_config block config.
     * @return SectionInterface new block section.
     */
    public function add_section(array $block_config): \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\SectionInterface;
    /**
     * Adds a new block to the section block.
     *
     * @param array $block_config block config.
     */
    public function add_block(array $block_config): \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface;
}