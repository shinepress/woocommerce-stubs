<?php


/**
 * Add an index to the field comment_type to improve the response time of the query
 * used by WC_Comments::wp_count_comments() to get the number of comments by type.
 */
function wc_update_300_comment_type_index()
{
}