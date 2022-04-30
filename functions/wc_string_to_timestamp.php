<?php


/**
 * Convert mysql datetime to PHP timestamp, forcing UTC. Wrapper for strtotime.
 *
 * Based on wcs_strtotime_dark_knight() from WC Subscriptions by Prospress.
 *
 * @since  3.0.0
 * @param  string   $time_string    Time string.
 * @param  int|null $from_timestamp Timestamp to convert from.
 * @return int
 */
function wc_string_to_timestamp($time_string, $from_timestamp = \null)
{
}