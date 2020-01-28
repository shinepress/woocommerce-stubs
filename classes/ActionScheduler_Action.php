<?php


/**
 * Class ActionScheduler_Action
 */
class ActionScheduler_Action
{
    protected $hook = '';
    protected $args = array();
    /** @var ActionScheduler_Schedule */
    protected $schedule = \NULL;
    protected $group = '';
    public function __construct($hook, array $args = array(), \ActionScheduler_Schedule $schedule = \NULL, $group = '')
    {
    }
    public function execute()
    {
    }
    /**
     * @param string $hook
     */
    protected function set_hook($hook)
    {
    }
    public function get_hook()
    {
    }
    protected function set_schedule(\ActionScheduler_Schedule $schedule)
    {
    }
    /**
     * @return ActionScheduler_Schedule
     */
    public function get_schedule()
    {
    }
    protected function set_args(array $args)
    {
    }
    public function get_args()
    {
    }
    /**
     * @param string $group
     */
    protected function set_group($group)
    {
    }
    /**
     * @return string
     */
    public function get_group()
    {
    }
    /**
     * @return bool If the action has been finished
     */
    public function is_finished()
    {
    }
}