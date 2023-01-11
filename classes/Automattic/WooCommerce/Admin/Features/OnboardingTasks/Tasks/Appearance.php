<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Appearance Task
 */
class Appearance extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
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
     * Addtional data.
     *
     * @return array
     */
    public function get_additional_data()
    {
    }
    /**
     * Add media scripts for image uploader.
     */
    public function add_media_scripts()
    {
    }
    /**
     * Adds a return to task list notice when completing the task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_return_notice_script($hook)
    {
    }
    /**
     * Check if the site has a homepage set up.
     */
    public static function has_homepage()
    {
    }
}