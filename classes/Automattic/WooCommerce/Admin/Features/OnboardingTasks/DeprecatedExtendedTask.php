<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * DeprecatedExtendedTask class.
 */
class DeprecatedExtendedTask extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * ID.
     *
     * @var string
     */
    public $id = '';
    /**
     * Snoozeable.
     *
     * @var boolean
     */
    public $is_snoozeable = false;
    /**
     * Dismissable.
     *
     * @var boolean
     */
    public $is_dismissable = false;
    /**
     * Constructor.
     *
     * @param TaskList $task_list Parent task list.
     * @param array    $args Array of task args.
     */
    public function __construct($task_list, $args)
    {
    }
    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Additonal info.
     *
     * @return string
     */
    public function get_additional_info()
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
     * Level.
     *
     * @return int
     */
    public function get_level()
    {
    }
    /**
     * Title
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Time
     *
     * @return string|null
     */
    public function get_time()
    {
    }
    /**
     * Check if a task is snoozeable.
     *
     * @return bool
     */
    public function is_snoozeable()
    {
    }
    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function is_dismissable()
    {
    }
    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function is_complete()
    {
    }
    /**
     * Check if a task is dismissable.
     *
     * @return bool
     */
    public function can_view()
    {
    }
}