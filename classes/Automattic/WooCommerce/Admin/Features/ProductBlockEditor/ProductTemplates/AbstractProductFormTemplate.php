<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Block template class.
 */
abstract class AbstractProductFormTemplate extends \Automattic\WooCommerce\Internal\Admin\BlockTemplates\AbstractBlockTemplate implements \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\ProductFormTemplateInterface
{
    /**
     * Get the template area.
     */
    public function get_area(): string
    {
    }
    /**
     * Get a group block by ID.
     *
     * @param string $group_id The group block ID.
     * @throws \UnexpectedValueException If block is not of type GroupInterface.
     */
    public function get_group_by_id(string $group_id): ?\Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\GroupInterface
    {
    }
    /**
     * Get a section block by ID.
     *
     * @param string $section_id The section block ID.
     * @throws \UnexpectedValueException If block is not of type SectionInterface.
     */
    public function get_section_by_id(string $section_id): ?\Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\SectionInterface
    {
    }
    /**
     * Get a block by ID.
     *
     * @param string $block_id The block block ID.
     */
    public function get_block_by_id(string $block_id): ?\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
    {
    }
    /**
     * Add a custom block type to this template.
     *
     * @param array $block_config The block data.
     */
    public function add_group(array $block_config): \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\GroupInterface
    {
    }
}