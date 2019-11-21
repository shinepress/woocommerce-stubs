<?php


/**
 * WC Order Item Data Store
 *
 * @version  3.0.0
 */
abstract class Abstract_WC_Order_Item_Type_Data_Store extends \WC_Data_Store_WP implements \WC_Object_Data_Store_Interface
{
    /**
     * Meta type. This should match up with
     * the types available at https://codex.wordpress.org/Function_Reference/add_metadata.
     * WP defines 'post', 'user', 'comment', and 'term'.
     *
     * @var string
     */
    protected $meta_type = 'order_item';
    /**
     * This only needs set if you are using a custom metadata type (for example payment tokens.
     * This should be the name of the field your table uses for associating meta with objects.
     * For example, in payment_tokenmeta, this would be payment_token_id.
     *
     * @var string
     */
    protected $object_id_field_for_meta = 'order_item_id';
    /**
     * Create a new order item in the database.
     *
     * @since 3.0.0
     * @param WC_Order_Item $item Order item object.
     */
    public function create(&$item)
    {
    }
    /**
     * Update a order item in the database.
     *
     * @since 3.0.0
     * @param WC_Order_Item $item Order item object.
     */
    public function update(&$item)
    {
    }
    /**
     * Remove an order item from the database.
     *
     * @since 3.0.0
     * @param WC_Order_Item $item Order item object.
     * @param array         $args Array of args to pass to the delete method.
     */
    public function delete(&$item, $args = array())
    {
    }
    /**
     * Read a order item from the database.
     *
     * @since 3.0.0
     *
     * @param WC_Order_Item $item Order item object.
     *
     * @throws Exception If invalid order item.
     */
    public function read(&$item)
    {
    }
    /**
     * Saves an item's data to the database / item meta.
     * Ran after both create and update, so $item->get_id() will be set.
     *
     * @since 3.0.0
     * @param WC_Order_Item $item Order item object.
     */
    public function save_item_data(&$item)
    {
    }
    /**
     * Clear meta cache.
     *
     * @param WC_Order_Item $item Order item object.
     */
    public function clear_cache(&$item)
    {
    }
}