<?php


/**
 * Register order type. Do not use before init.
 *
 * Wrapper for register post type, as well as a method of telling WC which.
 * post types are types of orders, and having them treated as such.
 *
 * $args are passed to register_post_type, but there are a few specific to this function:
 *      - add_order_meta_boxes (bool) Whether or not the order type gets shop_order meta boxes.
 *      - exclude_from_order_count (bool) Whether or not this order type is excluded from counts.
 *      - exclude_from_order_views (bool) Whether or not this order type is visible by customers when.
 *      viewing orders e.g. on the my account page.
 *      - exclude_from_order_reports (bool) Whether or not to exclude this type from core reports.
 *      - exclude_from_order_sales_reports (bool) Whether or not to exclude this type from core sales reports.
 *
 * @since  2.2
 * @see    register_post_type for $args used in that function
 * @param  string $type Post type. (max. 20 characters, can not contain capital letters or spaces).
 * @param  array  $args An array of arguments.
 * @return bool Success or failure
 */
function wc_register_order_type($type, $args = array())
{
}