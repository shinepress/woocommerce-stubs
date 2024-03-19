<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers;

/**
 * Prepare site URL for comparison.
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications\Transformers
 */
class PrepareUrl implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\TransformerInterface
{
    /**
     * Prepares the site URL by removing the protocol and trailing slash.
     *
     * @param string        $value a value to transform.
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