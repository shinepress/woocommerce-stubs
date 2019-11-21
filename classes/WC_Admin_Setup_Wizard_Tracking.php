<?php


/**
 * This class adds actions to track usage of the WooCommerce Onboarding Wizard.
 */
class WC_Admin_Setup_Wizard_Tracking
{
    /**
     * Steps for the setup wizard
     *
     * @var array
     */
    private $steps = array();
    /**
     * Init tracking.
     */
    public function init()
    {
    }
    /**
     * Get the name of the current step.
     *
     * @return string
     */
    public function get_current_step()
    {
    }
    /**
     * Add footer scripts to OBW via woocommerce_setup_footer
     */
    public function add_footer_scripts()
    {
    }
    /**
     * Dequeue unwanted scripts from OBW footer.
     */
    public function dequeue_non_whitelisted_scripts()
    {
    }
    /**
     * Track when tracking is opted into and OBW has started.
     *
     * @param string $option Option name.
     * @param string $value  Option value.
     * @return void
     */
    public function track_start($option, $value)
    {
    }
    /**
     * Track the marketing form on submit.
     */
    public function track_ready_next_steps()
    {
    }
    /**
     * Track various events when a step is saved.
     */
    public function add_step_save_events()
    {
    }
    /**
     * Track store setup and store properties on save.
     *
     * @return void
     */
    public function track_store_setup()
    {
    }
    /**
     * Track payment gateways selected.
     *
     * @return void
     */
    public function track_payments()
    {
    }
    /**
     * Track shipping units and whether or not labels are set.
     *
     * @return void
     */
    public function track_shipping()
    {
    }
    /**
     * Track recommended plugins selected for install.
     *
     * @return void
     */
    public function track_recommended()
    {
    }
    /**
     * Tracks when Jetpack is activated through the OBW.
     *
     * @return void
     */
    public function track_jetpack_activate()
    {
    }
    /**
     * Tracks when last next_steps screen is viewed in the OBW.
     *
     * @return void
     */
    public function track_next_steps()
    {
    }
    /**
     * Track skipped steps.
     *
     * @return void
     */
    public function track_skip_step()
    {
    }
    /**
     * Set the OBW steps inside this class instance.
     *
     * @param array $steps Array of OBW steps.
     */
    public function set_obw_steps($steps)
    {
    }
}