<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * BlockTypesController class.
 *
 * @internal
 */
class BlockTemplatesController
{
    /**
     * Directory which contains all templates
     *
     * @var string
     */
    const TEMPLATES_ROOT_DIR = 'templates';
    /**
     * Package instance.
     *
     * @var Package
     */
    private $package;
    /**
     * Constructor.
     *
     * @param Package $package An instance of Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Initialization method.
     */
    protected function init()
    {
    }
    /**
     * Add Mini-Cart to the default template part areas.
     *
     * @param array $default_area_definitions An array of supported area objects.
     * @return array The supported template part areas including the Mini-Cart one.
     */
    public function register_mini_cart_template_part_area($default_area_definitions)
    {
    }
    /**
     * Renders the `core/template-part` block on the server.
     *
     * @param array $attributes The block attributes.
     * @return string The render.
     */
    public function render_woocommerce_template_part($attributes)
    {
    }
    /**
     * This function is used on the `pre_get_block_template` hook to return the fallback template from the db in case
     * the template is eligible for it.
     *
     * @param \WP_Block_Template|null $template Block template object to short-circuit the default query,
     *                                          or null to allow WP to run its normal queries.
     * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
     * @param string                  $template_type wp_template or wp_template_part.
     *
     * @return object|null
     */
    public function get_block_template_fallback($template, $id, $template_type)
    {
    }
    /**
     * Adds the `archive-product` template to the `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-attribute`
     * templates to be able to fall back to it.
     *
     * @param array $template_hierarchy A list of template candidates, in descending order of priority.
     */
    public function add_archive_product_to_eligible_for_fallback_templates($template_hierarchy)
    {
    }
    /**
     * Checks the old and current themes and determines if the "wc_blocks_use_blockified_product_grid_block_as_template"
     * option need to be updated accordingly.
     *
     * @param string    $old_name Old theme name.
     * @param \WP_Theme $old_theme Instance of the old theme.
     * @return void
     */
    public function check_should_use_blockified_product_grid_templates($old_name, $old_theme)
    {
    }
    /**
     * This function checks if there's a block template file in `woocommerce/templates/templates/`
     * to return to pre_get_posts short-circuiting the query in Gutenberg.
     *
     * @param \WP_Block_Template|null $template Return a block template object to short-circuit the default query,
     *                                               or null to allow WP to run its normal queries.
     * @param string                  $id Template unique identifier (example: theme_slug//template_slug).
     * @param string                  $template_type wp_template or wp_template_part.
     *
     * @return mixed|\WP_Block_Template|\WP_Error
     */
    public function get_block_file_template($template, $id, $template_type)
    {
    }
    /**
     * Add the block template objects to be used.
     *
     * @param array  $query_result Array of template objects.
     * @param array  $query Optional. Arguments to retrieve templates.
     * @param string $template_type wp_template or wp_template_part.
     * @return array
     */
    public function add_block_templates($query_result, $query, $template_type)
    {
    }
    /**
     * Gets the templates saved in the database.
     *
     * @param array  $slugs An array of slugs to retrieve templates for.
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return int[]|\WP_Post[] An array of found templates.
     */
    public function get_block_templates_from_db($slugs = array(), $template_type = 'wp_template')
    {
    }
    /**
     * Gets the templates from the WooCommerce blocks directory, skipping those for which a template already exists
     * in the theme directory.
     *
     * @param string[] $slugs An array of slugs to filter templates by. Templates whose slug does not match will not be returned.
     * @param array    $already_found_templates Templates that have already been found, these are customised templates that are loaded from the database.
     * @param string   $template_type wp_template or wp_template_part.
     *
     * @return array Templates from the WooCommerce blocks plugin directory.
     */
    public function get_block_templates_from_woocommerce($slugs, $already_found_templates, $template_type = 'wp_template')
    {
    }
    /**
     * Get and build the block template objects from the block template files.
     *
     * @param array  $slugs An array of slugs to retrieve templates for.
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return array WP_Block_Template[] An array of block template objects.
     */
    public function get_block_templates($slugs = array(), $template_type = 'wp_template')
    {
    }
    /**
     * Returns the path of a template on the Blocks template folder.
     *
     * @param string $template_slug Block template slug e.g. single-product.
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return string
     */
    public function get_template_path_from_woocommerce($template_slug, $template_type = 'wp_template')
    {
    }
    /**
     * Checks whether a block template with that name exists in Woo Blocks
     *
     * @param string $template_name Template to check.
     * @param array  $template_type wp_template or wp_template_part.
     *
     * @return boolean
     */
    public function block_template_is_available($template_name, $template_type = 'wp_template')
    {
    }
    /**
     * Renders the default block template from Woo Blocks if no theme templates exist.
     */
    public function render_block_template()
    {
    }
    /**
     * Remove the template panel from the Sidebar of the Shop page because
     * the Site Editor handles it.
     *
     * @see https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/6278
     *
     * @param bool $is_support Whether the active theme supports block templates.
     *
     * @return bool
     */
    public function remove_block_template_support_for_shop_page($is_support)
    {
    }
    /**
     * Update the product archive title to "Shop".
     *
     * @param string $post_type_name Post type 'name' label.
     * @param string $post_type      Post type.
     *
     * @return string
     */
    public function update_product_archive_title($post_type_name, $post_type)
    {
    }
    /**
     * Migrates page content to templates if needed.
     */
    public function maybe_migrate_content()
    {
    }
}