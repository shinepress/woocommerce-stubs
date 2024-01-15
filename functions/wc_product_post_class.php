<?php


/**
 * Adds extra post classes for products via the WordPress post_class hook, if used.
 *
 * Note: For performance reasons we instead recommend using wc_product_class/wc_get_product_class instead.
 *
 * @since 2.1.0
 * @param array        $classes Current classes.
 * @param string|array $class Additional class.
 * @param int          $post_id Post ID.
 * @return array
 */
function wc_product_post_class($classes, $class = '', $post_id = 0)
{
}