<?php

namespace Automattic\WooCommerce\Admin\API;

/**
 * REST API Admin Notes controller class.
 *
 * @internal
 * @extends WC_REST_CRUD_Controller
 */
class Notes extends \WC_REST_CRUD_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc-analytics';
    /**
     * Route base.
     *
     * @var string
     */
    protected $rest_base = 'admin/notes';
    /**
     * Register the routes for admin notes.
     */
    public function register_routes()
    {
    }
    /**
     * Get a single note.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response|WP_Error
     */
    public function get_item($request)
    {
    }
    /**
     * Get all notes.
     *
     * @param WP_REST_Request $request Request data.
     * @return WP_REST_Response
     */
    public function get_items($request)
    {
    }
    /**
     * Checks if user is in tasklist experiment.
     *
     * @return bool Whether remote inbox notifications are enabled.
     */
    private function is_tasklist_experiment_assigned_treatment()
    {
    }
    /**
     * Prepare objects query.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Check whether a given request has permission to read a single note.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_item_permissions_check($request)
    {
    }
    /**
     * Check whether a given request has permission to read notes.
     *
     * @param  WP_REST_Request $request Full details about the request.
     * @return WP_Error|boolean
     */
    public function get_items_permissions_check($request)
    {
    }
    /**
     * Update a single note.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function update_item($request)
    {
    }
    /**
     * Delete a single note.
     *
     * @param WP_REST_Request $request Full details about the request.
     * @return WP_REST_Request|WP_Error
     */
    public function delete_item($request)
    {
    }
    /**
     * Delete all notes.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Request|WP_Error
     */
    public function delete_all_items($request)
    {
    }
    /**
     * Prepare note data.
     *
     * @param Note            $note     Note data.
     * @param WP_REST_Request $request  Request object.
     *
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_note_data_for_response($note, $request)
    {
    }
    /**
     * Prepare an array with the the requested updates.
     *
     * @param WP_REST_Request $request  Request object.
     * @return array A list of the requested updates values.
     */
    protected function get_requested_updates($request)
    {
    }
    /**
     * Batch update a set of notes.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Request|WP_Error
     */
    public function batch_update_items($request)
    {
    }
    /**
     * Activate a promo note, create if not exist.
     *
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Request|WP_Error
     */
    public function activate_promo_note($request)
    {
    }
    /**
     * Makes sure the current user has access to WRITE the settings APIs.
     *
     * @param WP_REST_Request $request Full data about the request.
     * @return WP_Error|bool
     */
    public function update_items_permissions_check($request)
    {
    }
    /**
     * Prepare a path or query for serialization to the client.
     *
     * @param string $query The query, path, or URL to transform.
     * @return string A fully formed URL.
     */
    public function prepare_query_for_response($query)
    {
    }
    /**
     * Maybe add a nonce to a URL.
     *
     * @link https://codex.wordpress.org/WordPress_Nonces
     *
     * @param string $url The URL needing a nonce.
     * @param string $action The nonce action.
     * @param string $name The nonce anme.
     * @return string A fully formed URL.
     */
    private function maybe_add_nonce_to_url(string $url, string $action = '', string $name = ''): string
    {
    }
    /**
     * Prepare a note object for serialization.
     *
     * @param array           $data Note data.
     * @param WP_REST_Request $request Request object.
     * @return WP_REST_Response $response Response data.
     */
    public function prepare_item_for_response($data, $request)
    {
    }
    /**
     * Track opened emails.
     *
     * @param WP_REST_Request $request Request object.
     */
    public function track_opened_email($request)
    {
    }
    /**
     * Get the query params for collections.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the note's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}