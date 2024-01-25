<?php


/**
 * Disable search engines indexing core, dynamic, cart/checkout pages.
 * Uses "wp_robots" filter introduced in WP 5.7.
 *
 * @since 5.0.0
 * @param array $robots Associative array of robots directives.
 * @return array Filtered robots directives.
 */
function wc_page_no_robots($robots)
{
}