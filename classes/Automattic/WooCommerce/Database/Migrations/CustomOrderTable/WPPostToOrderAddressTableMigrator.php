<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Class WPPostToOrderAddressTableMigrator
 *
 * @package Automattic\WooCommerce\Database\Migrations\CustomOrderTable
 */
class WPPostToOrderAddressTableMigrator extends \Automattic\WooCommerce\Database\Migrations\CustomOrderTable\MetaToCustomTableMigrator
{
    /**
     * Type of addresses being migrated, could be billing|shipping.
     *
     * @var $type
     */
    protected $type;
    /**
     * WPPostToOrderAddressTableMigrator constructor.
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
    public function get_schema_config()
    {
    }
    /**
     * Get columns config.
     *
     * @return \string[][] Config.
     */
    public function get_core_column_mapping()
    {
    }
    /**
     * Get meta data config.
     *
     * @return \string[][] Config.
     */
    public function get_meta_column_config()
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
    public function get_already_migrated_records($entity_ids)
    {
    }
}