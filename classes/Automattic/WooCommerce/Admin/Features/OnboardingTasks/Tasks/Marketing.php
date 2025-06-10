<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Marketing Task
 */
class Marketing extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Constructor
     *
     * @param TaskList $task_list Parent task list.
     */
    public function __construct($task_list)
    {
    }
    /**
     * Mark the task as complete when related plugins are activated.
     */
    public function on_activated_plugin($plugin)
    {
    }
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;
    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
    }
    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
    }
    /**
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
    }
    /**
     * Get the marketing plugins.
     *
     * @deprecated 9.3.0 Removed to improve performance.
     * @return array
     */
    public static function get_plugins()
    {
    }
    /**
     * Check if the store has installed marketing extensions.
     *
     * @deprecated 9.3.0 Removed to improve performance.
     * @return bool
     */
    public static function has_installed_extensions()
    {
    }
}