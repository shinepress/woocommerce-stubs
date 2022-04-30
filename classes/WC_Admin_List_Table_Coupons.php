<?php


/**
 * WC_Admin_List_Table_Coupons Class.
 */
class WC_Admin_List_Table_Coupons extends \WC_Admin_List_Table
{
    /**
     * Post type.
     *
     * @var string
     */
    protected $list_table_type = 'shop_coupon';
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Render blank state.
     */
    protected function render_blank_state()
    {
    }
    /**
     * Define primary column.
     *
     * @return string
     */
    protected function get_primary_column()
    {
    }
    /**
     * Get row actions to show in the list table.
     *
     * @param array   $actions Array of actions.
     * @param WP_Post $post Current post object.
     * @return array
     */
    protected function get_row_actions($actions, $post)
    {
    }
    /**
     * Define which columns to show on this screen.
     *
     * @param array $columns Existing columns.
     * @return array
     */
    public function define_columns($columns)
    {
    }
    /**
     * Pre-fetch any data for the row each column has access to it. the_coupon global is there for bw compat.
     *
     * @param int $post_id Post ID being shown.
     */
    protected function prepare_row_data($post_id)
    {
    }
    /**
     * Render columm: coupon_code.
     */
    protected function render_coupon_code_column()
    {
    }
    /**
     * Render columm: type.
     */
    protected function render_type_column()
    {
    }
    /**
     * Render columm: amount.
     */
    protected function render_amount_column()
    {
    }
    /**
     * Render columm: products.
     */
    protected function render_products_column()
    {
    }
    /**
     * Render columm: usage_limit.
     */
    protected function render_usage_limit_column()
    {
    }
    /**
     * Render columm: usage.
     */
    protected function render_usage_column()
    {
    }
    /**
     * Render columm: expiry_date.
     */
    protected function render_expiry_date_column()
    {
    }
    /**
     * Render columm: description.
     */
    protected function render_description_column()
    {
    }
    /**
     * Render any custom filters and search inputs for the list table.
     */
    protected function render_filters()
    {
    }
    /**
     * Handle any custom filters.
     *
     * @param array $query_vars Query vars.
     * @return array
     */
    protected function query_filters($query_vars)
    {
    }
}