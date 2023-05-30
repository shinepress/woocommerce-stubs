<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers;

/**
 * Flatten nested array.
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers
 */
class ArrayFlatten implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\TransformerInterface
{
    /**
     * Search a given value in the array.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments arguments.
     * @param string|null   $default default value.
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