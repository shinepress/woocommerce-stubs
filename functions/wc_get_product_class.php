<?php


/**
 * Retrieves the classes for the post div as an array.
 *
 * This method is clone from WordPress's get_post_class(), allowing removing taxonomies.
 *
 * @since 3.4.0
 * @param string|array           $class      One or more classes to add to the class list.
 * @param int|WP_Post|WC_Product $product_id Product ID or product object.
 * @return array
 */
function wc_get_product_class($class = '', $product_id = \null)
{
}