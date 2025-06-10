<?php


/**
 * WC_Settings_Emails.
 */
class WC_Settings_Emails extends \WC_Settings_Page
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
    public $icon = 'atSymbol';
    /**
     * Get own sections.
     *
     * @return array
     */
    protected function get_own_sections()
    {
    }
    /**
     * Get settings array.
     *
     * @return array
     */
    protected function get_settings_for_default_section()
    {
    }
    /**
     * Get custom fonts for emails.
     */
    public function get_custom_fonts()
    {
    }
    /**
     * Output the settings.
     */
    public function output()
    {
    }
    /**
     * Run the 'admin_options' method on a given email.
     * This method exists to easy unit testing.
     *
     * @param object $email The email object to run the method on.
     */
    protected function run_email_admin_options($email)
    {
    }
    /**
     * Save settings.
     */
    public function save()
    {
    }
    /**
     * Output email notification settings.
     */
    public function email_notification_setting()
    {
    }
    /**
     * Creates the React mount point for the email preview.
     */
    public function email_preview()
    {
    }
    /**
     * Creates the React mount point for the single email preview.
     *
     * @param object $email The email object to run the method on.
     */
    public function email_preview_single($email)
    {
    }
    /**
     * Deletes transient with email settings used for live preview. This is to
     * prevent conflicts where the preview would show values from previous session.
     */
    private function delete_transient_email_settings()
    {
    }
    /**
     * Creates the React mount point for the email image url.
     *
     * @param array $value Field value array.
     */
    public function email_image_url($value)
    {
    }
    /**
     * Sanitize email image URL.
     *
     * @param  string $value     Option value.
     * @param  array  $option    Option name.
     * @param  string $raw_value Raw value.
     * @return string
     */
    public function sanitize_email_header_image($value, $option, $raw_value)
    {
    }
    /**
     * Creates the email font family field with custom font family applied to each option.
     *
     * @param array $value Field value array.
     */
    public function email_font_family($value)
    {
    }
    /**
     * Creates the React mount point for the email color palette title.
     *
     * @param array $value Field value array.
     */
    public function email_color_palette($value)
    {
    }
    /**
     * Append email improvements prop to Tracks globally.
     *
     * @param array $event_properties Event properties array.
     *
     * @return array
     */
    public function append_feature_email_improvements_to_tracks($event_properties)
    {
    }
    /**
     * Track email improvements feature change.
     *
     * @param string $feature_id The feature ID.
     * @param bool   $enabled True if the feature is enabled, false if it is disabled.
     */
    public function track_email_improvements_feature_change($feature_id, $enabled)
    {
    }
}