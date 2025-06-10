<?php


/**
 * Log an order-related message. This is not public API and should not be used by plugins or themes.
 *
 * @param string     $message Message to log.
 * @param array|null $context Optional. Additional information for log handlers.
 * @param bool       $final_step Optional. Whether this is the final step of the order logging, and should clear the log.
 * @param bool       $first_step Optional. Whether this is declared the first step in order to start a new log.
 *
 * @internal This function is intended for internal use only.
 * @since 9.9.0
 */
function wc_log_order_step(string $message, ?array $context = \null, bool $final_step = \false, bool $first_step = \false): void
{
}