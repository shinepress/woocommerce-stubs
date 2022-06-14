<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Helper class to migrate records from the WordPress post table
 * to the custom order addresses table.
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class PostToOrderAddressTableMigrator extends \Automattic\WooCommerce\Database\Migrations\CustomOrderTable\MetaToCustomTableMigrator
{
    /**
     * Type of addresses being migrated, could be billing|shipping.
     *
     * @var $type
     */
    protected $type;
    /**
     * PostToOrderAddressTableMigrator constructor.
     *
     * @param string $type Type of addresses being migrated, could be billing|shipping.
     */
    public function __construct($type)
    {
    }
    /**
     * Get schema config for wp_posts and wc_order_address table.
     *
     * @return array Config.
     */
    public function get_schema_config(): array
    {
    }
    /**
     * Get columns config.
     *
     * @return \string[][] Config.
     */
    public function get_core_column_mapping(): array
    {
    }
    /**
     * Get meta data config.
     *
     * @return \string[][] Config.
     */
    public function get_meta_column_config(): array
    {
    }
    /**
     * We overwrite this method to add a subclause to only fetch address of current type.
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
    public function get_already_migrated_records(array $entity_ids): array
    {
    }
    /**
     * Helper function to generate where clause for fetching data for verification.
     *
     * @param array $source_ids Array of IDs from source table.
     *
     * @return string WHERE clause.
     */
    protected function get_where_clause_for_verification($source_ids)
    {
    }
}