<?php

namespace Automattic\WooCommerce\Admin;

// phpcs:disable WordPress.Security.EscapeOutput.OutputNotEscaped
/**
 * A facade to allow deprecating an entire class.
 */
class DeprecatedClassFacade
{
    /**
     * The instance that this facade covers over.
     *
     * @var object
     */
    protected $instance;
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname;
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '';
    /**
     * Static array of logged messages.
     *
     * @var array
     */
    private static $logged_messages = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Log a deprecation to the error log.
     *
     * @param string $function The name of the deprecated function being called.
     */
    private static function log_deprecation($function)
    {
    }
    /**
     * Executes when calling any function on an instance of this class.
     *
     * @param string $name      The name of the function being called.
     * @param array  $arguments An array of the arguments to the function call.
     */
    public function __call($name, $arguments)
    {
    }
    /**
     * Executes when calling any static function on this class.
     *
     * @param string $name      The name of the function being called.
     * @param array  $arguments An array of the arguments to the function call.
     */
    public static function __callStatic($name, $arguments)
    {
    }
}