<?php

namespace Automattic\WooCommerce\Utilities;

/**
 * A class of utilities for dealing with strings.
 */
final class StringUtil
{
    /**
     * Checks to see whether or not a string starts with another.
     *
     * @param string $string The string we want to check.
     * @param string $starts_with The string we're looking for at the start of $string.
     * @param bool   $case_sensitive Indicates whether the comparison should be case-sensitive.
     *
     * @return bool True if the $string starts with $starts_with, false otherwise.
     */
    public static function starts_with(string $string, string $starts_with, bool $case_sensitive = true): bool
    {
    }
    /**
     * Checks to see whether or not a string ends with another.
     *
     * @param string $string The string we want to check.
     * @param string $ends_with The string we're looking for at the end of $string.
     * @param bool   $case_sensitive Indicates whether the comparison should be case-sensitive.
     *
     * @return bool True if the $string ends with $ends_with, false otherwise.
     */
    public static function ends_with(string $string, string $ends_with, bool $case_sensitive = true): bool
    {
    }
}