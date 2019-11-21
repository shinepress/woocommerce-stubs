<?php


/**
 * Exception raised where there are problems authenticating a request.
 */
class Simplify_AuthenticationException extends \Simplify_ApiException
{
    /**
     * @ignore
     */
    function __construct($message, $status = \null, $errorData = \null)
    {
    }
}