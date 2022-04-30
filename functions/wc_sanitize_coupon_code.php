<?php


/**
 * Sanitize a coupon code.
 *
 * Uses sanitize_post_field since coupon codes are stored as
 * post_titles - the sanitization and escaping must match.
 *
 * @since  3.6.0
 * @param  string $value Coupon code to format.
 * @return string
 */
function wc_sanitize_coupon_code($value)
{
}