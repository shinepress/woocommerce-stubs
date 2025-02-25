<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class that used to handle feature flags. That functionality
 * is removed now and it is only used to determine "environment".
 *
 * @internal
 */
class FeatureGating
{
    /**
     * Current environment
     *
     * @var string
     */
    private $environment;
    const PRODUCTION_ENVIRONMENT = 'production';
    const DEVELOPMENT_ENVIRONMENT = 'development';
    const TEST_ENVIRONMENT = 'test';
    /**
     * Constructor
     *
     * @param string $environment Hardcoded environment value. Useful for tests.
     */
    public function __construct($environment = 'unset')
    {
    }
    /**
     * Set correct environment.
     */
    public function load_environment()
    {
    }
    /**
     * Returns the current environment value.
     *
     * @return string
     */
    public function get_environment()
    {
    }
    /**
     * Checks if we're executing the code in an development environment.
     *
     * @return boolean
     */
    public function is_development_environment()
    {
    }
    /**
     * Checks if we're executing the code in a production environment.
     *
     * @return boolean
     */
    public function is_production_environment()
    {
    }
    /**
     * Checks if we're executing the code in a test environment.
     *
     * @return boolean
     */
    public function is_test_environment()
    {
    }
}