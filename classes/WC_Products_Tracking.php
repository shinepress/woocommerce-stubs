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
     * @param int          $post_id     Post ID.
     * @param WP_Post      $post        Post object.
     * @param bool         $update      Whether this is an existing post being updated.
     * @param null|WP_Post $post_before Null for new posts, the WP_Post object prior
     *                                  to the update for updated posts.
     */
    public function track_product_published($post_id, $post, $update, $post_before)
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