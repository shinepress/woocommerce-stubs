<?php


/**
 * Wrapper class for Featured Product callback.
 */
class WC_Block_Featured_Product
{
    /**
     * Block name.
     *
     * @var string
     */
    protected static $block_name = 'featured-product';
    /**
     * Default attribute values, should match what's set in JS `registerBlockType`.
     *
     * @var array
     */
    protected static $defaults = array('align' => 'none', 'contentAlign' => 'center', 'dimRatio' => 50, 'height' => \false, 'mediaId' => 0, 'mediaSrc' => '', 'showDesc' => \true, 'showPrice' => \true);
    /**
     * Render the Featured Product block.
     *
     * @param array  $attributes Block attributes. Default empty array.
     * @param string $content    Block content. Default empty string.
     * @return string Rendered block type output.
     */
    public static function render($attributes, $content)
    {
    }
    /**
     * Get the styles for the wrapper element (background image, color).
     *
     * @param array      $attributes Block attributes. Default empty array.
     * @param WC_Product $product Product object.
     * @return string
     */
    public static function get_styles($attributes, $product)
    {
    }
    /**
     * Get class names for the block container.
     *
     * @param array $attributes Block attributes. Default empty array.
     * @return string
     */
    public static function get_classes($attributes)
    {
    }
    /**
     * Returns the main product image URL.
     *
     * @param WC_Product $product Product object.
     * @param string     $size    Image size, defaults to 'full'.
     * @return string
     */
    public static function get_image($product, $size = 'full')
    {
    }
}