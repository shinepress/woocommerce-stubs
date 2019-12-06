<?php


/**
 * Class ActionScheduler_Versions
 */
class ActionScheduler_Versions
{
    /**
     * @var ActionScheduler_Versions
     */
    private static $instance = \NULL;
    private $versions = array();
    public function register($version_string, $initialization_callback)
    {
    }
    public function get_versions()
    {
    }
    public function latest_version()
    {
    }
    public function latest_version_callback()
    {
    }
    /**
     * @return ActionScheduler_Versions
     * @codeCoverageIgnore
     */
    public static function instance()
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public static function initialize_latest_version()
    {
    }
}