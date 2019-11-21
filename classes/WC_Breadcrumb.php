<?php


/**
 * Breadcrumb class.
 */
class WC_Breadcrumb
{
    /**
     * Breadcrumb trail.
     *
     * @var array
     */
    private $crumbs = array();
    /**
     * Add a crumb so we don't get lost.
     *
     * @param string $name Name.
     * @param string $link Link.
     */
    public function add_crumb($name, $link = '')
    {
    }
    /**
     * Reset crumbs.
     */
    public function reset()
    {
    }
    /**
     * Get the breadcrumb.
     *
     * @return array
     */
    public function get_breadcrumb()
    {
    }
    /**
     * Generate breadcrumb trail.
     *
     * @return array of breadcrumbs
     */
    public function generate()
    {
    }
    /**
     * Prepend the shop page to shop breadcrumbs.
     */
    private function prepend_shop_page()
    {
    }
    /**
     * Is home trail..
     */
    private function add_crumbs_home()
    {
    }
    /**
     * 404 trail.
     */
    private function add_crumbs_404()
    {
    }
    /**
     * Attachment trail.
     */
    private function add_crumbs_attachment()
    {
    }
    /**
     * Single post trail.
     *
     * @param int    $post_id   Post ID.
     * @param string $permalink Post permalink.
     */
    private function add_crumbs_single($post_id = 0, $permalink = '')
    {
    }
    /**
     * Page trail.
     */
    private function add_crumbs_page()
    {
    }
    /**
     * Product category trail.
     */
    private function add_crumbs_product_category()
    {
    }
    /**
     * Product tag trail.
     */
    private function add_crumbs_product_tag()
    {
    }
    /**
     * Shop breadcrumb.
     */
    private function add_crumbs_shop()
    {
    }
    /**
     * Post type archive trail.
     */
    private function add_crumbs_post_type_archive()
    {
    }
    /**
     * Category trail.
     */
    private function add_crumbs_category()
    {
    }
    /**
     * Tag trail.
     */
    private function add_crumbs_tag()
    {
    }
    /**
     * Add crumbs for date based archives.
     */
    private function add_crumbs_date()
    {
    }
    /**
     * Add crumbs for taxonomies
     */
    private function add_crumbs_tax()
    {
    }
    /**
     * Add a breadcrumb for author archives.
     */
    private function add_crumbs_author()
    {
    }
    /**
     * Add crumbs for a term.
     *
     * @param int    $term_id  Term ID.
     * @param string $taxonomy Taxonomy.
     */
    private function term_ancestors($term_id, $taxonomy)
    {
    }
    /**
     * Endpoints.
     */
    private function endpoint_trail()
    {
    }
    /**
     * Add a breadcrumb for search results.
     */
    private function search_trail()
    {
    }
    /**
     * Add a breadcrumb for pagination.
     */
    private function paged_trail()
    {
    }
}