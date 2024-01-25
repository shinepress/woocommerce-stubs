<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers;

/**
 * Searches a given a given value in the array.
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers
 */
class ArraySearch implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\TransformerInterface
{
    /**
     * Search a given value in the array.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments required argument 'value'.
     * @param string|null   $default default value.
     *
     * @throws InvalidArgumentException Throws when the required 'value' is missing.
     *
     * @return mixed|null
     */
    public function transform($value, \stdClass $arguments = null, $default = null)
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