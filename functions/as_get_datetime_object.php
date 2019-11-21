<?php


/**
 * Helper function to create an instance of DateTime based on a given
 * string and timezone. By default, will return the current date/time
 * in the UTC timezone.
 *
 * Needed because new DateTime() called without an explicit timezone
 * will create a date/time in PHP's timezone, but we need to have
 * assurance that a date/time uses the right timezone (which we almost
 * always want to be UTC), which means we need to always include the
 * timezone when instantiating datetimes rather than leaving it up to
 * the PHP default.
 *
 * @param mixed $date_string A date/time string. Valid formats are explained in http://php.net/manual/en/datetime.formats.php
 * @param string $timezone A timezone identifier, like UTC or Europe/Lisbon. The list of valid identifiers is available http://php.net/manual/en/timezones.php
 *
 * @return ActionScheduler_DateTime
 */
function as_get_datetime_object($date_string = \null, $timezone = 'UTC')
{
}