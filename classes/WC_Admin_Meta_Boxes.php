<?php


/**
 * WC_Admin_Meta_Boxes.
 */
class WC_Admin_Meta_Boxes
{
    /**
     * Is meta boxes saved once?
     *
     * @var boolean
     */
    private static $saved_meta_boxes = \false;
    /**
     * Meta box error messages.
     *
     * @var array
     */
    public static $meta_box_errors = array();
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Add an error message.
     *
     * @param string $text
     */
    public static function add_error($text)
    {
    }
    /**
     * Save errors to an option.
     */
    public function save_errors()
    {
    }
    /**
     * Show any stored error messages.
     */
    public function output_errors()
    {
    }
    /**
     * Add WC Meta boxes.
     */
    public function add_meta_boxes()
    {
    }
    /**
     * Remove bloat.
     */
    public function remove_meta_boxes()
    {
    }
    /**
     * Rename core meta boxes.
     */
    public function rename_meta_boxes()
    {
    }
    /**
     * Check if we're saving, the trigger an action based on the post type.
     *
     * @param  int    $post_id
     * @param  object $post
     */
    public function save_meta_boxes($post_id, $post)
    {
    }
}