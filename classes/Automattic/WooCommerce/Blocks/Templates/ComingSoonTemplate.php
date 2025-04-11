<?php

namespace Automattic\WooCommerce\Blocks\Templates;

/**
 * ComingSoonTemplate class.
 *
 * @internal
 */
class ComingSoonTemplate extends \Automattic\WooCommerce\Blocks\Templates\AbstractPageTemplate
{
    /**
     * The slug of the template.
     *
     * @var string
     */
    const SLUG = 'coming-soon';
    /**
     * Returns the title of the template.
     *
     * @return string
     */
    public function get_template_title()
    {
    }
    /**
     * Returns the description of the template.
     *
     * @return string
     */
    public function get_template_description()
    {
    }
    /**
     * Returns the page object assigned to this template/page.
     *
     * @return \WP_Post|null Post object or null.
     */
    protected function get_placeholder_page()
    {
    }
    /**
     * True when viewing the coming soon page.
     *
     * @return boolean
     */
    protected function is_active_template()
    {
    }
    /**
     * Returns the font family for the body and heading.
     *
     * When the current theme is not an FSE theme, we use the default fonts.
     * When the current theme is an FSE theme, we use the fonts from the theme.json file if available except for the 'twentytwentyfour' theme.
     *
     * @return array
     */
    public static function get_font_families()
    {
    }
}