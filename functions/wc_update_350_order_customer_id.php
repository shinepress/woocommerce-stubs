<?php


/**
 * Copy order customer_id from post meta to post_author and set post_author to 0 for refunds.
 *
 * Two different strategies are used to copy data depending if the update is being executed from
 * the command line or not. If `wp wc update` is used to update the database, this function
 * copies data in a single go that is faster but uses more resources. If the databse update was
 * triggered from the wp-admin, this function copies data in batches which is slower but uses
 * few resources and thus is less likely to fail on smaller servers.
 *
 * @param WC_Background_Updater|false $updater Background updater instance or false if function is called from `wp wc update` WP-CLI command.
 * @return true|void Return true if near memory limit and needs to restart. Return void if update completed.
 */
function wc_update_350_order_customer_id($updater = \false)
{
}