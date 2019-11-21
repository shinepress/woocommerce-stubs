<?php


/**
 * Class ActionScheduler_SimpleSchedule
 */
class ActionScheduler_SimpleSchedule implements \ActionScheduler_Schedule
{
    private $date = \NULL;
    private $timestamp = 0;
    public function __construct(\DateTime $date)
    {
    }
    /**
     * @param DateTime $after
     *
     * @return DateTime|null
     */
    public function next(\DateTime $after = \NULL)
    {
    }
    /**
     * @return bool
     */
    public function is_recurring()
    {
    }
    /**
     * For PHP 5.2 compat, since DateTime objects can't be serialized
     * @return array
     */
    public function __sleep()
    {
    }
    public function __wakeup()
    {
    }
}