<?php

namespace Automattic\WooCommerce\Blocks\AIContent;

/**
 * This class is used to create dummy products for the Customize Your Store flow.
 * Even if it is in the AI Content namespace, it is not used for AI content generation.
 *
 * @internal
 */
class UpdateProducts
{
    /**
     * The dummy products.
     */
    const DUMMY_PRODUCTS = [['title' => 'Vintage Typewriter', 'image' => 'assets/images/pattern-placeholders/writing-typing-keyboard-technology-white-vintage.jpg', 'description' => 'A hit spy novel or a love letter? Anything you type using this vintage typewriter from the 20s is bound to make a mark.', 'price' => 90], ['title' => 'Leather-Clad Leisure Chair', 'image' => 'assets/images/pattern-placeholders/table-wood-house-chair-floor-window.jpg', 'description' => 'Sit back and relax in this comfy designer chair. High-grain leather and steel frame add luxury to your your leisure.', 'price' => 249], ['title' => 'Black and White', 'image' => 'assets/images/pattern-placeholders/white-black-black-and-white-photograph-monochrome-photography.jpg', 'description' => 'This 24" x 30" high-quality print just exudes summer. Hang it on the wall and forget about the world outside.', 'price' => 115], ['title' => '3-Speed Bike', 'image' => 'assets/images/pattern-placeholders/road-sport-vintage-wheel-retro-old.jpg', 'description' => 'Zoom through the streets on this premium 3-speed bike. Manufactured and assembled in Germany in the 80s.', 'price' => 115], ['title' => 'Hi-Fi Headphones', 'image' => 'assets/images/pattern-placeholders/man-person-music-black-and-white-white-photography.jpg', 'description' => 'Experience your favorite songs in a new way with these premium hi-fi headphones.', 'price' => 125], ['title' => 'Retro Glass Jug (330 ml)', 'image' => 'assets/images/pattern-placeholders/drinkware-liquid-tableware-dishware-bottle-fluid.jpg', 'description' => 'Thick glass and a classic silhouette make this jug a must-have for any retro-inspired kitchen.', 'price' => 115]];
    /**
     * Return all dummy products that were not modified by the store owner.
     *
     * @return array|WP_Error An array with the dummy products that need to have their content updated by AI.
     */
    public function fetch_dummy_products_to_update()
    {
    }
    /**
     * Verify if the dummy product should have its content generated and managed by AI.
     *
     * @param \WC_Product $dummy_product The dummy product.
     *
     * @return bool
     */
    public function should_update_dummy_product($dummy_product): bool
    {
    }
    /**
     * Creates a new product and assigns the _headstart_post meta to it.
     *
     * @param array $product_data The product data.
     *
     * @return bool|int|\WP_Error
     */
    public function create_new_product($product_data)
    {
    }
    /**
     * Return all existing products that have the _headstart_post meta assigned to them.
     *
     * @param string $type The type of products to fetch.
     *
     * @return array|null
     */
    public function fetch_product_ids(string $type = 'user_created')
    {
    }
    /**
     * Upload the image for the product.
     *
     * @param int    $product_id The product ID.
     * @param string $image_src The image source.
     * @param string $image_alt The image alt.
     *
     * @return int|string|WP_Error
     */
    private function product_image_upload($product_id, $image_src, $image_alt)
    {
    }
    /**
     * Update the product with the new content.
     *
     * @param \WC_Product         $product The product.
     * @param int|string|WP_Error $product_image_id The product image ID.
     * @param string              $product_title The product title.
     * @param string              $product_description The product description.
     * @param int                 $product_price The product price.
     *
     * @return int|\WP_Error
     */
    private function product_update($product, $product_image_id, $product_title, $product_description, $product_price)
    {
    }
}