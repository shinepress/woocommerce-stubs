<?php


/**
 * Class ActionScheduler_NullAction
 */
class ActionScheduler_NullAction extends \ActionScheduler_Action
{
    public function __construct($hook = '', array $args = array(), \ActionScheduler_Schedule $schedule = \NULL)
    {
    }
    public function execute()
    {
    }
}