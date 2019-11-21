<?php


/**
 * WC Coupon Data Store: Custom Post Type.
 *
 * @version  3.0.0
 */
class WC_Coupon_Data_Store_CPT extends \WC_Data_Store_WP implements \WC_Coupon_Data_Store_Interface, \WC_Object_Data_Store_Interface
{
    /**
     * Internal meta type used to store coupon data.
     *
     * @since 3.0.0
     * @var string
     */
    protected $meta_type = 'post';
    /**
     * Data stored in meta keys, but not considered "meta" for a coupon.
     *
     * @since 3.0.0
     * @var array
     */
    protected $internal_meta_keys = array('discount_type', 'coupon_amount', 'expiry_date', 'date_expires', 'usage_count', 'individual_use', 'product_ids', 'exclude_product_ids', 'usage_limit', 'usage_limit_per_user', 'limit_usage_to_x_items', 'free_shipping', 'product_categories', 'exclude_product_categories', 'exclude_sale_items', 'minimum_amount', 'maximum_amount', 'customer_email', '_used_by', '_edit_lock', '_edit_last');
    /**
     * Method to create a new coupon in the database.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     */
    public function create(&$coupon)
    {
    }
    /**
     * Method to read a coupon.
     *
     * @since 3.0.0
     *
     * @param WC_Coupon $coupon Coupon object.
     *
     * @throws Exception If invalid coupon.
     */
    public function read(&$coupon)
    {
    }
    /**
     * Updates a coupon in the database.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     */
    public function update(&$coupon)
    {
    }
    /**
     * Deletes a coupon from the database.
     *
     * @since 3.0.0
     *
     * @param WC_Coupon $coupon Coupon object.
     * @param array     $args Array of args to pass to the delete method.
     */
    public function delete(&$coupon, $args = array())
    {
    }
    /**
     * Helper method that updates all the post meta for a coupon based on it's settings in the WC_Coupon class.
     *
     * @param WC_Coupon $coupon Coupon object.
     * @since 3.0.0
     */
    private function update_post_meta(&$coupon)
    {
    }
    /**
     * Increase usage count for current coupon.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $used_by Either user ID or billing email.
     * @return int New usage count.
     */
    public function increase_usage_count(&$coupon, $used_by = '')
    {
    }
    /**
     * Decrease usage count for current coupon.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $used_by Either user ID or billing email.
     * @return int New usage count.
     */
    public function decrease_usage_count(&$coupon, $used_by = '')
    {
    }
    /**
     * Increase or decrease the usage count for a coupon by 1.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $operation 'increase' or 'decrease'.
     * @return int New usage count
     */
    private function update_usage_count_meta(&$coupon, $operation = 'increase')
    {
    }
    /**
     * Get the number of uses for a coupon by user ID.
     *
     * @since 3.0.0
     * @param WC_Coupon $coupon Coupon object.
     * @param id        $user_id User ID.
     * @return int
     */
    public function get_usage_by_user_id(&$coupon, $user_id)
    {
    }
    /**
     * Get the number of uses for a coupon by email address
     *
     * @since 3.6.4
     * @param WC_Coupon $coupon Coupon object.
     * @param string    $email Email address.
     * @return int
     */
    public function get_usage_by_email(&$coupon, $email)
    {
    }
    /**
     * Return a coupon code for a specific ID.
     *
     * @since 3.0.0
     * @param int $id Coupon ID.
     * @return string Coupon Code
     */
    public function get_code_by_id($id)
    {
    }
    /**
     * Return an array of IDs for for a specific coupon code.
     * Can return multiple to check for existence.
     *
     * @since 3.0.0
     * @param string $code Coupon code.
     * @return array Array of IDs.
     */
    public function get_ids_by_code($code)
    {
    }
}