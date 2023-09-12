<?php

namespace Automattic\WooCommerce\Admin\PluginsInstallLoggers;

/**
 * A logger to log plugin installation progress in real time to an option.
 */
class AsyncPluginsInstallLogger implements \Automattic\WooCommerce\Admin\PluginsInstallLoggers\PluginsInstallLogger
{
    /**
     * Variable to store logs.
     *
     * @var string $option_name option name to store logs.
     */
    private $option_name;
    /**
     * Constructor.
     *
     * @param string $option_name option name.
     */
    public function __construct(string $option_name)
    {
    }
    /**
     * Update the option.
     *
     * @param array $data New data.
     *
     * @return bool
     */
    private function update(array $data)
    {
    }
    /**
     * Retreive the option.
     *
     * @return false|mixed|void
     */
    private function get()
    {
    }
    /**
     * Add requested plugin.
     *
     * @param string $plugin_name plugin name.
     *
     * @return void
     */
    public function install_requested(string $plugin_name)
    {
    }
    /**
     * Add installed plugin.
     *
     * @param string $plugin_name plugin name.
     * @param int    $duration time took to install plugin.
     *
     * @return void
     */
    public function installed(string $plugin_name, int $duration)
    {
    }
    /**
     * Change status to activated.
     *
     * @param string $plugin_name plugin name.
     *
     * @return void
     */
    public function activated(string $plugin_name)
    {
    }
    /**
     * Add an error.
     *
     * @param string      $plugin_name plugin name.
     * @param string|null $error_message error message.
     *
     * @return void
     */
    public function add_error(string $plugin_name, string $error_message = null)
    {
    }
    /**
     * Record completed_time.
     *
     * @return void
     */
    public function complete()
    {
    }
}