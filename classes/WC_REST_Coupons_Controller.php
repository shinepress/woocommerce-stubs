<?php


/**
 * REST API Coupons controller class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Coupons_V2_Controller
 */
class WC_REST_Coupons_Controller extends \WC_REST_Coupons_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
}