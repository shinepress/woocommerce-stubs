<?php


/**
 * Rate limit class.
 */
class WC_Rate_Limiter
{
    /**
     * Constructs Option name from action identifier.
     *
     * @param string $action_id Identifier of the action.
     * @return string
     */
    public static function storage_id($action_id)
    {
    }
    /**
     * Returns true if the action is not allowed to be run by the rate limiter yet, false otherwise.
     *
     * @param string $action_id Identifier of the action.
     * @return bool
     */
    public static function retried_too_soon($action_id)
    {
    }
    /**
     * Sets the rate limit delay in seconds for action with identifier $id.
     *
     * @param string $action_id Identifier of the action.
     * @param int    $delay Delay in seconds.
     * @return bool True if the option setting was successful, false otherwise.
     */
    public static function set_rate_limit($action_id, $delay)
    {
    }
}