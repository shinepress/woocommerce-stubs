<?php


/**
 * Abstract Rest Controller Class
 *
 * @package  WooCommerce/Abstracts
 * @extends  WP_REST_Controller
 * @version  2.6.0
 */
abstract class WC_REST_Controller extends \WP_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v1';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = '';
    /**
     * Add the schema from additional fields to an schema array.
     *
     * The type of object is inferred from the passed schema.
     *
     * @param array $schema Schema array.
     *
     * @return array
     */
    protected function add_additional_fields_schema($schema)
    {
    }
    /**
     * Get normalized rest base.
     *
     * @return string
     */
    protected function get_normalized_rest_base()
    {
    }
    /**
     * Check batch limit.
     *
     * @param array $items Request items.
     * @return bool|WP_Error
     */
    protected function check_batch_limit($items)
    {
    }
    /**
     * Bulk create, update and delete items.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return array Of WP_Error or WP_REST_Response.
     */
    public function batch_items($request)
    {
    }
    /**
     * Validate a text value for a text based setting.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string
     */
    public function validate_setting_text_field($value, $setting)
    {
    }
    /**
     * Validate select based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_select_field($value, $setting)
    {
    }
    /**
     * Validate multiselect based settings.
     *
     * @since 3.0.0
     * @param array $values Values.
     * @param array $setting Setting.
     * @return array|WP_Error
     */
    public function validate_setting_multiselect_field($values, $setting)
    {
    }
    /**
     * Validate image_width based settings.
     *
     * @since 3.0.0
     * @param array $values Values.
     * @param array $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_image_width_field($values, $setting)
    {
    }
    /**
     * Validate radio based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_radio_field($value, $setting)
    {
    }
    /**
     * Validate checkbox based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string|WP_Error
     */
    public function validate_setting_checkbox_field($value, $setting)
    {
    }
    /**
     * Validate textarea based settings.
     *
     * @since 3.0.0
     * @param string $value Value.
     * @param array  $setting Setting.
     * @return string
     */
    public function validate_setting_textarea_field($value, $setting)
    {
    }
    /**
     * Add meta query.
     *
     * @since 3.0.0
     * @param array $args       Query args.
     * @param array $meta_query Meta query.
     * @return array
     */
    protected function add_meta_query($args, $meta_query)
    {
    }
    /**
     * Get the batch schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_public_batch_schema()
    {
    }
    /**
     * Gets an array of fields to be included on the response.
     * Included fields are based on item schema and `_fields=` request argument.
     * Introduced to support WordPress 4.9.6 changes.
     *
     * @since 3.5.0
     * @param WP_REST_Request $request Full details about the request.
     * @return array Fields to be included in the response.
     */
    public function get_fields_for_response($request)
    {
    }
}