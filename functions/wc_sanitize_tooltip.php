<?php


/**
 * Sanitize a string destined to be a tooltip.
 *
 * @since  2.3.10 Tooltips are encoded with htmlspecialchars to prevent XSS. Should not be used in conjunction with esc_attr()
 * @param  string $var Data to sanitize.
 * @return string
 */
function wc_sanitize_tooltip($var)
{
}