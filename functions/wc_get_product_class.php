<?php


/**
 * Retrieves the classes for the post div as an array.
 *
 * This method was modified from WordPress's get_post_class() to allow the removal of taxonomies
 * (for performance reasons). Previously wc_product_post_class was hooked into post_class. @since 3.6.0
 *
 * @since 3.4.0
 * @param string|array           $class      One or more classes to add to the class list.
 * @param int|WP_Post|WC_Product $product Product ID or product object.
 * @return array
 */
function wc_get_product_class($class = '', $product = \null)
{
}