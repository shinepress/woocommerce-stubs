<?php


/**
 * Wrapper function to execute the `woocommerce_deliver_webhook_async` cron.
 * hook, see WC_Webhook::process().
 *
 * @since 2.2.0
 * @param int   $webhook_id Webhook ID to deliver.
 * @throws Exception        If webhook cannot be read/found and $data parameter of WC_Webhook class constructor is set.
 * @param mixed $arg        Hook argument.
 */
function wc_deliver_webhook_async($webhook_id, $arg)
{
}