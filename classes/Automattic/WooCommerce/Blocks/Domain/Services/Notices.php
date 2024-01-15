<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services;

/**
 * Service class for adding new-style Notices to WooCommerce core.
 *
 * @internal
 */
class Notices
{
    /**
     * Holds the Package instance
     *
     * @var Package
     */
    private $package;
    /**
     * Templates used for notices.
     *
     * @var array
     */
    private $notice_templates = array('notices/error.php', 'notices/notice.php', 'notices/success.php');
    /**
     * Constructor
     *
     * @param Package $package An instance of the package class.
     */
    public function __construct(\Automattic\WooCommerce\Blocks\Domain\Package $package)
    {
    }
    /**
     * Initialize notice hooks.
     */
    public function init()
    {
    }
    /**
     * Allow SVG icon in notices.
     *
     * @param array $allowed_tags Allowed tags.
     * @return array
     */
    public function add_kses_notice_allowed_tags($allowed_tags)
    {
    }
    /**
     * Replaces all notices with the new block based notices.
     *
     * @return void
     */
    public function enqueue_notice_styles()
    {
    }
}