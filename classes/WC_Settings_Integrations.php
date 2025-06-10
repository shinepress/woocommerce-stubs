<?php


/**
 * WC_Settings_Integrations.
 */
class WC_Settings_Integrations extends \WC_Settings_Page
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Setting page icon.
     *
     * @var string
     */
    public $icon = 'plugins';
    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
    {
    }
    /**
     * Is WC_INSTALLING constant defined?
     * This method exists to ease unit testing.
     *
     * @return bool True is the WC_INSTALLING constant is defined.
     */
    protected function wc_is_installing()
    {
    }
    /**
     * Get the currently available integrations.
     * This method exists to ease unit testing.
     *
     * @return array Currently available integrations.
     */
    protected function get_integrations()
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
}