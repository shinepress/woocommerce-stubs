<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks;

/**
 * Task List section class.
 */
class TaskListSection
{
    /**
     * Title.
     *
     * @var string
     */
    public $id = '';
    /**
     * Title.
     *
     * @var string
     */
    public $title = '';
    /**
     * Description.
     *
     * @var string
     */
    public $description = '';
    /**
     * Image.
     *
     * @var string
     */
    public $image = '';
    /**
     * Tasks.
     *
     * @var array
     */
    public $task_names = array();
    /**
     * Parent task list.
     *
     * @var TaskList
     */
    protected $task_list;
    /**
     * Constructor
     *
     * @param array         $data Task list data.
     * @param TaskList|null $task_list Parent task list.
     */
    public function __construct($data = array(), $task_list = null)
    {
    }
    /**
     * Returns if section is complete.
     *
     * @return boolean;
     */
    private function is_complete()
    {
    }
    /**
     * Get the list for use in JSON.
     *
     * @return array
     */
    public function get_json()
    {
    }
}