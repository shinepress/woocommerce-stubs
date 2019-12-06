<?php


/**
 * Deprecated API functions for scheduling actions
 *
 * Functions with the wc prefix were deprecated to avoid confusion with
 * Action Scheduler being included in WooCommerce core, and it providing
 * a different set of APIs for working with the action queue.
 */
/**
 * Schedule an action to run one time
 *
 * @param int $timestamp When the job will run
 * @param string $hook The hook to trigger
 * @param array $args Arguments to pass when the hook triggers
 * @param string $group The group to assign this job to
 *
 * @return string The job ID
 */
function wc_schedule_single_action($timestamp, $hook, $args = array(), $group = '')
{
}