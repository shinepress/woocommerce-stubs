<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * ProductCollection class.
 */
class ProductCollection extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'product-collection';
    /**
     * The Block with its attributes before it gets rendered
     *
     * @var array
     */
    protected $parsed_block;
    /**
     * All query args from WP_Query.
     *
     * @var array
     */
    protected $valid_query_vars;
    /**
     * All the query args related to the filter by attributes block.
     *
     * @var array
     */
    protected $attributes_filter_query_args = array();
    /**
     * Orderby options not natively supported by WordPress REST API
     *
     * @var array
     */
    protected $custom_order_opts = array('popularity', 'rating');
    /**
     * The render state of the product collection block.
     *
     * These props are runtime-based and reinitialize for every block on a page.
     *
     * @var array
     */
    private $render_state = array('has_results' => false, 'has_no_results_block' => false);
    /**
     * Initialize this block type.
     *
     * - Hook into WP lifecycle.
     * - Register the block with WordPress.
     * - Hook into pre_render_block to update the query.
     */
    protected function initialize()
    {
    }
    /**
     * Handle the rendering of the block.
     *
     * @param string $block_content The block content about to be rendered.
     * @param array  $block The block being rendered.
     *
     * @return string
     */
    public function handle_rendering($block_content, $block)
    {
    }
    /**
     * Check if the block should be prevented from rendering.
     *
     * @return bool
     */
    private function should_prevent_render()
    {
    }
    /**
     * Reset the render state.
     */
    private function reset_render_state()
    {
    }
    /**
     * Provides the location context to each inner block of the product collection block.
     * Hint: Only blocks using the 'query' context will be affected.
     *
     * The sourceData structure depends on the context type as follows:
     * - site:    [ ]
     * - order:   [ 'orderId'    => int ]
     * - cart:    [ 'productIds' => int[] ]
     * - archive: [ 'taxonomy'   => string, 'termId' => int ]
     * - product: [ 'productId'  => int ]
     *
     * @example array(
     *   'type'       => 'product',
     *   'sourceData' => array( 'productId' => 123 ),
     * )
     *
     * @param array $context  The block context.
     * @return array $context {
     *     The block context including the product collection location context.
     *
     *     @type array $productCollectionLocation {
     *         @type string  $type        The context type. Possible values are 'site', 'order', 'cart', 'archive', 'product'.
     *         @type array   $sourceData  The context source data. Can be the product ID of the viewed product, the order ID of the current order viewed, etc. See structure above for more details.
     *     }
     * }
     */
    public function provide_location_context_for_inner_blocks($context)
    {
    }
    /**
     * Get the global location context.
     * Serve as a runtime cache for the location context.
     *
     * @see ProductCollectionUtils::parse_frontend_location_context()
     *
     * @return array The location context.
     */
    private function get_location_context()
    {
    }
    /**
     * Check if next tag is a PC block.
     *
     * @param WP_HTML_Tag_processor $p Initial tag processor.
     *
     * @return bool Answer if PC block is available.
     */
    private function is_next_tag_product_collection($p)
    {
    }
    /**
     * Set PC block namespace for Interactivity API.
     *
     * @param WP_HTML_Tag_processor $p Initial tag processor.
     */
    private function set_product_collection_namespace($p)
    {
    }
    /**
     * Attach the init directive to Product Collection block to call
     * the onRender callback.
     *
     * @param string $block_content The HTML content of the block.
     * @param string $collection Collection type.
     *
     * @return string Updated HTML content.
     */
    private function add_rendering_callback($block_content, $collection)
    {
    }
    /**
     * Attach all the Interactivity API directives responsible
     * for client-side navigation.
     *
     * @param string $block_content The HTML content of the block.
     *
     * @return string Updated HTML content.
     */
    private function enable_client_side_navigation($block_content)
    {
    }
    /**
     * Enhances the Product Collection block with client-side pagination.
     *
     * This function identifies Product Collection blocks and adds necessary data attributes
     * to enable client-side navigation and animation effects. It also enqueues the Interactivity API runtime.
     *
     * @param string $block_content The HTML content of the block.
     * @param array  $block         Block details, including its attributes.
     *
     * @return string Updated block content with added interactivity attributes.
     */
    public function enhance_product_collection_with_interactivity($block_content, $block)
    {
    }
    /**
     * Add interactive links to all anchors inside the Query Pagination block.
     * This enabled client-side navigation for the product collection block.
     *
     * @param string    $block_content The block content.
     * @param array     $block         The full block, including name and attributes.
     * @param \WP_Block $instance      The block instance.
     */
    public function add_navigation_link_directives($block_content, $block, $instance)
    {
    }
    /**
     * Add interactivity to the Product Title block within Product Collection.
     * This enables the triggering of a custom event when the product title is clicked.
     *
     * @param string    $block_content The block content.
     * @param array     $block         The full block, including name and attributes.
     * @param \WP_Block $instance      The block instance.
     * @return string   Modified block content with added interactivity.
     */
    public function add_product_title_click_event_directives($block_content, $block, $instance)
    {
    }
    /**
     * Process pagination links within the block content.
     *
     * @param string $block_content The block content.
     * @return string The updated block content.
     */
    private function process_pagination_links($block_content)
    {
    }
    /**
     * Sets up data attributes required for interactivity and client-side navigation.
     *
     * @param \WP_HTML_Tag_Processor $processor The HTML tag processor.
     * @param string                 $class_name The class name of the anchor tags.
     * @param string                 $key_prefix The prefix for the data-wc-key attribute.
     */
    private function update_pagination_anchors($processor, $class_name, $key_prefix)
    {
    }
    /**
     * Verifies if the inner block is compatible with Interactivity API.
     *
     * @param string $block_name Name of the block to verify.
     * @return boolean
     */
    private function is_block_compatible($block_name)
    {
    }
    /**
     * Check inner blocks of Product Collection block if there's one
     * incompatible with the Interactivity API and if so, disable client-side
     * navigation.
     *
     * @param array $parsed_block The block being rendered.
     * @return string Returns the parsed block, unmodified.
     */
    public function disable_enhanced_pagination($parsed_block)
    {
    }
    /**
     * Extra data passed through from server to client for block.
     *
     * @param array $attributes  Any attributes that currently are available from the block.
     *                           Note, this will be empty in the editor context when the block is
     *                           not in the post content on editor load.
     */
    protected function enqueue_data(array $attributes = array())
    {
    }
    /**
     * Update the query for the product query block in Editor.
     *
     * @param array           $args    Query args.
     * @param WP_REST_Request $request Request.
     */
    public function update_rest_query_in_editor($args, $request): array
    {
    }
    /**
     * Add support for filter blocks:
     * - Price filter block
     * - Attributes filter block
     * - Rating filter block
     * - In stock filter block etc.
     *
     * @param array $pre_render   The pre-rendered block.
     * @param array $parsed_block The parsed block.
     */
    public function add_support_for_filter_blocks($pre_render, $parsed_block)
    {
    }
    /**
     * Return a custom query based on attributes, filters and global WP_Query.
     *
     * @param WP_Query $query The WordPress Query.
     * @param WP_Block $block The block being rendered.
     * @param int      $page  The page number.
     *
     * @return array
     */
    public function build_frontend_query($query, $block, $page)
    {
    }
    /**
     * Get the final query arguments for the frontend.
     *
     * @param array $query The query arguments.
     * @param int   $page  The page number.
     * @param bool  $is_exclude_applied_filters Whether to exclude the applied filters or not.
     */
    private function get_final_frontend_query($query, $page = 1, $is_exclude_applied_filters = false)
    {
    }
    /**
     * Get final query args based on provided values
     *
     * @param array $common_query_values Common query values.
     * @param array $query               Query from block context.
     * @param bool  $is_exclude_applied_filters Whether to exclude the applied filters or not.
     */
    private function get_final_query_args($common_query_values, $query, $is_exclude_applied_filters = false)
    {
    }
    /**
     * Get query args for preview mode. These query args will be used with WP_Query to fetch the products.
     *
     * @param array           $args    Query args.
     * @param WP_REST_Request $request Request.
     */
    private function get_preview_query_args($args, $request)
    {
    }
    /**
     * Extends allowed `collection_params` for the REST API
     *
     * By itself, the REST API doesn't accept custom `orderby` values,
     * even if they are supported by a custom post type.
     *
     * @param array $params  A list of allowed `orderby` values.
     *
     * @return array
     */
    public function extend_rest_query_allowed_params($params)
    {
    }
    /**
     * Merge in the first parameter the keys "post_in", "meta_query" and "tax_query" of the second parameter.
     *
     * @param array[] ...$queries Query arrays to be merged.
     * @return array
     */
    private function merge_queries(...$queries)
    {
    }
    /**
     * Return query params to support custom sort values
     *
     * @param string $orderby  Sort order option.
     *
     * @return array
     */
    private function get_custom_orderby_query($orderby)
    {
    }
    /**
     * Return a query for on sale products.
     *
     * @param bool $is_on_sale Whether to query for on sale products.
     *
     * @return array
     */
    private function get_on_sale_products_query($is_on_sale)
    {
    }
    /**
     * Return or initialize $valid_query_vars.
     *
     * @return array
     */
    private function get_valid_query_vars()
    {
    }
    /**
     * Merge two array recursively but replace the non-array values instead of
     * merging them. The merging strategy:
     *
     * - If keys from merge array doesn't exist in the base array, create them.
     * - For array items with numeric keys, we merge them as normal.
     * - For array items with string keys:
     *
     *   - If the value isn't array, we'll use the value coming from the merge array.
     *     $base = ['orderby' => 'date']
     *     $new  = ['orderby' => 'meta_value_num']
     *     Result: ['orderby' => 'meta_value_num']
     *
     *   - If the value is array, we'll use recursion to merge each key.
     *     $base = ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ]
     *     ]]
     *     $new  = ['meta_query' => [
     *       [
     *         'relation' => 'AND',
     *         [...<max_price_query>],
     *         [...<min_price_query>],
     *       ]
     *     ]]
     *     Result: ['meta_query' => [
     *       [
     *         'key'     => '_stock_status',
     *         'compare' => 'IN'
     *         'value'   =>  ['instock', 'onbackorder']
     *       ],
     *       [
     *         'relation' => 'AND',
     *         [...<max_price_query>],
     *         [...<min_price_query>],
     *       ]
     *     ]]
     *
     *     $base = ['post__in' => [1, 2, 3, 4, 5]]
     *     $new  = ['post__in' => [3, 4, 5, 6, 7]]
     *     Result: ['post__in' => [1, 2, 3, 4, 5, 3, 4, 5, 6, 7]]
     *
     * @param array $base First array.
     * @param array $new  Second array.
     */
    private function array_merge_recursive_replace_non_array_properties($base, $new)
    {
    }
    /**
     * Return a query for products depending on their stock status.
     *
     * @param array $stock_statuses An array of acceptable stock statuses.
     * @return array
     */
    private function get_stock_status_query($stock_statuses)
    {
    }
    /**
     * Return a query for product visibility depending on their stock status.
     *
     * @param array $stock_query  Stock status query.
     * @param array $stock_status Selected stock status.
     *
     * @return array Tax query for product visibility.
     */
    private function get_product_visibility_query($stock_query, $stock_status)
    {
    }
    /**
     * Generates a tax query to filter products based on their "featured" status.
     * If the `$featured` parameter is true, the function will return a tax query
     * that filters products to only those marked as featured.
     * If `$featured` is false, an empty array is returned, meaning no filtering will be applied.
     *
     * @param bool $featured A flag indicating whether to filter products based on featured status.
     *
     * @return array A tax query for fetching featured products if `$featured` is true; otherwise, an empty array.
     */
    private function get_featured_query($featured)
    {
    }
    /**
     * Merge tax_queries from various queries.
     *
     * @param array ...$queries Query arrays to be merged.
     * @return array
     */
    private function merge_tax_queries(...$queries)
    {
    }
    /**
     * Return the `tax_query` for the requested attributes
     *
     * @param array $attributes  Attributes and their terms.
     *
     * @return array
     */
    private function get_product_attributes_query($attributes = array())
    {
    }
    /**
     * Return a query to filter products by taxonomies (product categories, product tags, etc.)
     *
     * For example:
     * User could provide "Product Categories" using "Filters" ToolsPanel available in Inspector Controls.
     * We use this function to extract its query from $tax_query.
     *
     * For example, this is how the query for product categories will look like in $tax_query array:
     * Array
     *    (
     *        [taxonomy] => product_cat
     *        [terms] => Array
     *            (
     *                [0] => 36
     *            )
     *    )
     *
     * For product tags, taxonomy would be "product_tag"
     *
     * @param array $tax_query Query to filter products by taxonomies.
     * @return array Query to filter products by taxonomies.
     */
    private function get_filter_by_taxonomies_query($tax_query): array
    {
    }
    /**
     * Apply the query only to a subset of products
     *
     * @param array $query  The query.
     * @param array $ids  Array of selected product ids.
     *
     * @return array
     */
    private function filter_query_to_only_include_ids($query, $ids)
    {
    }
    /**
     * Return queries that are generated by query args.
     *
     * @return array
     */
    private function get_queries_by_applied_filters()
    {
    }
    /**
     * Return a query that filters products by price.
     *
     * @return array
     */
    private function get_filter_by_price_query()
    {
    }
    /**
     * Return a query that filters products by attributes.
     *
     * @return array
     */
    private function get_filter_by_attributes_query()
    {
    }
    /**
     * Get all the query args related to the filter by attributes block.
     *
     * @return array
     * [color] => Array
     *   (
     *        [filter] => filter_color
     *        [query_type] => query_type_color
     *    )
     *
     * [size] => Array
     *    (
     *        [filter] => filter_size
     *        [query_type] => query_type_size
     *    )
     * )
     */
    private function get_filter_by_attributes_query_vars()
    {
    }
    /**
     * Return a query that filters products by stock status.
     *
     * @return array
     */
    private function get_filter_by_stock_status_query()
    {
    }
    /**
     * Return a query that filters products by rating.
     *
     * @return array
     */
    private function get_filter_by_rating_query()
    {
    }
    /**
     * Constructs a date query for product filtering based on a specified time frame.
     *
     * @param array $time_frame {
     *     Associative array with 'operator' (in or not-in) and 'value' (date string).
     *
     *     @type string $operator Determines the inclusion or exclusion of the date range.
     *     @type string $value    The date around which the range is applied.
     * }
     * @return array Date query array; empty if parameters are invalid.
     */
    private function get_date_query(array $time_frame): array
    {
    }
    /**
     * Get query arguments for price range filter.
     * We are adding these extra query arguments to be used in `posts_clauses`
     * because there are 2 special edge cases we wanna handle for Price range filter:
     * Case 1: Prices excluding tax are displayed including tax
     * Case 2: Prices including tax are displayed excluding tax
     *
     * Both of these cases require us to modify SQL query to get the correct results.
     *
     * See add_price_range_filter_posts_clauses function in this file for more details.
     *
     * @param array $price_range Price range with min and max values.
     * @return array Query arguments.
     */
    public function get_price_range_query_args($price_range)
    {
    }
    /**
     * Add the `posts_clauses` filter to the main query.
     *
     * @param array    $clauses The query clauses.
     * @param WP_Query $query   The WP_Query instance.
     */
    public function add_price_range_filter_posts_clauses($clauses, $query)
    {
    }
    /**
     * Determines if price filters need adjustment based on the tax display settings.
     *
     * This function checks if there's a discrepancy between how prices are stored in the database
     * and how they are displayed to the user, specifically with respect to tax inclusion or exclusion.
     * It returns true if an adjustment is needed, indicating that the price filters should account for this
     * discrepancy to display accurate prices.
     *
     * @return bool True if the price filters need to be adjusted for tax display settings, false otherwise.
     */
    private function should_adjust_price_range_for_taxes()
    {
    }
    /**
     * Join wc_product_meta_lookup to posts if not already joined.
     *
     * @param string $sql SQL join.
     * @return string
     */
    protected function append_product_sorting_table_join($sql)
    {
    }
    /**
     * Get query for price filters when dealing with displayed taxes.
     *
     * @param float  $price_filter Price filter to apply.
     * @param string $column Price being filtered (min or max).
     * @param string $operator Comparison operator for column.
     * @return string Constructed query.
     */
    protected function get_price_filter_query_for_displayed_taxes($price_filter, $column = 'min_price', $operator = '>=')
    {
    }
    /**
     * Adjusts a price filter based on a tax class and whether or not the amount includes or excludes taxes.
     *
     * This calculation logic is based on `wc_get_price_excluding_tax` and `wc_get_price_including_tax` in core.
     *
     * @param float  $price_filter Price filter amount as entered.
     * @param string $tax_class Tax class for adjustment.
     * @return float
     */
    protected function adjust_price_filter_for_tax_class($price_filter, $tax_class)
    {
    }
}