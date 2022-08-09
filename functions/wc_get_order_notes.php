<?php


/**
 * Get order notes.
 *
 * @since  3.2.0
 * @param  array $args Query arguments {
 *     Array of query parameters.
 *
 *     @type string $limit         Maximum number of notes to retrieve.
 *                                 Default empty (no limit).
 *     @type int    $order_id      Limit results to those affiliated with a given order ID.
 *                                 Default 0.
 *     @type array  $order__in     Array of order IDs to include affiliated notes for.
 *                                 Default empty.
 *     @type array  $order__not_in Array of order IDs to exclude affiliated notes for.
 *                                 Default empty.
 *     @type string $orderby       Define how should sort notes.
 *                                 Accepts 'date_created', 'date_created_gmt' or 'id'.
 *                                 Default: 'id'.
 *     @type string $order         How to order retrieved notes.
 *                                 Accepts 'ASC' or 'DESC'.
 *                                 Default: 'DESC'.
 *     @type string $type          Define what type of note should retrieve.
 *                                 Accepts 'customer', 'internal' or empty for both.
 *                                 Default empty.
 * }
 * @return stdClass[]              Array of stdClass objects with order notes details.
 */
function wc_get_order_notes($args)
{
}