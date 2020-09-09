<?php


/**
 * REST API Shipping Zones class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Shipping_Zones_V2_Controller
 */
class WC_REST_Shipping_Zones_Controller extends \WC_REST_Shipping_Zones_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
}