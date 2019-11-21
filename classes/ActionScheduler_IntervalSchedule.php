<?php


/**
 * Class ActionScheduler_IntervalSchedule
 */
class ActionScheduler_IntervalSchedule implements \ActionScheduler_Schedule
{
    /** @var DateTime */
    private $start = \NULL;
    private $start_timestamp = 0;
    private $interval_in_seconds = 0;
    public function __construct(\DateTime $start, $interval)
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
     * @return int
     */
    public function interval_in_seconds()
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