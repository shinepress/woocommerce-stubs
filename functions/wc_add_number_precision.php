<?php


/**
 * Add precision to a number by moving the decimal point to the right as many places as indicated by wc_get_price_decimals().
 * Optionally the result is rounded so that the total number of digits equals wc_get_rounding_precision() plus one.
 *
 * @since  3.2.0
 * @param  float|null $value Number to add precision to.
 * @param  bool       $round If the result should be rounded.
 * @return int|float
 */
function wc_add_number_precision(?float $value, bool $round = \true)
{
}