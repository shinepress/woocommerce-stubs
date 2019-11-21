<?php


/**
 * Exception raised when there are communication problems contacting the API.
 */
class Simplify_ApiConnectionException extends \Simplify_ApiException
{
    /**
     * @ignore
     */
    function __construct($message, $status = \null, $errorData = \null)
    {
    }
}