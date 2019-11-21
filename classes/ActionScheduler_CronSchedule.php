<?php


/**
 * Class ActionScheduler_CronSchedule
 */
class ActionScheduler_CronSchedule implements \ActionScheduler_Schedule
{
    /** @var DateTime */
    private $start = \NULL;
    private $start_timestamp = 0;
    /** @var CronExpression */
    private $cron = \NULL;
    public function __construct(\DateTime $start, \CronExpression $cron)
    {
    }
    /**
     * @param DateTime $after
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