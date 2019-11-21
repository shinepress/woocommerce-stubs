<?php


/**
 * WC_Product_CSV_Exporter Class.
 */
class WC_Product_CSV_Exporter extends \WC_CSV_Batch_Exporter
{
    /**
     * Type of export used in filter names.
     *
     * @var string
     */
    protected $export_type = 'product';
    /**
     * Should meta be exported?
     *
     * @var boolean
     */
    protected $enable_meta_export = \false;
    /**
     * Which product types are being exported.
     *
     * @var array
     */
    protected $product_types_to_export = array();
    /**
     * Products belonging to what category should be exported.
     *
     * @var string
     */
    protected $product_category_to_export = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Should meta be exported?
     *
     * @since 3.1.0
     * @param bool $enable_meta_export Should meta be exported.
     */
    public function enable_meta_export($enable_meta_export)
    {
    }
    /**
     * Product types to export.
     *
     * @since 3.1.0
     * @param array $product_types_to_export List of types to export.
     */
    public function set_product_types_to_export($product_types_to_export)
    {
    }
    /**
     * Product category to export
     *
     * @since 3.5.0
     * @param string $product_category_to_export Product category slug to export, empty string exports all.
     * @return void
     */
    public function set_product_category_to_export($product_category_to_export)
    {
    }
    /**
     * Return an array of columns to export.
     *
     * @since 3.1.0
     * @return array
     */
    public function get_default_column_names()
    {
    }
    /**
     * Prepare data for export.
     *
     * @since 3.1.0
     */
    public function prepare_data_to_export()
    {
    }
    /**
     * Take a product and generate row data from it for export.
     *
     * @param WC_Product $product WC_Product object.
     * @return array
     */
    protected function generate_row_data($product)
    {
    }
    /**
     * Get published value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return int
     */
    protected function get_column_value_published($product)
    {
    }
    /**
     * Get formatted sale price.
     *
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_sale_price($product)
    {
    }
    /**
     * Get formatted regular price.
     *
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_regular_price($product)
    {
    }
    /**
     * Get product_cat value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_category_ids($product)
    {
    }
    /**
     * Get product_tag value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_tag_ids($product)
    {
    }
    /**
     * Get product_shipping_class value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_shipping_class_id($product)
    {
    }
    /**
     * Get images value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_images($product)
    {
    }
    /**
     * Prepare linked products for export.
     *
     * @since 3.1.0
     * @param int[] $linked_products Array of linked product ids.
     * @return string
     */
    protected function prepare_linked_products_for_export($linked_products)
    {
    }
    /**
     * Get cross_sell_ids value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_cross_sell_ids($product)
    {
    }
    /**
     * Get upsell_ids value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_upsell_ids($product)
    {
    }
    /**
     * Get parent_id value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_parent_id($product)
    {
    }
    /**
     * Get grouped_products value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_grouped_products($product)
    {
    }
    /**
     * Get download_limit value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_download_limit($product)
    {
    }
    /**
     * Get download_expiry value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_download_expiry($product)
    {
    }
    /**
     * Get stock value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_stock($product)
    {
    }
    /**
     * Get stock status value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_stock_status($product)
    {
    }
    /**
     * Get backorders.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_backorders($product)
    {
    }
    /**
     * Get low stock amount value.
     *
     * @param WC_Product $product Product being exported.
     * @since 3.5.0
     * @return int|string Empty string if value not set
     */
    protected function get_column_value_low_stock_amount($product)
    {
    }
    /**
     * Get type value.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @return string
     */
    protected function get_column_value_type($product)
    {
    }
    /**
     * Filter description field for export.
     * Convert newlines to '\n'.
     *
     * @param string $description Product description text to filter.
     *
     * @since  3.5.4
     * @return string
     */
    protected function filter_description_field($description)
    {
    }
    /**
     * Export downloads.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @param array      $row     Row being exported.
     */
    protected function prepare_downloads_for_export($product, &$row)
    {
    }
    /**
     * Export attributes data.
     *
     * @since 3.1.0
     * @param  WC_Product $product Product being exported.
     * @param  array      $row     Row being exported.
     */
    protected function prepare_attributes_for_export($product, &$row)
    {
    }
    /**
     * Export meta data.
     *
     * @since 3.1.0
     * @param WC_Product $product Product being exported.
     * @param array      $row Row data.
     */
    protected function prepare_meta_for_export($product, &$row)
    {
    }
}