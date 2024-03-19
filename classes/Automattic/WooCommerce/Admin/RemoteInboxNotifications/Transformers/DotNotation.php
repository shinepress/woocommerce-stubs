<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers;

/**
 * Find an array value by dot notation.
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers
 */
class DotNotation implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\TransformerInterface
{
    /**
     * Find given path from the given value.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments required argument 'path'.
     * @param string|null   $default default value.
     *
     * @throws InvalidArgumentException Throws when the required 'path' is missing.
     *
     * @return mixed
     */
    public function transform($value, \stdClass $arguments = null, $default = null)
    {
    }
    /**
     * Find the given $path in $array by dot notation.
     *
     * @param array  $array an array to search in.
     * @param string $path a path in the given array.
     * @param null   $default default value to return if $path was not found.
     *
     * @return mixed|null
     */
    public function get($array, $path, $default = null)
    {
    }
    /**
     * Validate Transformer arguments.
     *
     * @param stdClass|null $arguments arguments to validate.
     *
     * @return mixed
     */
    public function validate(\stdClass $arguments = null)
    {
    }
}