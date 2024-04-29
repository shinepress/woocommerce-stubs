<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Takes care of the migrations.
 *
 * @since 2.5.0
 */
class Migration
{
    /**
     * DB updates and callbacks that need to be run per version.
     *
     * Please note that these functions are invoked when WooCommerce Blocks is updated from a previous version,
     * but NOT when WooCommerce Blocks is newly installed.
     *
     * @var array
     */
    private $db_upgrades = array('10.3.0' => array('wc_blocks_update_1030_blockified_product_grid_block'), '11.2.0' => array('wc_blocks_update_1120_rename_checkout_template', 'wc_blocks_update_1120_rename_cart_template'));
    /**
     * Runs all the necessary migrations.
     *
     * @var array
     */
    public function run_migrations()
    {
    }
    /**
     * Set a flag to indicate if the blockified Product Grid Block should be rendered by default.
     */
    public static function wc_blocks_update_1030_blockified_product_grid_block()
    {
    }
    /**
     * Rename `checkout` template to `page-checkout`.
     */
    public static function wc_blocks_update_1120_rename_checkout_template()
    {
    }
    /**
     * Rename `cart` template to `page-cart`.
     */
    public static function wc_blocks_update_1120_rename_cart_template()
    {
    }
}