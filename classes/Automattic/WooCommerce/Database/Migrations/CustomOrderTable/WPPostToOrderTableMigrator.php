<?php

namespace Automattic\WooCommerce\Database\Migrations\CustomOrderTable;

/**
 * Class WPPostToOrderTableMigrator.
 */
class WPPostToOrderTableMigrator extends \Automattic\WooCommerce\Database\Migrations\CustomOrderTable\MetaToCustomTableMigrator
{
    /**
     * Get schema config for wp_posts and wc_order table.
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
}