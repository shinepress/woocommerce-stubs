<?php


/**
 * Exception when there was a system error processing a request.
 */
class Simplify_SystemException extends \Simplify_ApiException
{
    /**
     * @ignore
     */
    function __construct($message, $status = \null, $errorData = \null)
    {
    }
}