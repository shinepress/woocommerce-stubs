<?php

namespace Automattic\WooCommerce\StoreApi\Routes\V1;

/**
 * Checkout class.
 */
class Checkout extends \Automattic\WooCommerce\StoreApi\Routes\V1\AbstractCartRoute
{
    use \Automattic\WooCommerce\StoreApi\Utilities\DraftOrderTrait;
    use \Automattic\WooCommerce\StoreApi\Utilities\CheckoutTrait;
    /**
     * The route identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'checkout';
    /**
     * The routes schema.
     *
     * @var string
     */
    const SCHEMA_TYPE = 'checkout';
    /**
     * Holds the current order being processed.
     *
     * @var \WC_Order
     */
    private $order = null;
    /**
     * Get the path of this REST route.
     *
     * @return string
     */
    public function get_path()
    {
    }
    /**
     * Checks if a nonce is required for the route.
     *
     * @param \WP_REST_Request $request Request.
     * @return bool
     */
    protected function requires_nonce(\WP_REST_Request $request)
    {
    }
    /**
     * Get method arguments for this REST route.
     *
     * @return array An array of endpoints.
     */
    public function get_args()
    {
    }
    /**
     * Get the route response based on the type of request.
     *
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    public function get_response(\WP_REST_Request $request)
    {
    }
    /**
     * Convert the cart into a new draft order, or update an existing draft order, and return an updated cart response.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WP_REST_Response
     */
    protected function get_route_response(\WP_REST_Request $request)
    {
    }
    /**
     * Process an order.
     *
     * 1. Obtain Draft Order
     * 2. Process Request
     * 3. Process Customer
     * 4. Validate Order
     * 5. Process Payment
     *
     * @throws RouteException On error.
     * @throws InvalidStockLevelsInCartException On error.
     *
     * @param \WP_REST_Request $request Request object.
     *
     * @return \WP_REST_Response
     */
    protected function get_route_post_response(\WP_REST_Request $request)
    {
    }
    /**
     * Get route response when something went wrong.
     *
     * @param string $error_code String based error code.
     * @param string $error_message User facing error message.
     * @param int    $http_status_code HTTP status. Defaults to 500.
     * @param array  $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response($error_code, $error_message, $http_status_code = 500, $additional_data = [])
    {
    }
    /**
     * Get route response when something went wrong.
     *
     * @param \WP_Error $error_object User facing error message.
     * @param int       $http_status_code HTTP status. Defaults to 500.
     * @param array     $additional_data  Extra data (key value pairs) to expose in the error response.
     * @return \WP_Error WP Error object.
     */
    protected function get_route_error_response_from_object($error_object, $http_status_code = 500, $additional_data = [])
    {
    }
    /**
     * Adds additional data to the \WP_Error object.
     *
     * @param \WP_Error $error The error object to add the cart to.
     * @param array     $data The data to add to the error object.
     * @param int       $http_status_code The HTTP status code this error should return.
     * @param bool      $include_cart Whether the cart should be included in the error data.
     * @returns \WP_Error The \WP_Error with the cart added.
     */
    private function add_data_to_error_object($error, $data, $http_status_code, bool $include_cart = false)
    {
    }
    /**
     * Create or update a draft order based on the cart.
     *
     * @param \WP_REST_Request $request Full details about the request.
     * @throws RouteException On error.
     */
    private function create_or_update_draft_order(\WP_REST_Request $request)
    {
    }
    /**
     * Updates the current customer session using data from the request (e.g. address data).
     *
     * Address session data is synced to the order itself later on by OrderController::update_order_from_cart()
     *
     * @param \WP_REST_Request $request Full details about the request.
     */
    private function update_customer_from_request(\WP_REST_Request $request)
    {
    }
    /**
     * Gets the chosen payment method from the request.
     *
     * @throws RouteException On error.
     * @param \WP_REST_Request $request Request object.
     * @return \WC_Payment_Gateway|null
     */
    private function get_request_payment_method(\WP_REST_Request $request)
    {
    }
    /**
     * Order processing relating to customer account.
     *
     * Creates a customer account as needed (based on request & store settings) and  updates the order with the new customer ID.
     * Updates the order with user details (e.g. address).
     *
     * @throws RouteException API error object with error details.
     * @param \WP_REST_Request $request Request object.
     */
    private function process_customer(\WP_REST_Request $request)
    {
    }
    /**
     * Check request options and store (shop) config to determine if a user account should be created as part of order
     * processing.
     *
     * @param \WP_REST_Request $request The current request object being handled.
     * @return boolean True if a new user account should be created.
     */
    private function should_create_customer_account(\WP_REST_Request $request)
    {
    }
    /**
     * Create a new account for a customer.
     *
     * The account is created with a generated username. The customer is sent
     * an email notifying them about the account and containing a link to set
     * their (initial) password.
     *
     * Intended as a replacement for wc_create_new_customer in WC core.
     *
     * @throws \Exception If an error is encountered when creating the user account.
     *
     * @param string $user_email The email address to use for the new account.
     * @param string $first_name The first name to use for the new account.
     * @param string $last_name  The last name to use for the new account.
     *
     * @return int User id if successful
     */
    private function create_customer_account($user_email, $first_name, $last_name)
    {
    }
    /**
     * Convert an account creation error to an exception.
     *
     * @param \WP_Error $error An error object.
     * @return \Exception.
     */
    private function map_create_account_error(\WP_Error $error)
    {
    }
}