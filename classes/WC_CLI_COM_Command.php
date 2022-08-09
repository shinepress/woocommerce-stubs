<?php


/**
 * Allows to interact with extensions from WCCOM marketplace via CLI.
 *
 * @version 6.8
 * @package WooCommerce
 */
class WC_CLI_COM_Command
{
    /**
     * Registers a commands for managing WooCommerce.com extensions.
     */
    public static function register_commands()
    {
    }
    /**
     * List extensions owned by the connected site
     *
     * [--format]
     * : If set, the command will use the specified format. Possible values are table, json, csv and yaml. By default the table format will be used.
     *
     * [--fields]
     * : If set, the command will show only the specified fields instead of showing all the fields in the output.
     *
     * ## EXAMPLES
     *
     *     # List extensions owned by the connected site in table format with all the fields
     *     $ wp wc com extension list
     *
     *     # List the product slug of the extension owned by the connected site in csv format
     *     $ wp wc com extension list --format=csv --fields=product_slug
     *
     * @param  array $args  WP-CLI positional arguments.
     * @param  array $assoc_args  WP-CLI associative arguments.
     */
    public static function list_extensions(array $args, array $assoc_args)
    {
    }
}