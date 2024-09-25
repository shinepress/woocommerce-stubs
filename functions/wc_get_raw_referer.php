<?php


/**
 * Retrieves unvalidated referer from '_wp_http_referer' or HTTP referer.
 *
 * Do not use for redirects, use {@see wp_get_referer()} instead.
 *
 * @since 2.6.1
 * @return string|false Referer URL on success, false on failure.
 */
function wc_get_raw_referer()
{
}