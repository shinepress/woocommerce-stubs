<?php


/**
 * PHP Tracks Client
 *
 * @package WooCommerce\Tracks
 */
/**
 * WC_Tracks class.
 */
class WC_Tracks
{
    /**
     * Tracks event name prefix.
     */
    const PREFIX = 'wcadmin_';
    /**
     * Record an event in Tracks - this is the preferred way to record events from PHP.
     * Note: the event request won't be made if $properties has a member called `error`.
     *
     * @param string $event_name The name of the event.
     * @param array  $properties Custom properties to send with the event.
     * @return bool|WP_Error True for success or WP_Error if the event pixel could not be fired.
     */
    public static function record_event($event_name, $properties = array())
    {
    }
}