<?php


/**
 * REST API Report Sales controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Report_Sales_V1_Controller
 */
class WC_REST_Report_Sales_V2_Controller extends \WC_REST_Report_Sales_V1_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v2';
}