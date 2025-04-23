<?php


/**
 * Delete multiple transients in a single operation.
 *
 * IMPORTANT: This is a private function (internal use ONLY).
 *
 * This function efficiently deletes multiple transients at once, using a direct
 * database query when possible for better performance.
 *
 * @internal
 *
 * @since 9.8.0
 * @param array $transients Array of transient names to delete (without the '_transient_' prefix).
 * @return bool True on success, false on failure.
 */
function _wc_delete_transients($transients)
{
}