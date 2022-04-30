<?php

namespace Automattic\WooCommerce\Internal\Utilities;

/**
 * A class of utilities for dealing with the database.
 */
class DatabaseUtil
{
    /**
     * Wrapper for the WordPress dbDelta function, allows to execute a series of SQL queries.
     *
     * @param string $queries The SQL queries to execute.
     * @param bool   $execute Ture to actually execute the queries, false to only simulate the execution.
     * @return array The result of the execution (or simulation) from dbDelta.
     */
    public function dbdelta(string $queries = '', bool $execute = true): array
    {
    }
    /**
     * Given a set of table creation SQL statements, check which of the tables are currently missing in the database.
     *
     * @param string $creation_queries The SQL queries to execute ("CREATE TABLE" statements, same format as for dbDelta).
     * @return array An array containing the names of the tables that currently don't exist in the database.
     */
    public function get_missing_tables(string $creation_queries): array
    {
    }
    /**
     * Parses the output given by dbdelta and returns information about it.
     *
     * @param array $dbdelta_output The output from the execution of dbdelta.
     * @return array[] An array containing a 'created_tables' key whose value is an array with the names of the tables that have been (or would have been) created.
     */
    public function parse_dbdelta_output(array $dbdelta_output): array
    {
    }
    /**
     * Drops a database table.
     *
     * @param string $table_name The name of the table to drop.
     * @param bool   $add_prefix True if the table name passed needs to be prefixed with $wpdb->prefix before processing.
     * @return bool True on success, false on error.
     */
    public function drop_database_table(string $table_name, bool $add_prefix = false)
    {
    }
    /**
     * Drops a table index, if both the table and the index exist.
     *
     * @param string $table_name The name of the table that contains the index.
     * @param string $index_name The name of the index to be dropped.
     * @return bool True if the index has been dropped, false if either the table or the index don't exist.
     */
    public function drop_table_index(string $table_name, string $index_name): bool
    {
    }
    /**
     * Create a primary key for a table, only if the table doesn't have a primary key already.
     *
     * @param string $table_name Table name.
     * @param array  $columns An array with the index column names.
     * @return bool True if the key has been created, false if the table already had a primary key.
     */
    public function create_primary_key(string $table_name, array $columns)
    {
    }
    /**
     * Get the columns of a given table index, or of the primary key.
     *
     * @param string $table_name Table name.
     * @param string $index_name Index name, empty string for the primary key.
     * @return array The index columns. Empty array if the table or the index don't exist.
     */
    public function get_index_columns(string $table_name, string $index_name = ''): array
    {
    }
}