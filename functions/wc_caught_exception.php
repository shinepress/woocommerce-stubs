<?php


/**
 * When catching an exception, this allows us to log it if unexpected.
 *
 * @since 3.3.0
 * @param Exception $exception_object The exception object.
 * @param string    $function The function which threw exception.
 * @param array     $args The args passed to the function.
 */
function wc_caught_exception($exception_object, $function = '', $args = array())
{
}