<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * A simple service class for the Transformer classes.
 *
 * Class TransformerService
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications
 */
class TransformerService
{
    /**
     * Create a transformer object by name.
     *
     * @param string $name name of the transformer.
     *
     * @return TransformerInterface|null
     */
    public static function create_transformer($name)
    {
    }
    /**
     * Apply transformers to the given value.
     *
     * @param mixed  $target_value a value to transform.
     * @param array  $transformer_configs transform configuration.
     * @param string $default default value.
     *
     * @throws InvalidArgumentException Throws when one of the requried arguments is missing.
     * @return mixed|null
     */
    public static function apply($target_value, array $transformer_configs, $default)
    {
    }
}