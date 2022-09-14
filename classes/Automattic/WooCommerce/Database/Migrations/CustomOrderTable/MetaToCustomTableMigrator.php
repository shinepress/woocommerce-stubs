<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Class MetaToCustomTableMigrator.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
abstract class MetaToCustomTableMigrator
{
    /**
     * Config for tables being migrated and migrated from. See __construct() for detailed config.
     *
     * @var array
     */
    protected $schema_config;
    /**
     * Meta config, see __construct for detailed config.
     *
     * @var array
     */
    protected $meta_column_mapping;
    /**
     * Column mapping from source table to destination custom table. See __construct for detailed config.
     *
     * @var array
     */
    protected $core_column_mapping;
    /**
     * Store errors along with entity IDs from migrations.
     *
     * @var array
     */
    protected $errors;
    /**
     * MetaToCustomTableMigrator constructor.
     */
    public function __construct()
    {
    }
    /**
    * Specify schema config the source and destination table.
    *
    * @return array Schema, must of the form:
    * array(
    		'source' => array(
    			'entity' => array(
    				'table_name' => $source_table_name,
    				'meta_rel_column' => $column_meta, Name of column in source table which is referenced by meta table.
    				'destination_rel_column' => $column_dest, Name of column in source table which is refenced by destination table,
    				'primary_key' => $primary_key, Primary key of the source table
    			),
    			'meta' => array(
    				'table' => $meta_table_name,
    				'meta_key_column' => $meta_key_column_name,
    				'meta_value_column' => $meta_value_column_name,
    				'entity_id_column' => $entity_id_column, Name of the column having entity IDs.
    			),
    		),
    		'destination' => array(
    			'table_name' => $table_name, Name of destination table,
    			'source_rel_column' => $column_source_id, Name of the column in destination table which is referenced by source table.
    			'primary_key' => $table_primary_key,
    			'primary_key_type' => $type bool|int|string|decimal
    		)
    */
    abstract public function get_schema_config();
    /**
     * Specify column config from the source table.
     *
     * @return array Config, must be of the form:
     * array(
     *  '$source_column_name_1' => array( // $source_column_name_1 is column name in source table, or a select statement.
     *      'type' => 'type of value, could be string/int/date/float.',
     *      'destination' => 'name of the column in column name where this data should be inserted in.',
     *  ),
     *  '$source_column_name_2' => array(
     *          ......
     *  ),
     *  ....
     * ).
     */
    abstract public function get_core_column_mapping();
    /**
     * Specify meta keys config from source meta table.
     *
     * @return array Config, must be of the form.
     * array(
     *  '$meta_key_1' => array(  // $meta_key_1 is the name of meta_key in source meta table.
     *          'type' => 'type of value, could be string/int/date/float',
     *          'destination' => 'name of the column in column name where this data should be inserted in.',
     *  ),
     *  '$meta_key_2' => array(
     *          ......
     *  ),
     *  ....
     * ).
     */
    abstract public function get_meta_column_config();
    /**
     * Generate SQL for data insertion.
     *
     * @param array $batch Data to generate queries for. Will be 'data' array returned by `$this->fetch_data_for_migration_for_ids()` method.
     *
     * @return string Generated queries for insertion for this batch, would be of the form:
     * INSERT IGNORE INTO $table_name ($columns) values
     *  ($value for row 1)
     *  ($value for row 2)
     * ...
     */
    public function generate_insert_sql_for_batch($batch)
    {
    }
    /**
     * Generate SQL for data updating.
     *
     * @param array $batch Data to generate queries for. Will be `data` array returned by fetch_data_for_migration_for_ids() method.
     *
     * @param array $entity_row_mapping Maps rows to update data with their original IDs. Will be returned by `generate_update_sql_for_batch`.
     *
     * @return string Generated queries for batch update. Would be of the form:
     * INSERT INTO $table ( $columns ) VALUES
     *  ($value for row 1)
     *  ($valye for row 2)
     * ...
     * ON DUPLICATE KEY UPDATE
     * $column1 = VALUES($column1)
     * $column2 = VALUES($column2)
     * ...
     */
    public function generate_update_sql_for_batch($batch, $entity_row_mapping)
    {
    }
    /**
     * Generate schema for primary ID column of destination table.
     *
     * @return array[] Schema for primary ID column.
     */
    protected function get_destination_table_primary_id_schema()
    {
    }
    /**
     * Generate values and columns clauses to be used in INSERT and INSERT..ON DUPLICATE KEY UPDATE statements.
     *
     * @param array $columns_schema Columns config for destination table.
     * @param array $batch Actual data to migrate as returned by `data` in `fetch_data_for_migration_for_ids` method.
     *
     * @return array SQL clause for values, columns placeholders, and columns.
     */
    protected function generate_column_clauses($columns_schema, $batch)
    {
    }
    /**
     * Generates ON DUPLICATE KEY UPDATE clause to be used in migration.
     *
     * @param array $columns List of column names.
     *
     * @return string SQL clause for INSERT...ON DUPLICATE KEY UPDATE
     */
    private function generate_on_duplicate_statement_clause($columns)
    {
    }
    /**
     * Process next migration batch, uses option `wc_cot_migration` to checkpoints of what have been processed so far.
     *
     * @param array $entity_ids List of entity IDs to perform migrations for.
     *
     * @return array List of errors happened during migration.
     */
    public function process_migration_batch_for_ids($entity_ids)
    {
    }
    /**
     * Process batch for insertion into destination table.
     *
     * @param array $batch Data to insert, will be of the form as returned by `data` in `fetch_data_for_migration_for_ids`.
     */
    protected function process_insert_batch($batch)
    {
    }
    /**
     * Process batch for update into destination table.
     *
     * @param array $batch Data to insert, will be of the form as returned by `data` in `fetch_data_for_migration_for_ids`.
     * @param array $already_migrated Maps rows to update data with their original IDs.
     */
    protected function process_update_batch($batch, $already_migrated)
    {
    }
    /**
     * Fetch data for migration.
     *
     * @param array $entity_ids Entity IDs to fetch data for.
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
    public function fetch_data_for_migration_for_ids($entity_ids)
    {
    }
    /**
     * Fetch id mappings for records that are already inserted, or can be considered duplicates.
     *
     * @param array $entity_ids List of entity IDs to verify.
     *
     * @return array Already migrated entities, would be of the form
     * array(
     *      '$source_id1' => array(
     *          'source_id' => $source_id1,
     *          'destination_id' => $destination_id1,
     *      ),
     *      ...
     * )
     */
    public function get_already_migrated_records($entity_ids)
    {
    }
    /**
     * Helper method to build query used to fetch data from core source table.
     *
     * @param array $entity_ids List of entity IDs to fetch.
     *
     * @return string Query that can be used to fetch data.
     */
    protected function build_entity_table_query($entity_ids)
    {
    }
    /**
     * Helper method to build query that will be used to fetch data from source meta table.
     *
     * @param array $entity_ids List of IDs to fetch metadata for.
     *
     * @return string Query for fetching meta data.
     */
    protected function build_meta_data_query($entity_ids)
    {
    }
    /**
     * Helper function to validate and combine data before we try to insert.
     *
     * @param array $entity_data Data from source table.
     * @param array $meta_data Data from meta table.
     *
     * @return array[] Validated and combined data with errors.
     */
    private function process_and_sanitize_data($entity_data, $meta_data)
    {
    }
    /**
     * Helper method to sanitize core source table.
     *
     * @param array $sanitized_entity_data Array containing sanitized data for insertion.
     * @param array $error_records Error records.
     * @param array $entity_data Original source data.
     */
    private function process_and_sanitize_entity_data(&$sanitized_entity_data, &$error_records, $entity_data)
    {
    }
    /**
     * Helper method to sanitize soure meta data.
     *
     * @param array $sanitized_entity_data Array containing sanitized data for insertion.
     * @param array $error_records Error records.
     * @param array $meta_data Original source data.
     */
    private function processs_and_sanitize_meta_data(&$sanitized_entity_data, &$error_records, $meta_data)
    {
    }
    /**
     * Validate and transform data so that we catch as many errors as possible before inserting.
     *
     * @param mixed  $value Actual data value.
     * @param string $type Type of data, could be decimal, int, date, string.
     *
     * @return float|int|mixed|string|\WP_Error
     */
    private function validate_data($value, $type)
    {
    }
}