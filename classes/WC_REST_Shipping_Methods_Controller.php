<?php


/**
 * Shipping methods controller class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Shipping_Methods_V2_Controller
 */
class WC_REST_Shipping_Methods_Controller extends \WC_REST_Shipping_Methods_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
}