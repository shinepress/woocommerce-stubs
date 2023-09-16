<?php


/**
 * Wrapper for deprecated hook so we can apply some extra logic.
 *
 * @since 3.3.0
 * @param string $hook        The hook that was used.
 * @param string $version     The version of WordPress that deprecated the hook.
 * @param string $replacement The hook that should have been used.
 * @param string $message     A message regarding the change.
 */
function wc_deprecated_hook($hook, $version, $replacement = \null, $message = \null)
{
}