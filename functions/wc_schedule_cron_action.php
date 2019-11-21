<?php


/**
 * Schedule an action that recurs on a cron-like schedule.
 *
 * @param int $timestamp The schedule will start on or after this time
 * @param string $schedule A cron-link schedule string
 * @see http://en.wikipedia.org/wiki/Cron
 *   *    *    *    *    *    *
 *   ┬    ┬    ┬    ┬    ┬    ┬
 *   |    |    |    |    |    |
 *   |    |    |    |    |    + year [optional]
 *   |    |    |    |    +----- day of week (0 - 7) (Sunday=0 or 7)
 *   |    |    |    +---------- month (1 - 12)
 *   |    |    +--------------- day of month (1 - 31)
 *   |    +-------------------- hour (0 - 23)
 *   +------------------------- min (0 - 59)
 * @param string $hook The hook to trigger
 * @param array $args Arguments to pass when the hook triggers
 * @param string $group The group to assign this job to
 *
 * @deprecated 2.1.0
 *
 * @return string The job ID
 */
function wc_schedule_cron_action($timestamp, $schedule, $hook, $args = array(), $group = '')
{
}