<?php


/**
 * System status controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Controller
 */
class WC_REST_System_Status_V2_Controller extends \WC_REST_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'system_status';
    /**
     * Register the route for /system_status
     */
    public function register_routes()
    {
    }
    /**
     * Check whether a given request has permission to view system status.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Get a system status info, by section.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_Error|WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Get the system status schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Return an array of sections and the data associated with each.
     *
     * @return array
     */
    public function get_item_mappings()
    {
    }
    /**
     * Get array of environment information. Includes thing like software
     * versions, and various server settings.
     *
     * @return array
     */
    public function get_environment_info()
    {
    }
    /**
     * Add prefix to table.
     *
     * @param string $table Table name.
     * @return stromg
     */
    protected function add_db_table_prefix($table)
    {
    }
    /**
     * Get array of database information. Version, prefix, and table existence.
     *
     * @return array
     */
    public function get_database_info()
    {
    }
    /**
     * Get array of counts of objects. Orders, products, etc.
     *
     * @return array
     */
    public function get_post_type_counts()
    {
    }
    /**
     * Get a list of plugins active on the site.
     *
     * @return array
     */
    public function get_active_plugins()
    {
    }
    /**
     * Get info on the current active theme, info on parent theme (if presnet)
     * and a list of template overrides.
     *
     * @return array
     */
    public function get_theme_info()
    {
    }
    /**
     * Get some setting values for the site that are useful for debugging
     * purposes. For full settings access, use the settings api.
     *
     * @return array
     */
    public function get_settings()
    {
    }
    /**
     * Returns security tips.
     *
     * @return array
     */
    public function get_security_info()
    {
    }
    /**
     * Returns a mini-report on WC pages and if they are configured correctly:
     * Present, visible, and including the correct shortcode.
     *
     * @return array
     */
    public function get_pages()
    {
    }
    /**
     * Get any query params needed.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Prepare the system status response
     *
     * @param  array           $system_status System status data.
     * @param  WP_REST_Request $request       Request object.
     * @return WP_REST_Response
     */
    public function prepare_item_for_response($system_status, $request)
    {
    }
}