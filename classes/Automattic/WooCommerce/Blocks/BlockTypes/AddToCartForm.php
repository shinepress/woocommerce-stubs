<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * CatalogSorting class.
 */
class AddToCartForm extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'add-to-cart-form';
    /**
     * Get the block's attributes.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return array  Block attributes merged with defaults.
     */
    private function parse_attributes($attributes)
    {
    }
    /**
     * Enqueue assets specific to this block.
     * We enqueue frontend scripts only if the quantitySelectorStyle is set to 'stepper'.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     */
    protected function enqueue_assets($attributes, $content, $block)
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
     * Add increment and decrement buttons to the quantity input field.
     *
     * @param string $product_html add-to-cart form HTML.
     * @param string $product_name Product name.
     * @return stringa add-to-cart form HTML with increment and decrement buttons.
     */
    private function add_steppers($product_html, $product_name)
    {
    }
    /**
     * Add classes to the Add to Cart form input needed for the stepper style.
     *
     * @param string $product_html The Add to Cart form HTML.
     *
     * @return string The Add to Cart form HTML with classes added.
     */
    private function add_stepper_classes_to_add_to_cart_form_input($product_html)
    {
    }
    /**
     * Render the block.
     *
     * @param array    $attributes Block attributes.
     * @param string   $content Block content.
     * @param WP_Block $block Block instance.
     *
     * @return string | void Rendered block output.
     */
    protected function render($attributes, $content, $block)
    {
    }
    /**
     * Use current url as the add to cart form action.
     *
     * @return string The current URL.
     */
    public function add_to_cart_form_action()
    {
    }
}