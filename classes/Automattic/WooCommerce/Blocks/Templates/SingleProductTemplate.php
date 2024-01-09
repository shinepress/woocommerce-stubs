<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * SingleProductTemplae class.
 *
 * @internal
 */
class SingleProductTemplate
{
    /**
     * Replace the first single product template block with the password form. Remove all other single product template blocks.
     *
     * @param array   $parsed_blocks Array of parsed block objects.
     * @param boolean $is_already_replaced If the password form has already been added.
     * @return array Parsed blocks
     */
    private static function replace_first_single_product_template_block_with_password_form($parsed_blocks, $is_already_replaced)
    {
    }
    /**
     * Add password form to the Single Product Template.
     *
     * @param string $content The content of the template.
     * @return string
     */
    public static function add_password_form($content)
    {
    }
}