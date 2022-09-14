<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Class WPPostToCOTMigrator
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class WPPostToCOTMigrator
{
    /**
     * Error logger for migration errors.
     *
     * @var MigrationErrorLogger $error_logger
     */
    private $error_logger;
    /**
     * Migrator instance to migrate data into wc_order table.
     *
     * @var WPPostToOrderTableMigrator
     */
    private $order_table_migrator;
    /**
     * Migrator instance to migrate billing data into address table.
     *
     * @var WPPostToOrderAddressTableMigrator
     */
    private $billing_address_table_migrator;
    /**
     * Migrator instance to migrate shipping data into address table.
     *
     * @var WPPostToOrderAddressTableMigrator
     */
    private $shipping_address_table_migrator;
    /**
     * Migrator instance to migrate operational data.
     *
     * @var WPPostToOrderOpTableMigrator
     */
    private $operation_data_table_migrator;
    /**
     * Migrator instance to migrate meta data.
     *
     * @var MetaToMetaTableMigrator
     */
    private $meta_table_migrator;
    /**
     * WPPostToCOTMigrator constructor.
     */
    public function __construct()
    {
    }
    /**
     * Generate config for meta data migration.
     *
     * @return array Meta data migration config.
     */
    private function get_config_for_meta_table()
    {
    }
    /**
     * Process next migration batch, uses option `wc_cot_migration` to checkpoints of what have been processed so far.
     *
     * @param int $batch_size Batch size of records to migrate.
     *
     * @return bool True if migration is completed, false if there are still records to process.
     */
    public function process_next_migration_batch($batch_size = 100)
    {
    }
    /**
     * Process migration for specific order post IDs.
     *
     * @param array $order_post_ids List of post IDs to migrate.
     */
    public function process_migration_for_ids($order_post_ids)
    {
    }
    /**
     * Process migration for metadata for given post ids.
     *
     * @param array $order_post_ids Post IDs.
     */
    private function process_meta_migration($order_post_ids)
    {
    }
    /**
     * Method to migrate single record.
     *
     * @param int $post_id Post ID of record to migrate.
     */
    public function process_single($post_id)
    {
    }
    /**
     * Helper function to get where clause to send to MetaToCustomTableMigrator instance.
     *
     * @param int $batch_size Number of orders in batch.
     *
     * @return array List of IDs in the current patch.
     */
    private function get_next_batch_ids($batch_size)
    {
    }
    /**
     * Current checkpoint status.
     *
     * @return false|mixed|void
     */
    private function get_checkpoint()
    {
    }
    /**
     * Updates current checkpoint
     *
     * @param int $id Order ID.
     */
    public function update_checkpoint($id)
    {
    }
    /**
     * Remove checkpoint.
     *
     * @return bool Whether checkpoint was removed.
     */
    public function delete_checkpoint()
    {
    }
}