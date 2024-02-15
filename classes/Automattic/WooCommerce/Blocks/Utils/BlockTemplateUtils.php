<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Utility methods used for serving block templates from WooCommerce Blocks.
 * {@internal This class and its methods should only be used within the BlockTemplateController.php and is not intended for public use.}
 */
class BlockTemplateUtils
{
    const ELIGIBLE_FOR_ARCHIVE_PRODUCT_FALLBACK = array('taxonomy-product_cat', 'taxonomy-product_tag', \Automattic\WooCommerce\Blocks\Templates\ProductAttributeTemplate::SLUG);
    /**
     * Directory names for block templates
     *
     * Directory names conventions for block templates have changed with Gutenberg 12.1.0,
     * however, for backwards-compatibility, we also keep the older conventions, prefixed
     * with `DEPRECATED_`.
     *
     * @var array {
     *     @var string DEPRECATED_TEMPLATES  Old directory name of the block templates directory.
     *     @var string DEPRECATED_TEMPLATE_PARTS  Old directory name of the block template parts directory.
     *     @var string TEMPLATES_DIR_NAME  Directory name of the block templates directory.
     *     @var string TEMPLATE_PARTS_DIR_NAME  Directory name of the block template parts directory.
     * }
     */
    const DIRECTORY_NAMES = array('DEPRECATED_TEMPLATES' => 'block-templates', 'DEPRECATED_TEMPLATE_PARTS' => 'block-template-parts', 'TEMPLATES' => 'templates', 'TEMPLATE_PARTS' => 'parts');
    const TEMPLATES_ROOT_DIR = 'templates';
    /**
     * WooCommerce plugin slug
     *
     * This is used to save templates to the DB which are stored against this value in the wp_terms table.
     *
     * @var string
     */
    const PLUGIN_SLUG = 'woocommerce/woocommerce';
    /**
     * Deprecated WooCommerce plugin slug
     *
     * For supporting users who have customized templates under the incorrect plugin slug during the first release.
     * More context found here: https://github.com/woocommerce/woocommerce-gutenberg-products-block/issues/5423.
     *
     * @var string
     */
    const DEPRECATED_PLUGIN_SLUG = 'woocommerce';
    /**
     * Returns an array containing the references of
     * the passed blocks and their inner blocks.
     *
     * @param array $blocks array of blocks.
     *
     * @return array block references to the passed blocks and their inner blocks.
     */
    public static function flatten_blocks(&$blocks)
    {
    }
    /**
     * Parses wp_template content and injects the current theme's
     * stylesheet as a theme attribute into each wp_template_part
     *
     * @param string $template_content serialized wp_template content.
     *
     * @return string Updated wp_template content.
     */
    public static function inject_theme_attribute_in_content($template_content)
    {
    }
    /**
     * Build a unified template object based a post Object.
     * Important: This method is an almost identical duplicate from wp-includes/block-template-utils.php as it was not intended for public use. It has been modified to build templates from plugins rather than themes.
     *
     * @param \WP_Post $post Template post.
     *
     * @return \WP_Block_Template|\WP_Error Template.
     */
    public static function build_template_result_from_post($post)
    {
    }
    /**
     * Build a unified template object based on a theme file.
     *
     * @internal Important: This method is an almost identical duplicate from wp-includes/block-template-utils.php as it was not intended for public use. It has been modified to build templates from plugins rather than themes.
     *
     * @param array|object $template_file Theme file.
     * @param string       $template_type wp_template or wp_template_part.
     *
     * @return \WP_Block_Template Template.
     */
    public static function build_template_result_from_file($template_file, $template_type)
    {
    }
    /**
     * Build a new template object so that we can make Woo Blocks default templates available in the current theme should they not have any.
     *
     * @param string $template_file Block template file path.
     * @param string $template_type wp_template or wp_template_part.
     * @param string $template_slug Block template slug e.g. single-product.
     * @param bool   $template_is_from_theme If the block template file is being loaded from the current theme instead of Woo Blocks.
     *
     * @return object Block template object.
     */
    public static function create_new_block_template_object($template_file, $template_type, $template_slug, $template_is_from_theme = false)
    {
    }
    /**
     * Finds all nested template part file paths in a theme's directory.
     *
     * @param string $base_directory The theme's file path.
     * @return array $path_list A list of paths to all template part files.
     */
    public static function get_template_paths($base_directory)
    {
    }
    /**
     * Gets the directory where templates of a specific template type can be found.
     *
     * @param string $template_type wp_template or wp_template_part.
     *
     * @return string
     */
    public static function get_templates_directory($template_type = 'wp_template')
    {
    }
    /**
     * Returns template titles.
     *
     * @param string $template_slug The templates slug (e.g. single-product).
     * @return string Human friendly title.
     */
    public static function get_block_template_title($template_slug)
    {
    }
    /**
     * Returns template descriptions.
     *
     * @param string $template_slug The templates slug (e.g. single-product).
     * @return string Template description.
     */
    public static function get_block_template_description($template_slug)
    {
    }
    /**
     * Returns a filtered list of plugin template types, containing their
     * localized titles and descriptions.
     *
     * @return array The plugin template types.
     */
    public static function get_plugin_block_template_types()
    {
    }
    /**
     * Converts template paths into a slug
     *
     * @param string $path The template's path.
     * @return string slug
     */
    public static function generate_template_slug_from_path($path)
    {
    }
    /**
     * Gets the first matching template part within themes directories
     *
     * Since [Gutenberg 12.1.0](https://github.com/WordPress/gutenberg/releases/tag/v12.1.0), the conventions for
     * block templates and parts directory has changed from `block-templates` and `block-templates-parts`
     * to `templates` and `parts` respectively.
     *
     * This function traverses all possible combinations of directory paths where a template or part
     * could be located and returns the first one which is readable, prioritizing the new convention
     * over the deprecated one, but maintaining that one for backwards compatibility.
     *
     * @param string $template_slug  The slug of the template (i.e. without the file extension).
     * @param string $template_type  Either `wp_template` or `wp_template_part`.
     *
     * @return string|null  The matched path or `null` if no match was found.
     */
    public static function get_theme_template_path($template_slug, $template_type = 'wp_template')
    {
    }
    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template($template_name)
    {
    }
    /**
     * Check if the theme has a template. So we know if to load our own in or not.
     *
     * @param string $template_name name of the template file without .html extension e.g. 'single-product'.
     * @return boolean
     */
    public static function theme_has_template_part($template_name)
    {
    }
    /**
     * Checks to see if they are using a compatible version of WP, or if not they have a compatible version of the Gutenberg plugin installed.
     *
     * @param string $template_type Optional. Template type: `wp_template` or `wp_template_part`.
     *                              Default `wp_template`.
     * @return boolean
     */
    public static function supports_block_templates($template_type = 'wp_template')
    {
    }
    /**
     * Retrieves a single unified template object using its id.
     *
     * @param string $id            Template unique identifier (example: theme_slug//template_slug).
     * @param string $template_type Optional. Template type: `wp_template` or 'wp_template_part`.
     *                              Default `wp_template`.
     *
     * @return WP_Block_Template|null Template.
     */
    public static function get_block_template($id, $template_type)
    {
    }
    /**
     * Checks if we can fall back to the `archive-product` template for a given slug.
     *
     * `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-product_attribute` templates can
     *  generally use the `archive-product` as a fallback if there are no specific overrides.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @return boolean
     */
    public static function template_is_eligible_for_product_archive_fallback($template_slug)
    {
    }
    /**
     * Checks if we can fall back to an `archive-product` template stored on the db for a given slug.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @param array  $db_templates Templates that have already been found on the db.
     * @return boolean
     */
    public static function template_is_eligible_for_product_archive_fallback_from_db($template_slug, $db_templates)
    {
    }
    /**
     * Gets the `archive-product` fallback template stored on the db for a given slug.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @param array  $db_templates Templates that have already been found on the db.
     * @return boolean|object
     */
    public static function get_fallback_template_from_db($template_slug, $db_templates)
    {
    }
    /**
     * Checks if we can fall back to the `archive-product` file template for a given slug in the current theme.
     *
     * `taxonomy-product_cat`, `taxonomy-product_tag`, `taxonomy-attribute` templates can
     *  generally use the `archive-product` as a fallback if there are no specific overrides.
     *
     * @param string $template_slug Slug to check for fallbacks.
     * @return boolean
     */
    public static function template_is_eligible_for_product_archive_fallback_from_theme($template_slug)
    {
    }
    /**
     * Sets the `has_theme_file` to `true` for templates with fallbacks
     *
     * There are cases (such as tags, categories and attributes) in which fallback templates
     * can be used; so, while *technically* the theme doesn't have a specific file
     * for them, it is important that we tell Gutenberg that we do, in fact,
     * have a theme file (i.e. the fallback one).
     *
     * **Note:** this function changes the array that has been passed.
     *
     * It returns `true` if anything was changed, `false` otherwise.
     *
     * @param array  $query_result Array of template objects.
     * @param object $template A specific template object which could have a fallback.
     *
     * @return boolean
     */
    public static function set_has_theme_file_if_fallback_is_available($query_result, $template)
    {
    }
    /**
     * Filter block templates by feature flag.
     *
     * @param WP_Block_Template[] $block_templates An array of block template objects.
     *
     * @return WP_Block_Template[] An array of block template objects.
     */
    public static function filter_block_templates_by_feature_flag($block_templates)
    {
    }
    /**
     * Removes templates that were added to a theme's block-templates directory, but already had a customised version saved in the database.
     *
     * @param \WP_Block_Template[]|\stdClass[] $templates List of templates to run the filter on.
     *
     * @return array List of templates with duplicates removed. The customised alternative is preferred over the theme default.
     */
    public static function remove_theme_templates_with_custom_alternative($templates)
    {
    }
    /**
     * Returns whether the blockified templates should be used or not.
     * First, we need to make sure WordPress version is higher than 6.1 (lowest that supports Products block).
     * Then, if the option is not stored on the db, we need to check if the current theme is a block one or not.
     *
     * @return boolean
     */
    public static function should_use_blockified_product_grid_templates()
    {
    }
    /**
     * Returns whether the passed `$template` has a title, and it's different from the slug.
     *
     * @param object $template The template object.
     * @return boolean
     */
    public static function template_has_title($template)
    {
    }
    /**
     * Returns whether the passed `$template` has the legacy template block.
     *
     * @param object $template The template object.
     * @return boolean
     */
    public static function template_has_legacy_template_block($template)
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
    public static function get_block_templates_from_db($slugs = array(), $template_type = 'wp_template')
    {
    }
    /**
     * Gets the template part by slug
     *
     * @param string $slug The template part slug.
     *
     * @return string The template part content.
     */
    public static function get_template_part($slug)
    {
    }
}