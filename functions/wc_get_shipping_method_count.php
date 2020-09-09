<?php


/**
 * Gets number of shipping methods currently enabled. Used to identify if
 * shipping is configured.
 *
 * @since  2.6.0
 * @param  bool $include_legacy Count legacy shipping methods too.
 * @param  bool $enabled_only   Whether non-legacy shipping methods should be
 *                              restricted to enabled ones. It doesn't affect
 *                              legacy shipping methods. @since 4.3.0.
 * @return int
 */
function wc_get_shipping_method_count($include_legacy = \false, $enabled_only = \false)
{
}