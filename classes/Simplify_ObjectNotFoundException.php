<?php


/**
 * Exception when a requested object cannot be found.
 */
class Simplify_ObjectNotFoundException extends \Simplify_ApiException
{
    /**
     * @ignore
     */
    function __construct($message, $status = \null, $errorData = \null)
    {
    }
}