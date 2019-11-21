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
     * Five minutes in seconds
     *
     * @var int
     */
    private $five_minutes = 300;
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
    public function reset_timeouts()
    {
    }
    public function mark_failures()
    {
    }
    /**
     * Do all of the cleaning actions.
     *
     * @author Jeremy Pry
     */
    public function clean()
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