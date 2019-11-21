<?php


/**
 * Make numeric postcode.
 *
 * Converts letters to numbers so we can do a simple range check on postcodes.
 * E.g. PE30 becomes 16050300 (P = 16, E = 05, 3 = 03, 0 = 00)
 *
 * @since 2.6.0
 * @param string $postcode Regular postcode.
 * @return string
 */
function wc_make_numeric_postcode($postcode)
{
}