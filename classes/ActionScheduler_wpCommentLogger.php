<?php


/**
 * Class ActionScheduler_wpCommentLogger
 */
class ActionScheduler_wpCommentLogger extends \ActionScheduler_Logger
{
    const AGENT = 'ActionScheduler';
    const TYPE = 'action_log';
    /**
     * @param string $action_id
     * @param string $message
     * @param DateTime $date
     *
     * @return string The log entry ID
     */
    public function log($action_id, $message, \DateTime $date = \NULL)
    {
    }
    protected function create_wp_comment($action_id, $message, \DateTime $date)
    {
    }
    /**
     * @param string $entry_id
     *
     * @return ActionScheduler_LogEntry
     */
    public function get_entry($entry_id)
    {
    }
    /**
     * @param string $action_id
     *
     * @return ActionScheduler_LogEntry[]
     */
    public function get_logs($action_id)
    {
    }
    protected function get_comment($comment_id)
    {
    }
    /**
     * @param WP_Comment_Query $query
     */
    public function filter_comment_queries($query)
    {
    }
    /**
     * @param array $clauses
     * @param WP_Comment_Query $query
     *
     * @return array
     */
    public function filter_comment_query_clauses($clauses, $query)
    {
    }
    /**
     * Make sure Action Scheduler logs are excluded from comment feeds, which use WP_Query, not
     * the WP_Comment_Query class handled by @see self::filter_comment_queries().
     *
     * @param string $where
     * @param WP_Query $query
     *
     * @return string
     */
    public function filter_comment_feed($where, $query)
    {
    }
    /**
     * Return a SQL clause to exclude Action Scheduler comments.
     *
     * @return string
     */
    protected function get_where_clause()
    {
    }
    /**
     * Remove action log entries from wp_count_comments()
     *
     * @param array $stats
     * @param int $post_id
     *
     * @return object
     */
    public function filter_comment_count($stats, $post_id)
    {
    }
    /**
     * Retrieve the comment counts from our cache, or the database if the cached version isn't set.
     *
     * @return object
     */
    protected function get_comment_count()
    {
    }
    /**
     * Delete comment count cache whenever there is new comment or the status of a comment changes. Cache
     * will be regenerated next time ActionScheduler_wpCommentLogger::filter_comment_count() is called.
     */
    public function delete_comment_count_cache()
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
    public function disable_comment_counting()
    {
    }
    public function enable_comment_counting()
    {
    }
}