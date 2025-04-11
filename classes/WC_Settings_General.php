<?php


/**
 * WC_Admin_Settings_General.
 */
class WC_Settings_General extends \WC_Settings_Page
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
    public $icon = 'cog';
    /**
     * Get settings or the default section.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
    {
    }
    /**
     * Output a color picker input box.
     *
     * @param mixed  $name Name of input.
     * @param string $id ID of input.
     * @param mixed  $value Value of input.
     * @param string $desc (default: '') Description for input.
     */
    public function color_picker($name, $id, $value, $desc = '')
    {
    }
}