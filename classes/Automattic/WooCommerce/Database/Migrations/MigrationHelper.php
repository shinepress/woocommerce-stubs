<?php

namespace Automattic\WooCommerce\Database\Migrations;

/**
 * Class MigrationHelper.
 *
 * Helper class to assist with migration related operations.
 */
class MigrationHelper
{
    /**
     * Placeholders that we will use in building $wpdb queries.
     *
     * @var string[]
     */
    private static $wpdb_placeholder_for_type = array('int' => '%d', 'decimal' => '%f', 'string' => '%s', 'date' => '%s', 'date_epoch' => '%s', 'bool' => '%d');
    /**
     * Get insert clause for appropriate switch.
     *
     * @param string $switch Name of the switch to use.
     *
     * @return string Insert clause.
     */
    public static function get_insert_switch($switch)
    {
    }
    /**
     * Helper method to escape backtick in various schema fields.
     *
     * @param array $schema_config Schema config.
     *
     * @return array Schema config escaped for backtick.
     */
    public static function escape_schema_for_backtick($schema_config)
    {
    }
    /**
     * Helper method to escape backtick in column and table names.
     * WP does not provide a method to escape table/columns names yet, but hopefully soon in @link https://core.trac.wordpress.org/ticket/52506
     *
     * @param string|array $identifier Column or table name.
     *
     * @return array|string|string[] Escaped identifier.
     */
    public static function escape_and_add_backtick($identifier)
    {
    }
    /**
     * Return $wpdb->prepare placeholder for data type.
     *
     * @param string $type Data type.
     *
     * @return string $wpdb placeholder.
     */
    public static function get_wpdb_placeholder_for_type($type)
    {
    }
}