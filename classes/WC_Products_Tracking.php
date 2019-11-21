<?php


/**
 * This class adds actions to track usage of WooCommerce Products.
 */
class WC_Products_Tracking
{
    /**
     * Init tracking.
     */
    public function init()
    {
    }
    /**
     * Send a Tracks event when a product is updated.
     *
     * @param int    $product_id Product id.
     * @param object $post WordPress post.
     */
    public function track_product_updated($product_id, $post)
    {
    }
    /**
     * Send a Tracks event when a product is published.
     *
     * @param string $new_status New post_status.
     * @param string $old_status Previous post_status.
     * @param object $post WordPress post.
     */
    public function track_product_published($new_status, $old_status, $post)
    {
    }
    /**
     * Send a Tracks event when a product category is created.
     *
     * @param int $category_id Category ID.
     */
    public function track_product_category_created($category_id)
    {
    }
}