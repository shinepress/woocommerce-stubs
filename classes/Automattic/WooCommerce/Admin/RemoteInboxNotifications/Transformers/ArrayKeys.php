<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers;

/**
 * Search array value by one of its key.
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers
 */
class ArrayKeys implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\TransformerInterface
{
    /**
     * Search array value by one of its key.
     *
     * @param mixed         $value a value to transform.
     * @param stdClass|null $arguments arguments.
     * @param string|null   $default default value.
     *
     * @return mixed
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