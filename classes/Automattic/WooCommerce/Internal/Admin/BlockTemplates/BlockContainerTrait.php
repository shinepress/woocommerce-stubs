<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Trait for block containers.
 */
trait BlockContainerTrait
{
    use \Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockFormattedTemplateTrait {
        get_formatted_template as get_block_formatted_template;
    }
    /**
     * The inner blocks.
     *
     * @var BlockInterface[]
     */
    private $inner_blocks = [];
    // phpcs doesn't take into account exceptions thrown by called methods.
    // phpcs:disable Squiz.Commenting.FunctionCommentThrowTag.WrongNumber
    /**
     * Add a block to the block container.
     *
     * @param BlockInterface $block The block.
     *
     * @throws \ValueError If the block configuration is invalid.
     * @throws \ValueError If a block with the specified ID already exists in the template.
     * @throws \UnexpectedValueException If the block container is not the parent of the block.
     * @throws \UnexpectedValueException If the block container's root template is not the same as the block's root template.
     */
    protected function &add_inner_block(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block): \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
    {
    }
    // phpcs:enable Squiz.Commenting.FunctionCommentThrowTag.WrongNumber
    /**
     * Checks if a block is a descendant of the block container.
     *
     * @param BlockInterface $block The block.
     */
    private function is_block_descendant(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block): bool
    {
    }
    /**
     * Get a block by ID.
     *
     * @param string $block_id The block ID.
     */
    public function get_block(string $block_id): ?\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface
    {
    }
    /**
     * Remove a block from the block container.
     *
     * @param string $block_id The block ID.
     *
     * @throws \UnexpectedValueException If the block container is not an ancestor of the block.
     */
    public function remove_block(string $block_id)
    {
    }
    /**
     * Remove all blocks from the block container.
     */
    public function remove_blocks()
    {
    }
    /**
     * Remove a block from the block container's inner blocks. This is an internal method and should not be called directly
     * except for from the BlockContainerTrait's remove_block() method.
     *
     * @param BlockInterface $block The block.
     */
    public function remove_inner_block(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
    }
    /**
     * Get the inner blocks sorted by order.
     */
    private function get_inner_blocks_sorted_by_order(): array
    {
    }
    /**
     * Get the inner blocks as a formatted template.
     */
    public function get_formatted_template(): array
    {
    }
    /**
     * Do the `woocommerce_block_template_after_add_block` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_add_block_action(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
    }
    /**
     * Do the `woocommerce_block_template_area_{template_area}_after_add_block_{block_id}` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_add_specific_block_action(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
    }
    /**
     * Do the `woocommerce_block_template_after_remove_block` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_remove_block_action(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
    }
    /**
     * Do the `woocommerce_block_template_area_{template_area}_after_remove_block_{block_id}` action.
     * Handle exceptions thrown by the action.
     *
     * @param BlockInterface $block The block.
     */
    private function do_after_remove_specific_block_action(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block)
    {
    }
    /**
     * Handle an exception thrown by an action.
     *
     * @param string         $message    The message.
     * @param string         $action_tag The action tag.
     * @param BlockInterface $block      The block.
     * @param \Exception     $e          The exception.
     */
    private function handle_exception_doing_action(string $message, string $action_tag, \Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block, \Exception $e)
    {
    }
}