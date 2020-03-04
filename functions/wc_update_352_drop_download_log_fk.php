<?php


/**
 * Drop the fk_wc_download_log_permission_id FK as we use a new one with the table and blog prefix for MS compatability.
 *
 * @return void
 */
function wc_update_352_drop_download_log_fk()
{
}