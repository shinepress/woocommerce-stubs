<?php


/**
 * Widget layered nav class.
 */
class WC_Widget_Layered_Nav extends \WC_Widget
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Updates a particular instance of a widget.
     *
     * @see WP_Widget->update
     *
     * @param array $new_instance New Instance.
     * @param array $old_instance Old Instance.
     *
     * @return array
     */
    public function update($new_instance, $old_instance)
    {
    }
    /**
     * Outputs the settings update form.
     *
     * @see WP_Widget->form
     *
     * @param array $instance Instance.
     */
    public function form($instance)
    {
    }
    /**
     * Init settings after post types are registered.
     */
    public function init_settings()
    {
    }
    /**
     * Get this widgets taxonomy.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_taxonomy($instance)
    {
    }
    /**
     * Get this widgets query type.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_query_type($instance)
    {
    }
    /**
     * Get this widgets display type.
     *
     * @param array $instance Array of instance options.
     * @return string
     */
    protected function get_instance_display_type($instance)
    {
    }
    /**
     * Output widget.
     *
     * @see WP_Widget
     *
     * @param array $args Arguments.
     * @param array $instance Instance.
     */
    public function widget($args, $instance)
    {
    }
    /**
     * Return the currently viewed taxonomy name.
     *
     * @return string
     */
    protected function get_current_taxonomy()
    {
    }
    /**
     * Return the currently viewed term ID.
     *
     * @return int
     */
    protected function get_current_term_id()
    {
    }
    /**
     * Return the currently viewed term slug.
     *
     * @return int
     */
    protected function get_current_term_slug()
    {
    }
    /**
     * Show dropdown layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return bool Will nav display?
     */
    protected function layered_nav_dropdown($terms, $taxonomy, $query_type)
    {
    }
    /**
     * Count products within certain terms, taking the main WP query into consideration.
     *
     * This query allows counts to be generated based on the viewed products, not all products.
     *
     * @param  array  $term_ids Term IDs.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return array
     */
    protected function get_filtered_term_product_counts($term_ids, $taxonomy, $query_type)
    {
    }
    /**
     * Get the count of terms for products, using a set of SQL queries that are return pairs of product id - term id.
     *
     * @param string $main_query_sql The SQL query to use in order to count products with concrete values for attributes, must return a "product_id" column and a "terms_count_id" column.
     * @param string $query_sql_for_attributes_with_any_value The SQL query to use in order to count products with "Any" values for attributes, must return a "product_id" column and a "terms_count_id" column.
     *
     * @return array An array where the keys are term ids, and the values are term counts.
     */
    private function get_term_product_counts_from_queries($main_query_sql, $query_sql_for_attributes_with_any_value)
    {
    }
    /**
     * Wrapper for WC_Query::get_main_tax_query() to ease unit testing.
     *
     * @since 4.4.0
     * @return array
     */
    protected function get_main_tax_query()
    {
    }
    /**
     * Wrapper for WC_Query::get_main_search_query_sql() to ease unit testing.
     *
     * @since 4.4.0
     * @return string
     */
    protected function get_main_search_query_sql()
    {
    }
    /**
     * Wrapper for WC_Query::get_main_search_queryget_main_meta_query to ease unit testing.
     *
     * @since 4.4.0
     * @return array
     */
    protected function get_main_meta_query()
    {
    }
    /**
     * Get a tax query SQL for a given set of taxonomy, terms and operator.
     * Uses an intermediate WP_Tax_Query object.
     *
     * @since 4.4.0
     * @param string $taxonomy Taxonomy name.
     * @param array  $terms Terms to include in the query.
     * @param string $operator Query operator, as supported by WP_Tax_Query; e.g. "NOT IN".
     *
     * @return array
     */
    private function get_extra_tax_query_sql($taxonomy, $terms, $operator)
    {
    }
    /**
     * Convert a tax query array to SQL using an intermediate WP_Tax_Query object.
     *
     * @since 4.4.0
     * @param array $query Query array in the same format accepted by WP_Tax_Query constructor.
     *
     * @return array Query SQL as returned by WP_Tax_Query->get_sql.
     */
    private function convert_tax_query_to_sql($query)
    {
    }
    /**
     * Show list based layered nav.
     *
     * @param  array  $terms Terms.
     * @param  string $taxonomy Taxonomy.
     * @param  string $query_type Query Type.
     * @return bool   Will nav display?
     */
    protected function layered_nav_list($terms, $taxonomy, $query_type)
    {
    }
}