<?php


/**
 * Schedule a recurring action
 *
 * @param int $timestamp When the first instance of the job will run
 * @param int $interval_in_seconds How long to wait between runs
 * @param string $hook The hook to trigger
 * @param array $args Arguments to pass when the hook triggers
 * @param string $group The group to assign this job to
 *
 * @deprecated 2.1.0
 *
 * @return string The job ID
 */
function wc_schedule_recurring_action($timestamp, $interval_in_seconds, $hook, $args = array(), $group = '')
{
}