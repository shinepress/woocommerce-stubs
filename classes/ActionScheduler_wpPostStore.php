<?php


/**
 * Class ActionScheduler_wpPostStore
 */
class ActionScheduler_wpPostStore extends \ActionScheduler_Store
{
    const POST_TYPE = 'scheduled-action';
    const GROUP_TAXONOMY = 'action-group';
    const SCHEDULE_META_KEY = '_action_manager_schedule';
    /** @var DateTimeZone */
    protected $local_timezone = \NULL;
    /** @var int */
    private static $max_index_length = 191;
    public function save_action(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
    {
    }
    protected function create_post_array(\ActionScheduler_Action $action, \DateTime $scheduled_date = \NULL)
    {
    }
    protected function save_post_array($post_array)
    {
    }
    public function filter_insert_post_data($postdata)
    {
    }
    protected function save_post_schedule($post_id, $schedule)
    {
    }
    protected function save_action_group($post_id, $group)
    {
    }
    public function fetch_action($action_id)
    {
    }
    protected function get_post($action_id)
    {
    }
    protected function get_null_action()
    {
    }
    protected function make_action_from_post($post)
    {
    }
    /**
     * @param string $post_status
     *
     * @throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels()
     * @return string
     */
    protected function get_action_status_by_post_status($post_status)
    {
    }
    /**
     * @param string $action_status
     * @throws InvalidArgumentException if $post_status not in known status fields returned by $this->get_status_labels()
     * @return string
     */
    protected function get_post_status_by_action_status($action_status)
    {
    }
    /**
     * @param string $hook
     * @param array $params
     *
     * @return string ID of the next action matching the criteria or NULL if not found
     */
    public function find_action($hook, $params = array())
    {
    }
    /**
     * Returns the SQL statement to query (or count) actions.
     *
     * @param array $query Filtering options
     * @param string $select_or_count  Whether the SQL should select and return the IDs or just the row count
     * @throws InvalidArgumentException if $select_or_count not count or select
     * @return string SQL statement. The returned SQL is already properly escaped.
     */
    protected function get_query_actions_sql(array $query, $select_or_count = 'select')
    {
    }
    /**
     * @param array $query
     * @param string $query_type Whether to select or count the results. Default, select.
     * @return string|array The IDs of actions matching the query
     */
    public function query_actions($query = array(), $query_type = 'select')
    {
    }
    /**
     * Get a count of all actions in the store, grouped by status
     *
     * @return array
     */
    public function action_counts()
    {
    }
    /**
     * @param string $action_id
     *
     * @throws InvalidArgumentException
     */
    public function cancel_action($action_id)
    {
    }
    public function delete_action($action_id)
    {
    }
    /**
     * @param string $action_id
     *
     * @throws InvalidArgumentException
     * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
     */
    public function get_date($action_id)
    {
    }
    /**
     * @param string $action_id
     *
     * @throws InvalidArgumentException
     * @return ActionScheduler_DateTime The date the action is schedule to run, or the date that it ran.
     */
    public function get_date_gmt($action_id)
    {
    }
    /**
     * @param int      $max_actions
     * @param DateTime $before_date Jobs must be schedule before this date. Defaults to now.
     * @param array    $hooks       Claim only actions with a hook or hooks.
     * @param string   $group       Claim only actions in the given group.
     *
     * @return ActionScheduler_ActionClaim
     * @throws RuntimeException When there is an error staking a claim.
     * @throws InvalidArgumentException When the given group is not valid.
     */
    public function stake_claim($max_actions = 10, \DateTime $before_date = \null, $hooks = array(), $group = '')
    {
    }
    /**
     * @return int
     */
    public function get_claim_count()
    {
    }
    protected function generate_claim_id()
    {
    }
    /**
     * @param string   $claim_id
     * @param int      $limit
     * @param DateTime $before_date Should use UTC timezone.
     * @param array    $hooks       Claim only actions with a hook or hooks.
     * @param string   $group       Claim only actions in the given group.
     *
     * @return int The number of actions that were claimed
     * @throws RuntimeException When there is a database error.
     * @throws InvalidArgumentException When the group is invalid.
     */
    protected function claim_actions($claim_id, $limit, \DateTime $before_date = \null, $hooks = array(), $group = '')
    {
    }
    /**
     * Get IDs of actions within a certain group and up to a certain date/time.
     *
     * @param string   $group The group to use in finding actions.
     * @param int      $limit The number of actions to retrieve.
     * @param DateTime $date  DateTime object representing cutoff time for actions. Actions retrieved will be
     *                        up to and including this DateTime.
     *
     * @return array IDs of actions in the appropriate group and before the appropriate time.
     * @throws InvalidArgumentException When the group does not exist.
     */
    protected function get_actions_by_group($group, $limit, \DateTime $date)
    {
    }
    /**
     * @param string $claim_id
     * @return array
     */
    public function find_actions_by_claim_id($claim_id)
    {
    }
    public function release_claim(\ActionScheduler_ActionClaim $claim)
    {
    }
    /**
     * @param string $action_id
     */
    public function unclaim_action($action_id)
    {
    }
    public function mark_failure($action_id)
    {
    }
    /**
     * Return an action's claim ID, as stored in the post password column
     *
     * @param string $action_id
     * @return mixed
     */
    public function get_claim_id($action_id)
    {
    }
    /**
     * Return an action's status, as stored in the post status column
     *
     * @param string $action_id
     * @return mixed
     */
    public function get_status($action_id)
    {
    }
    private function get_post_column($action_id, $column_name)
    {
    }
    /**
     * @param string $action_id
     */
    public function log_execution($action_id)
    {
    }
    public function mark_complete($action_id)
    {
    }
    /**
     * InnoDB indexes have a maximum size of 767 bytes by default, which is only 191 characters with utf8mb4.
     *
     * Previously, AS wasn't concerned about args length, as we used the (unindex) post_content column. However,
     * as we prepare to move to custom tables, and can use an indexed VARCHAR column instead, we want to warn
     * developers of this impending requirement.
     *
     * @param ActionScheduler_Action $action
     */
    protected function validate_action(\ActionScheduler_Action $action)
    {
    }
    /**
     * @codeCoverageIgnore
     */
    public function init()
    {
    }
}