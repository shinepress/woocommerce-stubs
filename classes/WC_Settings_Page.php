<?php


/**
 * WC_Settings_Page.
 */
abstract class WC_Settings_Page
{
    /**
     * Setting page id.
     *
     * @var string
     */
    protected $id = '';
    /**
     * Setting page label.
     *
     * @var string
     */
    protected $label = '';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get settings page ID.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get settings page label.
     *
     * @since 3.0.0
     * @return string
     */
    public function get_label()
    {
    }
    /**
     * Add this page to settings.
     *
     * @param array $pages
     *
     * @return mixed
     */
    public function add_settings_page($pages)
    {
    }
    /**
     * Get settings array.
     *
     * @return array
     */
    public function get_settings()
    {
    }
    /**
     * Get sections.
     *
     * @return array
     */
    public function get_sections()
    {
    }
    /**
     * Output sections.
     */
    public function output_sections()
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
}