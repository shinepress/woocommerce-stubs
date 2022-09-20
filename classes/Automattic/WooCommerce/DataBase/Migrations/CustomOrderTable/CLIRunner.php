<?php

namespace Automattic\WooCommerce\DataBase\Migrations\CustomOrderTable;

/**
 * CLI tool for migrating order data to/from custom table.
 *
 * Credits https://github.com/liquidweb/woocommerce-custom-orders-table/blob/develop/includes/class-woocommerce-custom-orders-table-cli.php.
 *
 * Class CLIRunner
 */
class CLIRunner
{
    /**
     * CustomOrdersTableController instance.
     *
     * @var CustomOrdersTableController
     */
    private $controller;
    /**
     * DataSynchronizer instance.
     *
     * @var DataSynchronizer;
     */
    private $synchronizer;
    /**
     * PostsToOrdersMigrationController instance.
     *
     * @var PostsToOrdersMigrationController
     */
    private $post_to_cot_migrator;
    /**
     * Init method, invoked by DI container.
     *
     * @param CustomOrdersTableController      $controller Instance.
     * @param DataSynchronizer                 $synchronizer Instance.
     * @param PostsToOrdersMigrationController $posts_to_orders_migration_controller Instance.
     *
     * @internal
     */
    final public function init(\Automattic\WooCommerce\Internal\DataStores\Orders\CustomOrdersTableController $controller, \Automattic\WooCommerce\Internal\DataStores\Orders\DataSynchronizer $synchronizer, \Automattic\WooCommerce\DataBase\Migrations\CustomOrderTable\PostsToOrdersMigrationController $posts_to_orders_migration_controller)
    {
    }
    /**
     * Registers commands for CLI.
     */
    public function register_commands()
    {
    }
    /**
     * Check if the COT feature is enabled.
     *
     * @param bool $log Optionally log a error message.
     *
     * @return bool Whether the COT feature is enabled.
     */
    private function is_enabled($log = true): bool
    {
    }
    /**
     * Helper method to log warning that feature is not yet production ready.
     */
    private function log_production_warning()
    {
    }
    /**
     * Count how many orders have yet to be migrated into the custom orders table.
     *
     * ## EXAMPLES
     *
     *     wp wc cot count_unmigrated
     *
     * @param array $args Positional arguments passed to the command.
     *
     * @param array $assoc_args Associative arguments (options) passed to the command.
     *
     * @return int The number of orders to be migrated.*
     */
    public function count_unmigrated($args = array(), $assoc_args = array()): int
    {
    }
    /**
     * Migrate order data to the custom orders table.
     *
     * ## OPTIONS
     *
     * [--batch-size=<batch-size>]
     * : The number of orders to process in each batch.
     * ---
     * default: 500
     * ---
     *
     * ## EXAMPLES
     *
     *     wp wc cot migrate --batch-size=500
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function migrate($args = array(), $assoc_args = array())
    {
    }
    /**
     * Copy order data into the postmeta table.
     *
     * Note that this could dramatically increase the size of your postmeta table, but is recommended
     * if you wish to stop using the custom orders table plugin.
     *
     * ## OPTIONS
     *
     * [--batch-size=<batch-size>]
     * : The number of orders to process in each batch. Passing a value of 0 will disable batching.
     * ---
     * default: 500
     * ---
     *
     * ## EXAMPLES
     *
     *     # Copy all order data into the post meta table, 500 posts at a time.
     *     wp wc cot backfill --batch-size=500
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function backfill($args = array(), $assoc_args = array())
    {
    }
    /**
     * Verify migrated order data with original posts data.
     *
     * ## OPTIONS
     *
     * [--batch-size=<batch-size>]
     * : The number of orders to verify in each batch.
     * ---
     * default: 500
     * ---
     *
     * [--start-from=<order_id>]
     * : Order ID to start from.
     * ---
     * default: 0
     * ---
     *
     * ## EXAMPLES
     *
     *     # Verify migrated order data, 500 orders at a time.
     *     wp wc cot verify_cot_data --batch-size=500 --start-from=0
     *
     * @param array $args Positional arguments passed to the command.
     * @param array $assoc_args Associative arguments (options) passed to the command.
     */
    public function verify_cot_data($args = array(), $assoc_args = array())
    {
    }
    /**
     * Helper method to get count for orders needing verification.
     *
     * @param int  $order_id_start Order ID to start from.
     * @param bool $log Whether to also log an error message.
     *
     * @return int Order count.
     */
    private function get_verify_order_count(int $order_id_start, $log = true): int
    {
    }
    /**
     * Verify meta data as part of verifying the order object.
     *
     * @param array $order_ids Order IDs.
     * @param array $failed_ids Array for storing failed IDs.
     *
     * @return array Failed IDs with meta details.
     */
    private function verify_meta_data(array $order_ids, array $failed_ids): array
    {
    }
    /**
     * Helper method to normalize response from meta queries into order_id > meta_key > meta_values.
     *
     * @param array $data Data fetched from meta queries.
     *
     * @return array Normalized data.
     */
    private function normalize_raw_meta_data(array $data): array
    {
    }
}