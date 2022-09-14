<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Products Task
 */
class Products extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
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
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
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
     * Adds a return to task list notice when completing the manual product task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_manual_return_notice_script($hook)
    {
    }
    /**
     * Adds a return to task list notice when completing the import product task.
     *
     * @param string $hook Page hook.
     */
    public function possibly_add_import_return_notice_script($hook)
    {
    }
    /**
     * Check if the store has any published products.
     *
     * @return bool
     */
    public static function has_products()
    {
    }
}