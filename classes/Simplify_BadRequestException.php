<?php


/**
 * Exception raised when the API request contains errors.
 */
class Simplify_BadRequestException extends \Simplify_ApiException
{
    protected $fieldErrors;
    /**
     * @ignore
     */
    function __construct($message, $status = \null, $errorData = \null)
    {
    }
    /**
     * Returns a boolean indicating whether there are any field errors.
     * @return boolean true if there are field errors; false otherwise.
     */
    function hasFieldErrors()
    {
    }
    /**
     * Returns a list containing all field errors.
     * @return array list of field errors.
     */
    function getFieldErrors()
    {
    }
    /**
     * Returns a description of the error.
     * @return string description of the error.
     */
    function describe()
    {
    }
}