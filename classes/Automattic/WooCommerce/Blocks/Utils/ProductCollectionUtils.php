<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Utility methods used for the Product Collection block.
 * {@internal This class and its methods are not intended for public use.}
 */
class ProductCollectionUtils
{
    /**
     * Prepare and execute a query for the Product Collection block.
     * This method is used by the Product Collection block and the No Results block.
     *
     * @param WP_Block $block Block instance.
     */
    public static function prepare_and_execute_query($block)
    {
    }
    /**
     * Helper function that constructs a WP_Query args array from
     * a Product Collection or global query.
     *
     * @param WP_Block $block Block instance.
     * @param int      $page  Current query's page.
     *
     * @return array Returns the constructed WP_Query arguments.
     */
    public static function get_query_vars($block, $page)
    {
    }
    /**
     * Remove query array from tax or meta query by searching for arrays that
     * contain exact key => value pair.
     *
     * @param array  $queries tax_query or meta_query.
     * @param string $key     Array key to search for.
     * @param mixed  $value   Value to compare with search result.
     *
     * @return array
     */
    public static function remove_query_array($queries, $key, $value)
    {
    }
    /**
     * Remove falsy item from array, recursively.
     *
     * @param array $array The input array to filter.
     */
    private static function remove_empty_array_recursive($array)
    {
    }
}