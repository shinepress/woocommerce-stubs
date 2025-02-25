<?php


/**
 * Normalise dimensions, unify to cm then convert to wanted unit value.
 *
 * Usage:
 * wc_get_dimension( 55, 'in' );
 * wc_get_dimension( 55, 'in', 'm' );
 *
 * @param int|float $dimension    Dimension.
 * @param string    $to_unit      Unit to convert to.
 *                                Options: 'in', 'mm', 'cm', 'm'.
 * @param string    $from_unit    Unit to convert from.
 *                                Defaults to ''.
 *                                Options: 'in', 'mm', 'cm', 'm'.
 * @return float
 */
function wc_get_dimension($dimension, $to_unit, $from_unit = '')
{
}