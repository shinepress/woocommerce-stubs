<?php


/**
 * Create an order note.
 *
 * @since  3.2.0
 * @param  int    $order_id         Order ID.
 * @param  string $note             Note to add.
 * @param  bool   $is_customer_note If is a costumer note.
 * @param  bool   $added_by_user    If note is create by an user.
 * @return int|WP_Error             Integer when created or WP_Error when found an error.
 */
function wc_create_order_note($order_id, $note, $is_customer_note = \false, $added_by_user = \false)
{
}