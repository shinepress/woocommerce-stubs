<?php

namespace Automattic\WooCommerce\Database\Migrations;

/**
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
     * Helper method to escape backtick in various schema fields.
     *
     * @param array $schema_config Schema config.
     *
     * @return array Schema config escaped for backtick.
     */
    public static function escape_schema_for_backtick(array $schema_config): array
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
    public static function get_wpdb_placeholder_for_type(string $type): string
    {
    }
    /**
     * Generates ON DUPLICATE KEY UPDATE clause to be used in migration.
     *
     * @param array $columns List of column names.
     *
     * @return string SQL clause for INSERT...ON DUPLICATE KEY UPDATE
     */
    public static function generate_on_duplicate_statement_clause(array $columns): string
    {
    }
    /**
     * Migrate state codes in all the required places in the database, needed after they change for a given country.
     *
     * @param string $country_code The country that has the states for which the migration is needed.
     * @param array  $old_to_new_states_mapping An associative array where keys are the old state codes and values are the new state codes.
     * @return bool True if there are more records that need to be migrated, false otherwise.
     */
    public static function migrate_country_states(string $country_code, array $old_to_new_states_mapping): bool
    {
    }
    /**
     * Migrate state codes in all the required places in the database (except orders).
     *
     * @param string $country_code The country that has the states for which the migration is needed.
     * @param array  $old_to_new_states_mapping An associative array where keys are the old state codes and values are the new state codes.
     * @return void
     */
    private static function migrate_country_states_for_misc_data(string $country_code, array $old_to_new_states_mapping): void
    {
    }
    /**
     * Migrate state codes in the shipping locations table.
     *
     * @param string $country_code The country that has the states for which the migration is needed.
     * @param array  $old_to_new_states_mapping An associative array where keys are the old state codes and values are the new state codes.
     * @return void
     */
    private static function migrate_country_states_for_shipping_locations(string $country_code, array $old_to_new_states_mapping): void
    {
    }
    /**
     * Migrate the state code for the store location.
     *
     * @param string $country_code The country that has the states for which the migration is needed.
     * @param array  $old_to_new_states_mapping An associative array where keys are the old state codes and values are the new state codes.
     * @return void
     */
    private static function migrate_country_states_for_store_location(string $country_code, array $old_to_new_states_mapping): void
    {
    }
    /**
     * Migrate state codes for orders in the orders table and in the posts table.
     * It will migrate only N*2*(number of states) records, being N equal to 100 by default
     * but this number can be modified via the woocommerce_migrate_country_states_for_orders_batch_size filter.
     *
     * @param string $country_code The country that has the states for which the migration is needed.
     * @param array  $old_to_new_states_mapping An associative array where keys are the old state codes and values are the new state codes.
     * @return bool True if there are more records that need to be migrated, false otherwise.
     */
    private static function migrate_country_states_for_orders(string $country_code, array $old_to_new_states_mapping): bool
    {
    }
    /**
     * Migrate state codes in the tax rates table.
     *
     * @param string $country_code The country that has the states for which the migration is needed.
     * @param array  $old_to_new_states_mapping An associative array where keys are the old state codes and values are the new state codes.
     * @return void
     */
    private static function migrate_country_states_for_tax_rates(string $country_code, array $old_to_new_states_mapping): void
    {
    }
}