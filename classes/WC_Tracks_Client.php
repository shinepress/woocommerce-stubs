<?php


/**
 * WC_Tracks_Client class.
 */
class WC_Tracks_Client
{
    /**
     * Pixel URL.
     */
    const PIXEL = 'https://pixel.wp.com/t.gif';
    /**
     * Browser type.
     */
    const BROWSER_TYPE = 'php-agent';
    /**
     * User agent.
     */
    const USER_AGENT_SLUG = 'tracks-client';
    /**
     * Initialize tracks client class
     *
     * @return void
     */
    public static function init()
    {
    }
    /**
     * Check if identity cookie is set, if not set it.
     *
     * @return void
     */
    public static function maybe_set_identity_cookie()
    {
    }
    /**
     * Record a Tracks event
     *
     * @param  array $event Array of event properties.
     * @return bool|WP_Error         True on success, WP_Error on failure.
     */
    public static function record_event($event)
    {
    }
    /**
     * Synchronously request the pixel.
     *
     * @param string $pixel pixel url and query string.
     * @return bool Always returns true.
     */
    public static function record_pixel($pixel)
    {
    }
    /**
     * Create a timestamp representing milliseconds since 1970-01-01
     *
     * @return string A string representing a timestamp.
     */
    public static function build_timestamp()
    {
    }
    /**
     * Get a user's identity to send to Tracks. If Jetpack exists, default to its implementation.
     *
     * @param int $user_id User id.
     * @return array Identity properties.
     */
    public static function get_identity($user_id)
    {
    }
    /**
     * Grabs the user's anon id from cookies, or generates and sets a new one
     *
     * @return string An anon id for the user
     */
    public static function get_anon_id()
    {
    }
}