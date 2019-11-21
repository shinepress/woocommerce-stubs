<?php


/**
 * WC_Query Class.
 */
class WC_Query
{
    /**
     * Query vars to add to wp.
     *
     * @var array
     */
    public $query_vars = array();
    /**
     * Reference to the main product query on the page.
     *
     * @var array
     */
    private static $product_query;
    /**
     * Stores chosen attributes.
     *
     * @var array
     */
    private static $_chosen_attributes;
    /**
     * Constructor for the query class. Hooks in methods.
     */
    public function __construct()
    {
    }
    /**
     * Get any errors from querystring.
     */
    public function get_errors()
    {
    }
    /**
     * Init query vars by loading options.
     */
    public function init_query_vars()
    {
    }
    /**
     * Get page title for an endpoint.
     *
     * @param  string $endpoint Endpoint key.
     * @return string
     */
    public function get_endpoint_title($endpoint)
    {
    }
    /**
     * Endpoint mask describing the places the endpoint should be added.
     *
     * @since 2.6.2
     * @return int
     */
    public function get_endpoints_mask()
    {
    }
    /**
     * Add endpoints for query vars.
     */
    public function add_endpoints()
    {
    }
    /**
     * Add query vars.
     *
     * @param array $vars Query vars.
     * @return array
     */
    public function add_query_vars($vars)
    {
    }
    /**
     * Get query vars.
     *
     * @return array
     */
    public function get_query_vars()
    {
    }
    /**
     * Get query current active query var.
     *
     * @return string
     */
    public function get_current_endpoint()
    {
    }
    /**
     * Parse the request and look for query vars - endpoints may not be supported.
     */
    public function parse_request()
    {
    }
    /**
     * Are we currently on the front page?
     *
     * @param WP_Query $q Query instance.
     * @return bool
     */
    private function is_showing_page_on_front($q)
    {
    }
    /**
     * Is the front page a page we define?
     *
     * @param int $page_id Page ID.
     * @return bool
     */
    private function page_on_front_is($page_id)
    {
    }
    /**
     * Hook into pre_get_posts to do the main product query.
     *
     * @param WP_Query $q Query instance.
     */
    public function pre_get_posts($q)
    {
    }
    /**
     * Pre_get_posts above may adjust the main query to add WooCommerce logic. When this query is done, we need to ensure
     * all custom filters are removed.
     *
     * This is done here during the_posts filter. The input is not changed.
     *
     * @param array $posts Posts from WP Query.
     * @return array
     */
    public function remove_product_query_filters($posts)
    {
    }
    /**
     * WP SEO meta description.
     *
     * Hooked into wpseo_ hook already, so no need for function_exist.
     *
     * @return string
     */
    public function wpseo_metadesc()
    {
    }
    /**
     * WP SEO meta key.
     *
     * Hooked into wpseo_ hook already, so no need for function_exist.
     *
     * @return string
     */
    public function wpseo_metakey()
    {
    }
    /**
     * Query the products, applying sorting/ordering etc.
     * This applies to the main WordPress loop.
     *
     * @param WP_Query $q Query instance.
     */
    public function product_query($q)
    {
    }
    /**
     * Remove the query.
     */
    public function remove_product_query()
    {
    }
    /**
     * Remove ordering queries.
     */
    public function remove_ordering_args()
    {
    }
    /**
     * Returns an array of arguments for ordering products based on the selected values.
     *
     * @param string $orderby Order by param.
     * @param string $order Order param.
     * @return array
     */
    public function get_catalog_ordering_args($orderby = '', $order = '')
    {
    }
    /**
     * Handle numeric price sorting.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_price_asc_post_clauses($args)
    {
    }
    /**
     * Handle numeric price sorting.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_price_desc_post_clauses($args)
    {
    }
    /**
     * WP Core doens't let us change the sort direction for individual orderby params - https://core.trac.wordpress.org/ticket/17065.
     *
     * This lets us sort by meta value desc, and have a second orderby param.
     *
     * @param array $args Query args.
     * @return array
     */
    public function order_by_popularity_post_clauses($args)
    {
    }
    /**
     * Appends meta queries to an array.
     *
     * @param  array $meta_query Meta query.
     * @param  bool  $main_query If is main query.
     * @return array
     */
    public function get_meta_query($meta_query = array(), $main_query = \false)
    {
    }
    /**
     * Appends tax queries to an array.
     *
     * @param  array $tax_query  Tax query.
     * @param  bool  $main_query If is main query.
     * @return array
     */
    public function get_tax_query($tax_query = array(), $main_query = \false)
    {
    }
    /**
     * Return a meta query for filtering by price.
     *
     * @return array
     */
    private function price_filter_meta_query()
    {
    }
    /**
     * Get the main query which product queries ran against.
     *
     * @return array
     */
    public static function get_main_query()
    {
    }
    /**
     * Get the tax query which was used by the main query.
     *
     * @return array
     */
    public static function get_main_tax_query()
    {
    }
    /**
     * Get the meta query which was used by the main query.
     *
     * @return array
     */
    public static function get_main_meta_query()
    {
    }
    /**
     * Based on WP_Query::parse_search
     */
    public static function get_main_search_query_sql()
    {
    }
    /**
     * Get an array of attributes and terms selected with the layered nav widget.
     *
     * @return array
     */
    public static function get_layered_nav_chosen_attributes()
    {
    }
    /**
     * Remove the add-to-cart param from pagination urls.
     *
     * @param string $url URL.
     * @return string
     */
    public function remove_add_to_cart_pagination($url)
    {
    }
    // @codingStandardsIgnoreStart
    /**
     * Order by rating post clauses.
     *
     * @deprecated 3.0.0
     * @param array $args
     * @return array
     */
    public function order_by_rating_post_clauses($args)
    {
    }
    /**
     * Return a meta query for filtering by rating.
     *
     * @deprecated 3.0.0 Replaced with taxonomy.
     * @return array
     */
    public function rating_filter_meta_query()
    {
    }
    /**
     * Returns a meta query to handle product visibility.
     *
     * @deprecated 3.0.0 Replaced with taxonomy.
     * @param string $compare (default: 'IN')
     * @return array
     */
    public function visibility_meta_query($compare = 'IN')
    {
    }
    /**
     * Returns a meta query to handle product stock status.
     *
     * @deprecated 3.0.0 Replaced with taxonomy.
     * @param string $status (default: 'instock')
     * @return array
     */
    public function stock_status_meta_query($status = 'instock')
    {
    }
    /**
     * Layered nav init.
     *
     * @deprecated 2.6.0
     */
    public function layered_nav_init()
    {
    }
    /**
     * Get an unpaginated list all product IDs (both filtered and unfiltered). Makes use of transients.
     *
     * @deprecated 2.6.0 due to performance concerns
     */
    public function get_products_in_view()
    {
    }
    /**
     * Layered Nav post filter.
     *
     * @deprecated 2.6.0 due to performance concerns
     *
     * @param mixed $deprecated Deprecated.
     */
    public function layered_nav_query($deprecated)
    {
    }
    /**
     * Search post excerpt.
     *
     * @deprecated 3.2.0 - Not needed anymore since WordPress 4.5.
     */
    public function search_post_excerpt($where = '')
    {
    }
    /**
     * Remove the posts_where filter.
     * @deprecated 3.2.0 - Nothing to remove anymore because search_post_excerpt() is deprecated.
     */
    public function remove_posts_where()
    {
    }
}