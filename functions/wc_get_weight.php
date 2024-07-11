<?php


/**
 * Normalise weights, unify to kg then convert to wanted unit value.
 *
 * Usage:
 * wc_get_weight(55, 'kg');
 * wc_get_weight(55, 'kg', 'lbs');
 *
 * @param int|float $weight    Weight.
 * @param string    $to_unit   Unit to convert to.
 *                             Options: 'g', 'kg', 'lbs', 'oz'.
 * @param string    $from_unit Unit to convert from.
 *                             Defaults to ''.
 *                             Options: 'g', 'kg', 'lbs', 'oz'.
 * @return float
 */
function wc_get_weight($weight, $to_unit, $from_unit = '')
{
}