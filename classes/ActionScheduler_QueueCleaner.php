<?php


/**
 * Class ActionScheduler_QueueCleaner
 */
class ActionScheduler_QueueCleaner
{
    /** @var int */
    protected $batch_size;
    /** @var ActionScheduler_Store */
    private $store = \null;
    /**
     * 31 days in seconds.
     *
     * @var int
     */
    private $month_in_seconds = 2678400;
    /**
     * ActionScheduler_QueueCleaner constructor.
     *
     * @param ActionScheduler_Store $store      The store instance.
     * @param int                   $batch_size The batch size.
     */
    public function __construct(\ActionScheduler_Store $store = \null, $batch_size = 20)
    {
    }
    public function delete_old_actions()
    {
    }
    /**
     * Unclaim pending actions that have not been run within a given time limit.
     *
     * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
     * as a parameter is 10x the time limit used for queue processing.
     *
     * @param int $time_limit The number of seconds to allow a queue to run before unclaiming its pending actions. Default 300 (5 minutes).
     */
    public function reset_timeouts($time_limit = 300)
    {
    }
    /**
     * Mark actions that have been running for more than a given time limit as failed, based on
     * the assumption some uncatachable and unloggable fatal error occurred during processing.
     *
     * When called by ActionScheduler_Abstract_QueueRunner::run_cleanup(), the time limit passed
     * as a parameter is 10x the time limit used for queue processing.
     *
     * @param int $time_limit The number of seconds to allow an action to run before it is considered to have failed. Default 300 (5 minutes).
     */
    public function mark_failures($time_limit = 300)
    {
    }
    /**
     * Do all of the cleaning actions.
     *
     * @param int $time_limit The number of seconds to use as the timeout and failure period. Default 300 (5 minutes).
     * @author Jeremy Pry
     */
    public function clean($time_limit = 300)
    {
    }
    /**
     * Get the batch size for cleaning the queue.
     *
     * @author Jeremy Pry
     * @return int
     */
    protected function get_batch_size()
    {
    }
}