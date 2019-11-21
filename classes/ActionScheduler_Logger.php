<?php


/**
 * Class ActionScheduler_Logger
 * @codeCoverageIgnore
 */
abstract class ActionScheduler_Logger
{
    private static $logger = \NULL;
    /**
     * @return ActionScheduler_Logger
     */
    public static function instance()
    {
    }
    /**
     * @param string $action_id
     * @param string $message
     * @param DateTime $date
     *
     * @return string The log entry ID
     */
    abstract public function log($action_id, $message, \DateTime $date = \NULL);
    /**
     * @param string $entry_id
     *
     * @return ActionScheduler_LogEntry
     */
    abstract public function get_entry($entry_id);
    /**
     * @param string $action_id
     *
     * @return ActionScheduler_LogEntry[]
     */
    abstract public function get_logs($action_id);
    /**
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
    public function log_stored_action($action_id)
    {
    }
    public function log_canceled_action($action_id)
    {
    }
    public function log_started_action($action_id)
    {
    }
    public function log_completed_action($action_id)
    {
    }
    public function log_failed_action($action_id, \Exception $exception)
    {
    }
    public function log_timed_out_action($action_id, $timeout)
    {
    }
    public function log_unexpected_shutdown($action_id, $error)
    {
    }
    public function log_reset_action($action_id)
    {
    }
    public function log_ignored_action($action_id)
    {
    }
}