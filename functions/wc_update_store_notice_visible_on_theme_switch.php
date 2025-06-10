<?php


/**
 * Update the Store Notice visibility when switching themes:
 * - When switching from a classic theme to a block theme, disable the Store Notice.
 * - When switching from a block theme to a classic theme, re-enable the Store Notice
 *   only if it was enabled last time there was a switchi from a classic theme to a block theme.
 *
 * @since 9.7.0
 *
 * @param string    $old_name Old theme name.
 * @param \WP_Theme $old_theme Instance of the old theme.
 * @return void
 */
function wc_update_store_notice_visible_on_theme_switch($old_name, $old_theme)
{
}