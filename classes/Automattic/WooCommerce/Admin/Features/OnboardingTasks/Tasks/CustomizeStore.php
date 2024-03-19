<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Customize Your Store Task
 */
class CustomizeStore extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
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
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
    }
    /**
     * Action URL.
     *
     * @return string
     */
    public function get_action_url()
    {
    }
    /**
     * Possibly add site editor scripts.
     */
    public function possibly_add_site_editor_scripts()
    {
    }
    /**
     * Mark task as complete.
     */
    public function mark_task_as_complete()
    {
    }
    /**
     * Appends a small style to hide admin bar
     *
     * @param bool $show Whether to show the admin bar.
     */
    public function possibly_hide_wp_admin_bar($show)
    {
    }
    /**
     * Runs script and add styles to remove unwanted elements and hide scrollbar
     * when users are viewing with ?cys-hide-admin-bar=true.
     *
     * @return void
     */
    public function possibly_remove_unwanted_ui_elements()
    {
    }
}