<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductGallery class.
 */
class ProductGallery extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-gallery';
    /**
     *  Register the context
     *
     * @return string[]
     */
    protected function get_block_type_uses_context()
    {
    }
    /**
     * Return the dialog content.
     *
     * @param array $images An array of all images of the product.
     * @return string
     */
    protected function render_dialog($images)
    {
    }
    /**
     * Inject dialog into the product gallery HTML.
     *
     * @param string $gallery_html The gallery HTML.
     * @param string $dialog_html  The dialog HTML.
     *
     * @return string
     */
    protected function inject_dialog($gallery_html, $dialog_html)
    {
    }
    /**
     * Include and render the block.
     *
     * @param array    $attributes Block attributes. Default empty array.
     * @param string   $content    Block content. Default empty string.
     * @param WP_Block $block      Block instance.
     * @return string Rendered block type output.
     */
    protected function render($attributes, $content, $block)
    {
    }
}