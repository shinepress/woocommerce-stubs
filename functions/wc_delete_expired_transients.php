<?php


/**
 * Delete expired transients.
 *
 * Deletes all expired transients. The multi-table delete syntax is used.
 * to delete the transient record from table a, and the corresponding.
 * transient_timeout record from table b.
 *
 * Based on code inside core's upgrade_network() function.
 *
 * @since 3.2.0
 * @return int Number of transients that were cleared.
 */
function wc_delete_expired_transients()
{
}