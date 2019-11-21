<?php


/**
 * Represents a single error in a field of a request sent to the API.
 */
class Simplify_FieldError
{
    protected $field;
    protected $code;
    protected $message;
    /**
     * @ignore
     */
    function __construct($errorData)
    {
    }
    /**
     * Returns the name of the field with the error.
     * @return string the field name.
     */
    function getFieldName()
    {
    }
    /**
     * Returns the code for the error.
     * @return string the error code.
     */
    function getErrorCode()
    {
    }
    /**
     * Returns a description of the error.
     * @return string description of the error.
     */
    function getMessage()
    {
    }
    function __toString()
    {
    }
}