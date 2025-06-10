<?php


/**
 * WC_Helper_Sanitization Class
 *
 * Provides sanitization functions for admin content.
 */
class WC_Helper_Sanitization
{
    /**
     * Sanitize CSS markup from API responses for safe rendering in admin pages.
     *
     * @param string $css The raw CSS to sanitize.
     *
     * @return string Sanitized CSS safe for inclusion in style blocks.
     */
    public static function sanitize_css($css)
    {
    }
    /**
     * Sanitize HTML content allowing a subset of SVG elements.
     *
     * @param string $html The HTML to sanitize.
     *
     * @return string Sanitized HTML with SVG support.
     */
    public static function sanitize_html($html)
    {
    }
    /**
     * Sanitize SVG content before processing with wp_kses.
     *
     * @param string $content The SVG content to sanitize.
     * @return string Sanitized SVG content.
     */
    public static function wc_pre_sanitize_svg($content)
    {
    }
    /**
     * Add limited SVG support to wp_kses_post with XSS protection.
     *
     * @return array Array of allowed SVG tags and their attributes.
     */
    public static function wc_kses_safe_svg_tags()
    {
    }
}