<?php


/**
 * Create a new customer.
 *
 * @since 9.4.0 Moved woocommerce_registration_error_email_exists filter to the shortcode checkout class.
 * @since 9.4.0 Removed handling for generating username/password based on settings--this is consumed at form level. Here, if data is missing it will be generated.
 *
 * @param  string $email    Customer email.
 * @param  string $username Customer username.
 * @param  string $password Customer password.
 * @param  array  $args     List of arguments to pass to `wp_insert_user()`.
 * @return int|WP_Error Returns WP_Error on failure, Int (user ID) on success.
 */
function wc_create_new_customer($email, $username = '', $password = '', $args = array())
{
}