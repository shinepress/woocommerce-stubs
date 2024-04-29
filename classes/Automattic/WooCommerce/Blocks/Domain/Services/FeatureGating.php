<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class that handles the feature flags.
 *
 * @internal
 */
class FeatureGating
{
    /**
     * Current flag value.
     *
     * @var int
     */
    private $flag;
    const EXPERIMENTAL_FLAG = 3;
    const FEATURE_PLUGIN_FLAG = 2;
    const CORE_FLAG = 1;
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
     * @param int    $flag        Hardcoded flag value. Useful for tests.
     * @param string $environment Hardcoded environment value. Useful for tests.
     */
    public function __construct($flag = 0, $environment = 'unset')
    {
    }
    /**
     * Set correct flag.
     */
    public function load_flag()
    {
    }
    /**
     * Set correct environment.
     */
    public function load_environment()
    {
    }
    /**
     * Returns the current flag value.
     *
     * @return int
     */
    public function get_flag()
    {
    }
    /**
     * Checks if we're executing the code in an experimental build mode.
     *
     * @return boolean
     */
    public function is_experimental_build()
    {
    }
    /**
     * Checks if we're executing the code in an feature plugin or experimental build mode.
     *
     * @return boolean
     */
    public function is_feature_plugin_build()
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
    /**
     * Returns core flag value.
     *
     * @return number
     */
    public static function get_core_flag()
    {
    }
    /**
     * Returns feature plugin flag value.
     *
     * @return number
     */
    public static function get_feature_plugin_flag()
    {
    }
    /**
     * Returns experimental flag value.
     *
     * @return number
     */
    public static function get_experimental_flag()
    {
    }
    /**
     * Check if the block templates controller refactor should be used to display blocks.
     *
     * @return boolean
     */
    public function is_block_templates_controller_refactor_enabled()
    {
    }
}