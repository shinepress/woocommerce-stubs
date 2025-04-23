<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * Checkout class.
 *
 * @internal
 */
class Checkout extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'checkout';
    /**
     * Chunks build folder.
     *
     * @var string
     */
    protected $chunks_folder = 'checkout-blocks';
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     */
    protected function initialize()
    {
    }
    /**
     * Dequeues the scripts added by WC Core to the Checkout page.
     *
     * @return void
     */
    public function dequeue_woocommerce_core_scripts()
    {
    }
    /**
     * Exposes settings exposed by the checkout block.
     */
    public function register_settings()
    {
    }
    /**
     * Register block pattern for Empty Cart Message to make it translatable.
     */
    public function register_patterns()
    {
    }
    /**
     * Get the editor script handle for this block type.
     *
     * @param string $key Data to get, or default to everything.
     * @return array|string;
     */
    protected function get_block_type_editor_script($key = null)
    {
    }
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
     * Get the frontend style handle for this block type.
     *
     * @return string[]
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Enqueue frontend assets for this block, just in time for rendering.
     *
     * @param array    $attributes  Any attributes that currently are available from the block.
     * @param string   $content    The block content.
     * @param WP_Block $block    The block object.
     */
    protected function enqueue_assets(array $attributes, $content, $block)
    {
    }
    /**
     * Append frontend scripts when rendering the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content    Block content.
     * @param WP_Block $block Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Check if we're viewing a checkout page endpoint, rather than the main checkout page itself.
     *
     * @return boolean
     */
    protected function is_checkout_endpoint()
    {
    }
    /**
     * Update the local pickup title in WooCommerce Settings when the checkout page containing a Checkout block is saved.
     *
     * @param int      $post_id The post ID.
     * @param \WP_Post $post    The post object.
     * @return void
     */
    public function update_local_pickup_title($post_id, $post)
    {
    }
    /**
     * Recurse through the blocks to find the shipping methods block, then get the value of the localPickupText attribute from it.
     *
     * @param array $blocks The block(s) to search for the local pickup text.
     * @return null|string  The local pickup text if found, otherwise void.
     */
    private function find_local_pickup_text_in_checkout_block($blocks)
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = [])
    {
    }
    /**
     * Get saved customer payment methods for use in checkout.
     */
    protected function hydrate_customer_payment_methods()
    {
    }
    /**
     * Register script and style assets for the block type before it is registered.
     *
     * This registers the scripts; it does not enqueue them.
     */
    protected function register_block_type_assets()
    {
    }
    /**
     * Get list of Checkout block & its inner-block types.
     *
     * @return array;
     */
    public static function get_checkout_block_types()
    {
    }
}