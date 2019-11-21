<?php


/**
 * REST API Product Tags controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Product_Tags_V1_Controller
 */
class WC_REST_Product_Tags_V2_Controller extends \WC_REST_Product_Tags_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
}