<?php

namespace Automattic\WooCommerce\Blocks\Registry;

/**
 * An abstract class for dependency types.
 *
 * Dependency types are instances of a dependency used by the
 * Dependency Injection Container for storing dependencies to invoke as they
 * are needed.
 *
 * @since 2.5.0
 */
abstract class AbstractDependencyType
{
    /**
     * Holds a callable or value provided for this type.
     *
     * @var mixed
     */
    private $callable_or_value;
    /**
     * Constructor
     *
     * @param mixed $callable_or_value  A callable or value for the dependency
     *                                  type instance.
     */
    public function __construct($callable_or_value)
    {
    }
    /**
     * Resolver for the internal dependency value.
     *
     * @param Container $container  The Dependency Injection Container.
     *
     * @return mixed
     */
    protected function resolve_value(\Automattic\WooCommerce\Blocks\Registry\Container $container)
    {
    }
    /**
     * Retrieves the value stored internally for this DependencyType
     *
     * @param Container $container  The Dependency Injection Container.
     *
     * @return void
     */
    abstract public function get(\Automattic\WooCommerce\Blocks\Registry\Container $container);
}