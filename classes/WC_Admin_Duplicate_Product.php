<?php


/**
 * WC_Admin_Duplicate_Product Class.
 */
class WC_Admin_Duplicate_Product
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Show the "Duplicate" link in admin products list.
     *
     * @param array   $actions Array of actions.
     * @param WP_Post $post Post object.
     * @return array
     */
    public function dupe_link($actions, $post)
    {
    }
    /**
     * Show the dupe product link in admin.
     */
    public function dupe_button()
    {
    }
    /**
     * Duplicate a product action.
     */
    public function duplicate_product_action()
    {
    }
    /**
     * Function to create the duplicate of the product.
     *
     * @param WC_Product $product
     * @return WC_Product
     */
    public function product_duplicate($product)
    {
    }
    /**
     * Get a product from the database to duplicate.
     *
     * @deprecated 3.0.0
     * @param mixed $id
     * @return object|bool
     * @see duplicate_product
     */
    private function get_product_to_duplicate($id)
    {
    }
}