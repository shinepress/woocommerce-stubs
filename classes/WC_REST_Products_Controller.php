<?php


/**
 * REST API Products controller class.
 *
 * @package Automattic/WooCommerce/RestApi
 * @extends WC_REST_Products_V2_Controller
 */
class WC_REST_Products_Controller extends \WC_REST_Products_V2_Controller
{
    /**
     * Endpoint namespace.
     *
     * @var string
     */
    protected $namespace = 'wc/v3';
    /**
     * Get the images for a product or product variation.
     *
     * @param WC_Product|WC_Product_Variation $product Product instance.
     * @return array
     */
    protected function get_images($product)
    {
    }
    /**
     * Make extra product orderby features supported by WooCommerce available to the WC API.
     * This includes 'price', 'popularity', and 'rating'.
     *
     * @param WP_REST_Request $request Request data.
     * @return array
     */
    protected function prepare_objects_query($request)
    {
    }
    /**
     * Set product images.
     *
     * @throws WC_REST_Exception REST API exceptions.
     * @param WC_Product $product Product instance.
     * @param array      $images  Images data.
     * @return WC_Product
     */
    protected function set_product_images($product, $images)
    {
    }
    /**
     * Prepare a single product for create or update.
     *
     * @param  WP_REST_Request $request Request object.
     * @param  bool            $creating If is creating a new object.
     * @return WP_Error|WC_Data
     */
    protected function prepare_object_for_database($request, $creating = \false)
    {
    }
    /**
     * Get the Product's schema, conforming to JSON Schema.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
    /**
     * Add new options for 'orderby' to the collection params.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get product data.
     *
     * @param WC_Product $product Product instance.
     * @param string     $context Request context.
     *                            Options: 'view' and 'edit'.
     * @return array
     */
    protected function get_product_data($product, $context = 'view')
    {
    }
}