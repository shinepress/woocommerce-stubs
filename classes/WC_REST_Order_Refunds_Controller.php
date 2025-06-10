<?php


/**
 * REST API Order Refunds controller class.
 *
 * @package WooCommerce\RestApi
 * @extends WC_REST_Order_Refunds_V2_Controller
 */
class WC_REST_Order_Refunds_Controller extends \WC_REST_Order_Refunds_V2_Controller
{
    use \Automattic\WooCommerce\Internal\CostOfGoodsSold\CogsAwareTrait;
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Prepares one object for create or update operation.
     *
     * @since  3.0.0
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data The prepared item, or WP_Error object on failure.
     */
    protected function prepare_object_for_database($request, $creating = \false)
    {
    }
    /**
     * Get formatted item data.
     * Invokes parents and then adds the proper Cost of Goods Sold information.
     *
     * @param  WC_Data $data_object WC_Data instance.
     * @return array
     * @since  9.9.0
     */
    protected function get_formatted_item_data($data_object)
    {
    }
    /**
     * Get the refund schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Add the Cost of Goods Sold related fields to the schema.
     *
     * @param array $schema The original schema.
     * @return array The updated schema.
     */
    private function add_cogs_related_schema(array $schema): array
    {
    }
}