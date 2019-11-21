<?php


/**
 * REST API Taxes controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Taxes_V2_Controller
 */
class WC_REST_Taxes_Controller extends \WC_REST_Taxes_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
}