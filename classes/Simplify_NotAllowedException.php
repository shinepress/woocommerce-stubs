<?php


/**
 * Exception when a request was not allowed.
 */
class Simplify_NotAllowedException extends \Simplify_ApiException
{
    /**
     * @ignore
     */
    function __construct($message, $status = \null, $errorData = \null)
    {
    }
}