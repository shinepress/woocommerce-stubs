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
     * Send a Tracks event when the Products page is viewed.
     */
    public function track_products_view()
    {
    }
    /**
     * Send a Tracks event when the Products Categories and Tags page is viewed.
     */
    public function track_categories_and_tags_view()
    {
    }
    /**
     * Send a Tracks event when a product is updated.
     *
     * @param int    $product_id Product id.
     * @param object $post       WordPress post.
     */
    public function track_product_updated($product_id, $post)
    {
    }
    /**
     * Track the Update button being clicked on the client side.
     * This is needed because `track_product_updated` (using the `edit_post`
     * hook) is called in response to a number of other triggers.
     *
     * @param WP_Post $post The post, not used.
     */
    public function track_product_updated_client_side($post)
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