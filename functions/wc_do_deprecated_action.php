<?php


/**
 * Runs a deprecated action with notice only if used.
 *
 * @since 3.0.0
 * @param string $tag         The name of the action hook.
 * @param array  $args        Array of additional function arguments to be passed to do_action().
 * @param string $version     The version of WooCommerce that deprecated the hook.
 * @param string $replacement The hook that should have been used.
 * @param string $message     A message regarding the change.
 */
function wc_do_deprecated_action($tag, $args, $version, $replacement = \null, $message = \null)
{
}