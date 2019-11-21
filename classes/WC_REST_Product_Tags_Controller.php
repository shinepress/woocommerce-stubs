<?php


/**
 * REST API Product Tags controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Product_Tags_V2_Controller
 */
class WC_REST_Product_Tags_Controller extends \WC_REST_Product_Tags_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
}