<?php


/**
 * Get the URL to the WooCommerce Legacy REST API.
 *
 * Note that as of WooCommerce 9.0 the WooCommerce Legacy REST API has been moved to a dedicated extension,
 * and the implementation of its root endpoint in WooCommerce core is now just a stub that will always return an error.
 * See the setup_legacy_api_stub method in includes/class-woocommerce.php and:
 * https://developer.woocommerce.com/2023/10/03/the-legacy-rest-api-will-move-to-a-dedicated-extension-in-woocommerce-9-0/
 *
 * @deprecated 9.0.0 The Legacy REST API has been removed from WooCommerce core.
 *
 * @since 2.1
 * @param string $path an endpoint to include in the URL.
 * @return string the URL.
 */
function get_woocommerce_api_url($path)
{
}