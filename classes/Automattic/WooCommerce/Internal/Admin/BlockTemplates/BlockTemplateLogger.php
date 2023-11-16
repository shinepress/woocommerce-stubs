<?php

namespace Automattic\WooCommerce\Internal\Admin\BlockTemplates;

/**
 * Logger for block template modifications.
 */
class BlockTemplateLogger
{
    /**
     * Singleton instance.
     *
     * @var BlockTemplateLogger
     */
    protected static $instance = null;
    /**
     * Logger instance.
     *
     * @var \WC_Logger
     */
    protected $logger = null;
    /**
     * Get the singleton instance.
     */
    public static function get_instance(): \Automattic\WooCommerce\Internal\Admin\BlockTemplates\BlockTemplateLogger
    {
    }
    /**
     * Constructor.
     */
    protected function __construct()
    {
    }
    /**
     * Log an informational message.
     *
     * @param string $message Message to log.
     * @param array  $info    Additional info to log.
     */
    public function info(string $message, array $info = [])
    {
    }
    /**
     * Log a warning message.
     *
     * @param string $message Message to log.
     * @param array  $info    Additional info to log.
     */
    public function warning(string $message, array $info = [])
    {
    }
    /**
     * Log an error message.
     *
     * @param string $message Message to log.
     * @param array  $info    Additional info to log.
     */
    public function error(string $message, array $info = [])
    {
    }
    /**
     * Format a message for logging.
     *
     * @param string $message Message to log.
     * @param array  $info    Additional info to log.
     */
    private function format_message(string $message, array $info = []): string
    {
    }
    /**
     * Format info for logging.
     *
     * @param array $info Info to log.
     */
    private function format_info(array $info): array
    {
    }
    /**
     * Format an exception for logging.
     *
     * @param \Exception $exception Exception to format.
     */
    private function format_exception(\Exception $exception): array
    {
    }
    /**
     * Format an exception trace for logging.
     *
     * @param array $trace Exception trace to format.
     */
    private function format_exception_trace(array $trace): array
    {
    }
    /**
     * Format a block template for logging.
     *
     * @param BlockTemplateInterface $template Template to format.
     */
    private function format_template(\Automattic\WooCommerce\Admin\BlockTemplates\BlockTemplateInterface $template): string
    {
    }
    /**
     * Format a block for logging.
     *
     * @param BlockInterface $block Block to format.
     */
    private function format_block(\Automattic\WooCommerce\Admin\BlockTemplates\BlockInterface $block): string
    {
    }
}