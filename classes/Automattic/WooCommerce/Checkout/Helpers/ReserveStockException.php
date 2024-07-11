<?php

namespace Automattic\WooCommerce\Checkout\Helpers;

/**
 * ReserveStockException class.
 */
class ReserveStockException extends \Exception
{
    /**
     * Sanitized error code.
     *
     * @var string
     */
    protected $error_code;
    /**
     * Error extra data.
     *
     * @var array
     */
    protected $error_data;
    /**
     * Setup exception.
     *
     * @param string $code             Machine-readable error code, e.g `woocommerce_invalid_product_id`.
     * @param string $message          User-friendly translated error message, e.g. 'Product ID is invalid'.
     * @param int    $http_status_code Proper HTTP status code to respond with, e.g. 400.
     * @param array  $data             Extra error data.
     */
    public function __construct($code, $message, $http_status_code = 400, $data = array())
    {
    }
    /**
     * Returns the error code.
     *
     * @return string
     */
    public function getErrorCode()
    {
    }
    /**
     * Returns error data.
     *
     * @return array
     */
    public function getErrorData()
    {
    }
}