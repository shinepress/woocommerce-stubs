<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Class MetaToMetaTableMigrator.
 *
 * Generic class for powering migrations from one meta table to another table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class MetaToMetaTableMigrator
{
    /**
     * Schema config, see __construct for more details.
     *
     * @var array
     */
    private $schema_config;
    /**
     * MetaToMetaTableMigrator constructor.
     *
     * @param array $schema_config This parameters provides general but essential information about tables under migrations. Must be of the form-
     * TODO: Add structure.
     */
    public function __construct($schema_config)
    {
    }
    /**
     * Generate insert sql queries for batches.
     *
     * @param array  $batch Data to generate queries for.
     * @param string $insert_switch Insert switch to use.
     *
     * @return string
     */
    public function generate_insert_sql_for_batch($batch, $insert_switch)
    {
    }
    /**
     * Fetch data for migration.
     *
     * @param array $order_post_ids Array of IDs to fetch data for.
     *
     * @return array[] Data along with errors (if any), will of the form:
     * array(
     *  'data' => array(
     *      'id_1' => array( 'column1' => value1, 'column2' => value2, ...),
     *      ...,
     *   ),
     *  'errors' => array(
     *      'id_1' => array( 'column1' => error1, 'column2' => value2, ...),
     *      ...,
     * )
     */
    public function fetch_data_for_migration_for_ids($order_post_ids)
    {
    }
    /**
     * Helper method to build query used to fetch data from source meta table.
     *
     * @param string $entity_ids List of entity IDs to build meta query for.
     *
     * @return string Query that can be used to fetch data.
     */
    private function build_meta_table_query($entity_ids)
    {
    }
}