<?php

namespace Automattic\WooCommerce\Blocks;

/**
 * Registers patterns under the `./patterns/` directory and updates their content.
 * Each pattern is defined as a PHP file and defines its metadata using plugin-style headers.
 * The minimum required definition is:
 *
 *     /**
 *      * Title: My Pattern
 *      * Slug: my-theme/my-pattern
 *      *
 *
 * The output of the PHP source corresponds to the content of the pattern, e.g.:
 *
 *     <main><p><?php echo "Hello"; ?></p></main>
 *
 * Other settable fields include:
 *
 *   - Description
 *   - Viewport Width
 *   - Categories       (comma-separated values)
 *   - Keywords         (comma-separated values)
 *   - Block Types      (comma-separated values)
 *   - Inserter         (yes/no)
 *
 * @internal
 */
class BlockPatterns
{
    const SLUG_REGEX = '/^[A-z0-9\/_-]+$/';
    const COMMA_SEPARATED_REGEX = '/[\s,]+/';
    const PATTERNS_AI_DATA_POST_TYPE = 'patterns_ai_data';
    /**
     * Path to the patterns directory.
     *
     * @var string $patterns_path
     */
    private $patterns_path;
    /**
     * Constructor for class
     *
     * @param Package $package An instance of Package.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Make sure the 'woocommerce_blocks_allow_ai_connection' option is set to true if the site is connected to AI.
     *
     * @param string $option The option name.
     * @param string $value The option value.
     *
     * @return bool
     */
    public function update_ai_connection_allowed_option($option, $value): bool
    {
    }
    /**
     * Registers the block patterns and categories under `./patterns/`.
     */
    public function register_block_patterns()
    {
    }
    /**
     * Update the patterns content when the store description is changed.
     *
     * @param string $option The option name.
     * @param string $value The option value.
     */
    public function schedule_on_option_update($option, $value)
    {
    }
    /**
     * Update the patterns content when the WooCommerce Blocks plugin is updated.
     *
     * @param \WP_Upgrader $upgrader_object  WP_Upgrader instance.
     * @param array        $options  Array of bulk item update data.
     */
    public function schedule_on_plugin_update($upgrader_object, $options)
    {
    }
    /**
     * Update the patterns content when the store description is changed.
     *
     * @param string $business_description The business description.
     */
    public function schedule_patterns_content_update($business_description)
    {
    }
    /**
     * Update the patterns content.
     *
     * @param string $value The new value saved for the add_option_woo_ai_describe_store_description option.
     *
     * @return bool|string|\WP_Error
     */
    public function update_patterns_content($value)
    {
    }
    /**
     * Filter the patterns dictionary to get the pattern data corresponding to the pattern slug.
     *
     * @param array  $dictionary The patterns dictionary.
     * @param string $slug The pattern slug.
     *
     * @return array|null
     */
    private function get_pattern_from_dictionary($dictionary, $slug)
    {
    }
}