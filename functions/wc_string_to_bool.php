<?php


// Once WooCommerce requires PHP 7.4, the "$x = $x ?? ''" constructs can be replaced with "$x ??= ''".
/**
 * Converts a string (e.g. 'yes' or 'no') to a bool.
 *
 * @since 3.0.0
 * @param string|bool $string String to convert. If a bool is passed it will be returned as-is.
 * @return bool
 */
function wc_string_to_bool($string)
{
}