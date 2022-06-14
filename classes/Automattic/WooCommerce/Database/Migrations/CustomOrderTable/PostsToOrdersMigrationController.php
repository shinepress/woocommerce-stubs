<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * This is the main class used to perform the complete migration of orders
 * from the posts table to the custom orders table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class PostsToOrdersMigrationController
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
     * @var PostToOrderTableMigrator
     */
    private $order_table_migrator;
    /**
     * Migrator instance to migrate billing data into address table.
     *
     * @var PostToOrderAddressTableMigrator
     */
    private $billing_address_table_migrator;
    /**
     * Migrator instance to migrate shipping data into address table.
     *
     * @var PostToOrderAddressTableMigrator
     */
    private $shipping_address_table_migrator;
    /**
     * Migrator instance to migrate operational data.
     *
     * @var PostToOrderOpTableMigrator
     */
    private $operation_data_table_migrator;
    /**
     * Migrator instance to migrate meta data.
     *
     * @var MetaToMetaTableMigrator
     */
    private $meta_table_migrator;
    /**
     * PostsToOrdersMigrationController constructor.
     */
    public function __construct()
    {
    }
    /**
     * Helper method to get keys to migrate for migrations.
     *
     * @return int[]|string[]
     */
    public function get_migrated_meta_keys(): array
    {
    }
    /**
     * Migrates a set of orders from the posts table to the custom orders tables.
     *
     * @param array $order_post_ids List of post IDs of the orders to migrate.
     */
    public function migrate_orders(array $order_post_ids): void
    {
    }
    /**
     * Verify whether the given order IDs were migrated properly or not.
     *
     * @param array $order_post_ids Order IDs.
     *
     * @return array Array of failed IDs along with columns.
     */
    public function verify_migrated_orders(array $order_post_ids): array
    {
    }
    /**
     * Migrates an order from the posts table to the custom orders tables.
     *
     * @param int $order_post_id Post ID of the order to migrate.
     */
    public function migrate_order(int $order_post_id): void
    {
    }
}