<?php


/**
 * Class ActionScheduler_QueueRunner
 */
class ActionScheduler_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
{
    const WP_CRON_HOOK = 'action_scheduler_run_queue';
    const WP_CRON_SCHEDULE = 'every_minute';
    /** @var ActionScheduler_QueueRunner  */
    private static $runner = \null;
    /**
     * @return ActionScheduler_QueueRunner
     * @codeCoverageIgnore
     */
    public static function instance()
    {
    }
    /**
     * ActionScheduler_QueueRunner constructor.
     *
     * @param ActionScheduler_Store             $store
     * @param ActionScheduler_FatalErrorMonitor $monitor
     * @param ActionScheduler_QueueCleaner      $cleaner
     */
    public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
    public function run()
    {
    }
    protected function do_batch($size = 100)
    {
    }
    /**
     * Running large batches can eat up memory, as WP adds data to its object cache.
     *
     * If using a persistent object store, this has the side effect of flushing that
     * as well, so this is disabled by default. To enable:
     *
     * add_filter( 'action_scheduler_queue_runner_flush_cache', '__return_true' );
     */
    protected function clear_caches()
    {
    }
    public function add_wp_cron_schedule($schedules)
    {
    }
}