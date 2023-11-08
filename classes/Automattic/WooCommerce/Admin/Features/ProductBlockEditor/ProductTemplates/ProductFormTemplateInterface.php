<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Interface for block containers.
 */
interface ProductFormTemplateInterface extends \Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface
{
    /**
     * Adds a new group block.
     *
     * @param array $block_config block config.
     * @return BlockInterface new block section.
     */
    public function add_group(array $block_config): \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\GroupInterface;
    /**
     * Gets Group block by id.
     *
     * @param string $group_id group id.
     * @return GroupInterface|null
     */
    public function get_group_by_id(string $group_id): ?\Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\GroupInterface;
    /**
     * Gets Section block by id.
     *
     * @param string $section_id section id.
     * @return SectionInterface|null
     */
    public function get_section_by_id(string $section_id): ?\Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\SectionInterface;
    /**
     * Gets Block by id.
     *
     * @param string $block_id block id.
     * @return BlockInterface|null
     */
    public function get_block_by_id(string $block_id): ?\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface;
}