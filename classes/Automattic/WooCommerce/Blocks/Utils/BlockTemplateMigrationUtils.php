<?php

namespace Automattic\WooCommerce\Blocks\Utils;

/**
 * Utility methods used for migrating pages to block templates.
 * {@internal This class and its methods should only be used within the BlockTemplateController.php and is not intended for public use.}
 */
class BlockTemplateMigrationUtils
{
    /**
     * Check if a page has been migrated to a template.
     *
     * @param string $page_id Page ID.
     * @return boolean
     */
    public static function has_migrated_page($page_id)
    {
    }
    /**
     * Stores an option to indicate that a template has been migrated.
     *
     * @param string $page_id Page ID.
     * @param string $status Status of the migration.
     */
    public static function set_has_migrated_page($page_id, $status = 'success')
    {
    }
    /**
     * Migrates a page to a template if needed.
     *
     * @param string $template_slug Template slug.
     */
    public static function migrate_page($template_slug)
    {
    }
    /**
     * Prepare default page template.
     *
     * @param string $template_slug Template slug.
     * @return string
     */
    protected static function get_default_template($template_slug)
    {
    }
    /**
     * Create a custom template with given content.
     *
     * @param \WP_Block_Template|null $template Template object.
     * @param string                  $content Template content.
     * @return boolean Success.
     */
    protected static function create_custom_template($template, $content)
    {
    }
    /**
     * Returns the requested template part.
     *
     * @param string $part The part to return.
     * @return string
     */
    protected static function get_block_template_part($part)
    {
    }
}