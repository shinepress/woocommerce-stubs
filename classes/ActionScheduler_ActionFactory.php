<?php


/**
 * Class ActionScheduler_ActionFactory
 */
class ActionScheduler_ActionFactory
{
    /**
     * @param string $status The action's status in the data store
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass to callbacks when the hook is triggered
     * @param ActionScheduler_Schedule $schedule The action's schedule
     * @param string $group A group to put the action in
     *
     * @return ActionScheduler_Action An instance of the stored action
     */
    public function get_stored_action($status, $hook, array $args = array(), \ActionScheduler_Schedule $schedule = \null, $group = '')
    {
    }
    /**
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param int $when Unix timestamp when the action will run
     * @param string $group A group to put the action in
     *
     * @return string The ID of the stored action
     */
    public function single($hook, $args = array(), $when = \null, $group = '')
    {
    }
    /**
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param int $first Unix timestamp for the first run
     * @param int $interval Seconds between runs
     * @param string $group A group to put the action in
     *
     * @return string The ID of the stored action
     */
    public function recurring($hook, $args = array(), $first = \null, $interval = \null, $group = '')
    {
    }
    /**
     * @param string $hook The hook to trigger when this action runs
     * @param array $args Args to pass when the hook is triggered
     * @param int $first Unix timestamp for the first run
     * @param int $schedule A cron definition string
     * @param string $group A group to put the action in
     *
     * @return string The ID of the stored action
     */
    public function cron($hook, $args = array(), $first = \null, $schedule = \null, $group = '')
    {
    }
    /**
     * @param ActionScheduler_Action $action
     *
     * @return string The ID of the stored action
     */
    protected function store(\ActionScheduler_Action $action)
    {
    }
}