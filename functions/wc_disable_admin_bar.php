<?php


/**
 * Prevent any user who cannot 'edit_posts' (subscribers, customers etc) from seeing the admin bar.
 *
 * Note: get_option( 'woocommerce_lock_down_admin', true ) is a deprecated option here for backwards compatibility. Defaults to true.
 *
 * @param bool $show_admin_bar If should display admin bar.
 * @return bool
 */
function wc_disable_admin_bar($show_admin_bar)
{
}