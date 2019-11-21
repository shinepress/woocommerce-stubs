<?php


/**
 * REST API Customers controller class.
 *
 * @package WooCommerce/API
 * @extends WC_REST_Customers_V2_Controller
 */
class WC_REST_Customers_Controller extends \WC_REST_Customers_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Get formatted item data.
     *
     * @since  3.0.0
     * @param  WC_Data $object WC_Data instance.
     * @return array
     */
    protected function get_formatted_item_data($object)
    {
    }
    /**
     * Get the Customer's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}