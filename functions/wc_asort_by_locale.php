<?php


/**
 * Sort array according to current locale rules and maintaining index association.
 * By default tries to use Collator from PHP Internationalization Functions if available.
 * If PHP Collator class doesn't exists it fallback to removing accepts from a array
 * and by sorting with `uasort( $data, 'strcmp' )` giving support for ASCII values.
 *
 * @since 4.6.0
 * @param array  $data   List of values to sort.
 * @param string $locale Locale.
 * @return array
 */
function wc_asort_by_locale(&$data, $locale = '')
{
}