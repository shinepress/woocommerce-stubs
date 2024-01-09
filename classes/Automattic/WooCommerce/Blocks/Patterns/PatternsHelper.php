<?php

namespace Automattic\WooCommerce\Blocks\Patterns;

/**
 * Pattern Images Helper class.
 */
class PatternsHelper
{
    /**
     * Returns the image for the given pattern.
     *
     * @param array  $images The array of images.
     * @param int    $index The index of the image to return.
     * @param string $default_image The default image to return.
     *
     * @return string The image.
     */
    public static function get_image_url(array $images, int $index, string $default_image): string
    {
    }
    /**
     * Returns the post that has the generated data by the AI for the patterns.
     *
     * @return \WP_Post|null
     */
    public static function get_patterns_ai_data_post()
    {
    }
    /**
     * Delete the post that has the generated data by the AI for the patterns.
     *
     * @return \WP_Post|null
     */
    public static function delete_patterns_ai_data_post()
    {
    }
    /**
     * Upsert the patterns AI data.
     *
     * @param array $patterns_dictionary The patterns dictionary.
     *
     * @return WP_Error|null
     */
    public static function upsert_patterns_ai_data_post($patterns_dictionary)
    {
    }
    /**
     * Get the Patterns Dictionary.
     *
     * @param string|null $pattern_slug The pattern slug.
     *
     * @return array|WP_Error Returns pattern dictionary or WP_Error on failure.
     */
    public static function get_patterns_dictionary($pattern_slug = null)
    {
    }
    /**
     * Searches for a pattern by slug in a given dictionary.
     *
     * @param array  $patterns_dictionary The patterns' dictionary.
     * @param string $slug The slug to search for.
     *
     * @return array|null Returns the pattern if found, otherwise null.
     */
    private static function find_pattern_by_slug($patterns_dictionary, $slug)
    {
    }
}