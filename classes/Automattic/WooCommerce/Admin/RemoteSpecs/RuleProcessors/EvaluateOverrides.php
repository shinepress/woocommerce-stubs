<?php

namespace Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors;

/**
 * Evaluates `overrides` property in the spec and returns the evaluated spec.
 */
class EvaluateOverrides
{
    /**
     * Evaluates the spec and returns a status.
     *
     * @param array $spec The spec to evaluate.
     * @param array $context The context variables.
     *
     * @return array The evaluated spec.
     */
    public function evaluate(array $spec, array $context = array())
    {
    }
    /**
     * Set a new value to $data with dot notation.
     *
     * This is a slightly modified version of the simple dot notation to support objects.
     *
     * @param mixed  $data The data to update.
     * @param string $path The path to the value to update.
     * @param mixed  $new_value The new value.
     *
     * @return mixed|\stdClass
     */
    public function set_value_with_dot_notation(&$data, $path, $new_value)
    {
    }
}