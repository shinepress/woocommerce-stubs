<?php


/**
 * Safe way of allowing shop managers restricted capabilities that will remove
 * access to the capabilities if WooCommerce is deactivated.
 *
 * @since 3.5.4
 * @param bool[]   $allcaps Array of key/value pairs where keys represent a capability name and boolean values
 *                          represent whether the user has that capability.
 * @param string[] $caps    Required primitive capabilities for the requested capability.
 * @param array    $args Arguments that accompany the requested capability check.
 * @param WP_User  $user    The user object.
 * @return bool[]
 */
function wc_shop_manager_has_capability($allcaps, $caps, $args, $user)
{
}