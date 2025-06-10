<?php


/**
 * Comments class.
 */
class WC_Comments
{
    /**
     * The cache group to use for comment counts.
     *
     * @var string
     */
    private const COMMENT_COUNT_CACHE_GROUP = 'wc_comment_counts';
    /**
     * The cache key to use for pending product reviews counts.
     *
     * @var string
     */
    private const PRODUCT_REVIEWS_PENDING_COUNT_CACHE_KEY = 'woocommerce_product_reviews_pending_count';
    /**
     * Hook in methods.
     */
    public static function init()
    {
    }
    /**
     * See if comments are open.
     *
     * @since  3.1.0
     * @param  bool $open    Whether the current post is open for comments.
     * @param  int  $post_id Post ID.
     * @return bool
     */
    public static function comments_open($open, $post_id)
    {
    }
    /**
     * Exclude order comments from queries and RSS.
     *
     * This code should exclude shop_order comments from queries. Some queries (like the recent comments widget on the dashboard) are hardcoded.
     * and are not filtered, however, the code current_user_can( 'read_post', $comment->comment_post_ID ) should keep them safe since only admin and.
     * shop managers can view orders anyway.
     *
     * The frontend view order pages get around this filter by using remove_filter('comments_clauses', array( 'WC_Comments' ,'exclude_order_comments'), 10, 1 );
     *
     * @param  array $clauses A compacted array of comment query clauses.
     * @return array
     */
    public static function exclude_order_comments($clauses)
    {
    }
    /**
     * Exclude order comments from feed.
     *
     * @deprecated 3.1
     * @param mixed $join Deprecated.
     */
    public static function exclude_order_comments_from_feed_join($join)
    {
    }
    /**
     * Exclude order comments from queries and RSS.
     *
     * @param  string $where The WHERE clause of the query.
     * @return string
     */
    public static function exclude_order_comments_from_feed_where($where)
    {
    }
    /**
     * Exclude webhook comments from queries and RSS.
     *
     * @since  2.2
     * @param  array $clauses A compacted array of comment query clauses.
     * @return array
     */
    public static function exclude_webhook_comments($clauses)
    {
    }
    /**
     * Exclude webhooks comments from feed.
     *
     * @deprecated 3.1
     * @param mixed $join Deprecated.
     */
    public static function exclude_webhook_comments_from_feed_join($join)
    {
    }
    /**
     * Exclude webhook comments from queries and RSS.
     *
     * @since  2.1
     * @param  string $where The WHERE clause of the query.
     * @return string
     */
    public static function exclude_webhook_comments_from_feed_where($where)
    {
    }
    /**
     * Exclude action_log comments from queries and RSS.
     *
     * @since  9.9
     * @param  string $where The WHERE clause of the query.
     * @return string
     */
    public static function exclude_action_log_comments_from_feed_where($where)
    {
    }
    /**
     * Exclude action_log comments from queries.
     *
     * @param array            $clauses       A compacted array of comment query clauses.
     * @param WP_Comment_Query $comment_query The WP_Comment_Query being filtered.
     *
     * @return array
     * @since  9.9
     */
    public static function exclude_action_log_comments($clauses, $comment_query)
    {
    }
    /**
     * Validate the comment ratings.
     *
     * @param  array $comment_data Comment data.
     * @return array
     */
    public static function check_comment_rating($comment_data)
    {
    }
    /**
     * Rating field for comments.
     *
     * @param int $comment_id Comment ID.
     */
    public static function add_comment_rating($comment_id)
    {
    }
    /**
     * Modify recipient of review email.
     *
     * @param array $emails     Emails.
     * @param int   $comment_id Comment ID.
     * @return array
     */
    public static function comment_moderation_recipients($emails, $comment_id)
    {
    }
    /**
     * Ensure product average rating and review count is kept up to date.
     *
     * @param int $post_id Post ID.
     */
    public static function clear_transients($post_id)
    {
    }
    /**
     * Callback for 'wp_insert_comment' to delete the comment count cache if the comment is included in the count.
     *
     * @param int        $comment_id The comment ID.
     * @param WP_Comment $comment    Comment object.
     *
     * @return void
     */
    public static function increment_comments_count_cache_on_wp_insert_comment($comment_id, $comment)
    {
    }
    /**
     * Callback for 'comment_status_change' to delete the comment count cache if the comment is included in the count.
     *
     * @param int|string $new_status The new comment status.
     * @param int|string $old_status The old comment status.
     * @param WP_Comment $comment    Comment object.
     *
     * @return void
     */
    public static function update_comments_count_cache_on_comment_status_change($new_status, $old_status, $comment)
    {
    }
    /**
     * Determines whether the given comment should be included in the core WP comment counts that are displayed in the
     * WordPress admin.
     *
     * @param WP_Comment $comment Comment object.
     *
     * @return bool
     */
    private static function is_comment_excluded_from_wp_comment_counts($comment)
    {
    }
    /**
     * Delete comments count cache whenever there is
     * new comment or the status of a comment changes. Cache
     * will be regenerated next time WC_Comments::wp_count_comments()
     * is called.
     */
    public static function delete_comments_count_cache()
    {
    }
    /**
     * Fetches (and populates if needed) the counter.
     *
     * @return int
     */
    public static function get_products_reviews_pending_moderation_counter(): int
    {
    }
    /**
     * Handles `wp_insert_comment` hook processing and actualizes the counter.
     *
     * @param int         $comment_id Comment ID.
     * @param \WP_Comment $comment    Comment object.
     * @return void
     */
    public static function maybe_bump_products_reviews_pending_moderation_counter($comment_id, $comment): void
    {
    }
    /**
     * Handles `transition_comment_status` hook processing and actualizes the counter.
     *
     * @param int|string  $new_status New status.
     * @param int|string  $old_status Old status.
     * @param \WP_Comment $comment    Comment object.
     * @return void
     */
    public static function maybe_adjust_products_reviews_pending_moderation_counter($new_status, $old_status, $comment): void
    {
    }
    /**
     * Remove order notes, webhook delivery logs, and product reviews from wp_count_comments().
     *
     * @param array|object $stats   Comment stats.
     * @param int          $post_id Post ID.
     *
     * @return object
     * @since  2.2
     */
    public static function wp_count_comments($stats, $post_id)
    {
    }
    /**
     * Make sure WP displays avatars for comments with the `review` type.
     *
     * @since  2.3
     * @param  array $comment_types Comment types.
     * @return array
     */
    public static function add_avatar_for_review_comment_type($comment_types)
    {
    }
    /**
     * Add Product Reviews filter for `review` comment type.
     *
     * @since 6.0.0
     *
     * @param array $comment_types Array of comment type labels keyed by their name.
     *
     * @return array
     */
    public static function add_review_comment_filter(array $comment_types): array
    {
    }
    /**
     * Determine if a review is from a verified owner at submission.
     *
     * @param int $comment_id Comment ID.
     * @return bool
     */
    public static function add_comment_purchase_verification($comment_id)
    {
    }
    /**
     * Get product rating for a product. Please note this is not cached.
     *
     * @since 3.0.0
     * @param WC_Product $product Product instance.
     * @return float
     */
    public static function get_average_rating_for_product(&$product)
    {
    }
    /**
     * Utility function for getting review counts for multiple products in one query. This is not cached.
     *
     * @since 5.0.0
     *
     * @param array $product_ids Array of product IDs.
     *
     * @return array
     */
    public static function get_review_counts_for_product_ids($product_ids)
    {
    }
    /**
     * Get product review count for a product (not replies). Please note this is not cached.
     *
     * @since 3.0.0
     * @param WC_Product $product Product instance.
     * @return int
     */
    public static function get_review_count_for_product(&$product)
    {
    }
    /**
     * Get product rating count for a product. Please note this is not cached.
     *
     * @since 3.0.0
     * @param WC_Product $product Product instance.
     * @return int[]
     */
    public static function get_rating_counts_for_product(&$product)
    {
    }
    /**
     * Update comment type of product reviews.
     *
     * @since 3.5.0
     * @param array $comment_data Comment data.
     * @return array
     */
    public static function update_comment_type($comment_data)
    {
    }
    /**
     * Validate product reviews if requires a verified owner.
     *
     * @param int $comment_post_id Post ID.
     */
    public static function validate_product_review_verified_owners($comment_post_id)
    {
    }
    /**
     * Determines if a comment is of the default type.
     *
     * Prior to WordPress 5.5, '' was the default comment type.
     * As of 5.5, the default type is 'comment'.
     *
     * @since 4.3.0
     * @param string $comment_type Comment type.
     * @return bool
     */
    private static function is_default_comment_type($comment_type)
    {
    }
}