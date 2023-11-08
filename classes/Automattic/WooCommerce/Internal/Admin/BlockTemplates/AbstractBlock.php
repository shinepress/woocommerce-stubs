<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Block configuration used to specify blocks in BlockTemplate.
 */
class AbstractBlock implements \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
{
    /**
     * The block name.
     *
     * @var string
     */
    private $name;
    /**
     * The block ID.
     *
     * @var string
     */
    private $id;
    /**
     * The block order.
     *
     * @var int
     */
    private $order = 10;
    /**
     * The block attributes.
     *
     * @var array
     */
    private $attributes = [];
    /**
     * The block template that this block belongs to.
     *
     * @var BlockTemplate
     */
    private $root_template;
    /**
     * The parent container.
     *
     * @var ContainerInterface
     */
    private $parent;
    /**
     * Block constructor.
     *
     * @param array                        $config The block configuration.
     * @param BlockTemplateInterface       $root_template The block template that this block belongs to.
     * @param BlockContainerInterface|null $parent The parent block container.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If the parent block container does not belong to the same template as the block.
     */
    public function __construct(array $config, \Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface &$root_template, \Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface &$parent = null)
    {
    }
    /**
     * Validate block configuration.
     *
     * @param array                   $config The block configuration.
     * @param BlockTemplateInterface  $root_template The block template that this block belongs to.
     * @param ContainerInterface|null $parent The parent block container.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If the parent block container does not belong to the same template as the block.
     */
    protected function validate(array $config, \Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface &$root_template, \Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface &$parent = null)
    {
    }
    /**
     * Get the block name.
     */
    public function get_name(): string
    {
    }
    /**
     * Get the block ID.
     */
    public function get_id(): string
    {
    }
    /**
     * Get the block order.
     */
    public function get_order(): int
    {
    }
    /**
     * Set the block order.
     *
     * @param int $order The block order.
     */
    public function set_order(int $order)
    {
    }
    /**
     * Get the block attributes.
     */
    public function get_attributes(): array
    {
    }
    /**
     * Set the block attributes.
     *
     * @param array $attributes The block attributes.
     */
    public function set_attributes(array $attributes)
    {
    }
    /**
     * Get the template that this block belongs to.
     */
    public function &get_root_template(): \Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface
    {
    }
    /**
     * Get the parent block container.
     */
    public function &get_parent(): \Automattic\WooCommerce\Admin\BlockTemplates\ContainerInterface
    {
    }
    /**
     * Remove the block from its parent.
     */
    public function remove()
    {
    }
    /**
     * Check if the block is detached from its parent block container or the template it belongs to.
     *
     * @return bool True if the block is detached from its parent block container or the template it belongs to.
     */
    public function is_detached(): bool
    {
    }
    /**
     * Get the block configuration as a formatted template.
     *
     * @return array The block configuration as a formatted template.
     */
    public function get_formatted_template(): array
    {
    }
}