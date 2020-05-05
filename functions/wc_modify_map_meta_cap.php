<?php


/**
 * Modify capabilities to prevent non-admin users editing admin users.
 *
 * $args[0] will be the user being edited in this case.
 *
 * @param  array  $caps    Array of caps.
 * @param  string $cap     Name of the cap we are checking.
 * @param  int    $user_id ID of the user being checked against.
 * @param  array  $args    Arguments.
 * @return array
 */
function wc_modify_map_meta_cap($caps, $cap, $user_id, $args)
{
}