<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation;

/**
 * CreateAccount class.
 */
class CreateAccount extends \Automattic\WooCommerce\Blocks\BlockTypes\OrderConfirmation\AbstractOrderConfirmationBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'order-confirmation-create-account';
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string
     */
    protected function get_block_type_script($key = null)
    {
    }
    /**
     * Process posted account form.
     *
     * @param \WC_Order $order Order object.
     * @return \WP_Error|int
     */
    protected function process_form_post($order)
    {
    }
    /**
     * This renders the content of the block within the wrapper.
     *
     * @param \WC_Order    $order Order object.
     * @param string|false $permission If the current user can view the order details or not.
     * @param array        $attributes Block attributes.
     * @param string       $content Original block content.
     * @return string
     */
    protected function render_content($order, $permission = false, $attributes = [], $content = '')
    {
    }
    /**
     * Render the block when an account has been registered.
     *
     * @return string
     */
    protected function render_confirmation()
    {
    }
}