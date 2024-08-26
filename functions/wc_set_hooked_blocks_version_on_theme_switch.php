<?php


/**
 * If the user switches from a classic to a block theme and they haven't already got a woocommerce_hooked_blocks_version,
 * set the version of the hooked blocks in the database, or as "no" to disable all block hooks then set as the latest WC version.
 *
 * @since 9.2.0
 *
 * @param string    $old_name Old theme name.
 * @param \WP_Theme $old_theme Instance of the old theme.
 * @return void
 */
function wc_set_hooked_blocks_version_on_theme_switch($old_name, $old_theme)
{
}