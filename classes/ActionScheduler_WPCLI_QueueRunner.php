<?php


/**
 * WP CLI Queue runner.
 *
 * This class can only be called from within a WP CLI instance.
 */
class ActionScheduler_WPCLI_QueueRunner extends \ActionScheduler_Abstract_QueueRunner
{
    /** @var array */
    protected $actions;
    /** @var  ActionScheduler_ActionClaim */
    protected $claim;
    /** @var \cli\progress\Bar */
    protected $progress_bar;
    /**
     * ActionScheduler_WPCLI_QueueRunner constructor.
     *
     * @param ActionScheduler_Store             $store
     * @param ActionScheduler_FatalErrorMonitor $monitor
     * @param ActionScheduler_QueueCleaner      $cleaner
     *
     * @throws Exception When this is not run within WP CLI
     */
    public function __construct(\ActionScheduler_Store $store = \null, \ActionScheduler_FatalErrorMonitor $monitor = \null, \ActionScheduler_QueueCleaner $cleaner = \null)
    {
    }
    /**
     * Set up the Queue before processing.
     *
     * @author Jeremy Pry
     *
     * @param int    $batch_size The batch size to process.
     * @param array  $hooks      The hooks being used to filter the actions claimed in this batch.
     * @param string $group      The group of actions to claim with this batch.
     * @param bool   $force      Whether to force running even with too many concurrent processes.
     *
     * @return int The number of actions that will be run.
     * @throws \WP_CLI\ExitException When there are too many concurrent batches.
     */
    public function setup($batch_size, $hooks = array(), $group = '', $force = \false)
    {
    }
    /**
     * Add our hooks to the appropriate actions.
     *
     * @author Jeremy Pry
     */
    protected function add_hooks()
    {
    }
    /**
     * Set up the WP CLI progress bar.
     *
     * @author Jeremy Pry
     */
    protected function setup_progress_bar()
    {
    }
    /**
     * Process actions in the queue.
     *
     * @author Jeremy Pry
     * @return int The number of actions processed.
     */
    public function run()
    {
    }
    /**
     * Handle WP CLI message when the action is starting.
     *
     * @author Jeremy Pry
     *
     * @param $action_id
     */
    public function before_execute($action_id)
    {
    }
    /**
     * Handle WP CLI message when the action has completed.
     *
     * @author Jeremy Pry
     *
     * @param int $action_id
     * @param null|ActionScheduler_Action $action The instance of the action. Default to null for backward compatibility.
     */
    public function after_execute($action_id, $action = \null)
    {
    }
    /**
     * Handle WP CLI message when the action has failed.
     *
     * @author Jeremy Pry
     *
     * @param int       $action_id
     * @param Exception $exception
     * @throws \WP_CLI\ExitException With failure message.
     */
    public function action_failed($action_id, $exception)
    {
    }
    /**
     * Sleep and help avoid hitting memory limit
     *
     * @param int $sleep_time Amount of seconds to sleep
     */
    protected function stop_the_insanity($sleep_time = 0)
    {
    }
    /**
     * Maybe trigger the stop_the_insanity() method to free up memory.
     */
    protected function maybe_stop_the_insanity()
    {
    }
}