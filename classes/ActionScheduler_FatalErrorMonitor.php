<?php


/**
 * Class ActionScheduler_FatalErrorMonitor
 */
class ActionScheduler_FatalErrorMonitor
{
    /** @var ActionScheduler_ActionClaim */
    private $claim = \NULL;
    /** @var ActionScheduler_Store */
    private $store = \NULL;
    private $action_id = 0;
    public function __construct(\ActionScheduler_Store $store)
    {
    }
    public function attach(\ActionScheduler_ActionClaim $claim)
    {
    }
    public function detach()
    {
    }
    public function track_current_action($action_id)
    {
    }
    public function untrack_action()
    {
    }
    public function handle_unexpected_shutdown()
    {
    }
}