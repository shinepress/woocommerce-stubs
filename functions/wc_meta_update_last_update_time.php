<?php


/**
 * Hooks into the update user meta function to set the user last updated timestamp.
 *
 * @since 2.6.0
 * @param int    $meta_id     ID of the meta object that was changed.
 * @param int    $user_id     The user that was updated.
 * @param string $meta_key    Name of the meta key that was changed.
 * @param string $_meta_value Value of the meta that was changed.
 */
function wc_meta_update_last_update_time($meta_id, $user_id, $meta_key, $_meta_value)
{
}