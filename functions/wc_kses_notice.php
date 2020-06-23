<?php


/**
 * Filters out the same tags as wp_kses_post, but allows tabindex for <a> element.
 *
 * @since 3.5.0
 * @param string $message Content to filter through kses.
 * @return string
 */
function wc_kses_notice($message)
{
}