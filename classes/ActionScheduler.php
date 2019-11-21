<?php


/**
 * Class ActionScheduler
 * @codeCoverageIgnore
 */
abstract class ActionScheduler
{
    private static $plugin_file = '';
    /** @var ActionScheduler_ActionFactory */
    private static $factory = \NULL;
    public static function factory()
    {
    }
    public static function store()
    {
    }
    public static function logger()
    {
    }
    public static function runner()
    {
    }
    public static function admin_view()
    {
    }
    /**
     * Get the absolute system path to the plugin directory, or a file therein
     * @static
     * @param string $path
     * @return string
     */
    public static function plugin_path($path)
    {
    }
    /**
     * Get the absolute URL to the plugin directory, or a file therein
     * @static
     * @param string $path
     * @return string
     */
    public static function plugin_url($path)
    {
    }
    public static function autoload($class)
    {
    }
    /**
     * Initialize the plugin
     *
     * @static
     * @param string $plugin_file
     */
    public static function init($plugin_file)
    {
    }
    final public function __clone()
    {
    }
    final public function __wakeup()
    {
    }
    final private function __construct()
    {
    }
    /** Deprecated **/
    public static function get_datetime_object($when = \null, $timezone = 'UTC')
    {
    }
}