<?php

namespace Automattic\WooCommerce\StoreApi\Utilities;

/**
 * ArrayUtils class used for custom functions to operate on arrays
 */
class ArrayUtils
{
    /**
     * Join a string with a natural language conjunction at the end.
     *
     * @param array $array  The array to join together with the natural language conjunction.
     * @param bool  $enclose_items_with_quotes Whether each item in the array should be enclosed within quotation marks.
     *
     * @return string a string containing a list of items and a natural language conjuction.
     */
    public static function natural_language_join($array, $enclose_items_with_quotes = false)
    {
    }
    /**
     * Check if a string contains any of the items in an array.
     *
     * @param string $needle The string to check.
     * @param array  $haystack  The array of items to check for.
     *
     * @return bool true if the string contains any of the items in the array, false otherwise.
     */
    public static function string_contains_array($needle, $haystack)
    {
    }
}