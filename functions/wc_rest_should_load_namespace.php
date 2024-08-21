<?php


/**
 * Check if a REST namespace should be loaded. Useful to maintain site performance even when lots of REST namespaces are registered.
 *
 * @since 9.2.0.
 *
 * @param string $ns The namespace to check.
 * @param string $rest_route (Optional) The REST route being checked.
 *
 * @return bool True if the namespace should be loaded, false otherwise.
 */
function wc_rest_should_load_namespace(string $ns, string $rest_route = ''): bool
{
}