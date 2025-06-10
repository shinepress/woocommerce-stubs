<?php


/**
 * Prevent auto-updating the WooCommerce plugin on major releases if there are untested extensions active.
 *
 * @since 3.2.0
 * @param  bool   $should_update If should update.
 * @param  object $plugin        Plugin data.
 * @return bool
 */
function wc_prevent_dangerous_auto_updates($should_update, $plugin)
{
}