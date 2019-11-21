<?php


/**
 * Webhook data store class.
 */
class WC_Webhook_Data_Store implements \WC_Webhook_Data_Store_Interface
{
    /**
     * Create a new webhook in the database.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook Webhook instance.
     */
    public function create(&$webhook)
    {
    }
    /**
     * Read a webhook from the database.
     *
     * @since  3.3.0
     * @param  WC_Webhook $webhook Webhook instance.
     * @throws Exception When webhook is invalid.
     */
    public function read(&$webhook)
    {
    }
    /**
     * Update a webhook.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook Webhook instance.
     */
    public function update(&$webhook)
    {
    }
    /**
     * Remove a webhook from the database.
     *
     * @since 3.3.0
     * @param WC_Webhook $webhook      Webhook instance.
     * @param bool       $force_delete Skip trash bin forcing to delete.
     */
    public function delete(&$webhook, $force_delete = \false)
    {
    }
    /**
     * Get API version number.
     *
     * @since  3.3.0
     * @param  string $api_version REST API version.
     * @return int
     */
    public function get_api_version_number($api_version)
    {
    }
    /**
     * Get all webhooks IDs.
     *
     * @since  3.3.0
     * @return int[]
     */
    public function get_webhooks_ids()
    {
    }
    /**
     * Search webhooks.
     *
     * @param  array $args Search arguments.
     * @return array
     */
    public function search_webhooks($args)
    {
    }
    /**
     * Get total webhook counts by status.
     *
     * @return array
     */
    public function get_count_webhooks_by_status()
    {
    }
}