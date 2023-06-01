<?php


/**
 * Load webhooks.
 *
 * @since  3.3.0
 * @throws Exception If webhook cannot be read/found and $data parameter of WC_Webhook class constructor is set.
 * @param  string   $status Optional - status to filter results by. Must be a key in return value of @see wc_get_webhook_statuses(). @since 3.5.0.
 * @param  null|int $limit Limit number of webhooks loaded. @since 3.6.0.
 * @return bool
 */
function wc_load_webhooks($status = '', $limit = \null)
{
}