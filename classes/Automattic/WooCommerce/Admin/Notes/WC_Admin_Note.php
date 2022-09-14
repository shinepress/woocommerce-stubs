<?php

namespace Automattic\WooCommerce\Admin\Notes;

// phpcs:disable Generic.Files.OneObjectStructurePerFile.MultipleFound
/**
 * WC_Admin_Note.
 *
 * @deprecated since 1.7.0, use Note
 */
class WC_Admin_Note extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    // These constants must be redeclared as to not break plugins that use them.
    const E_WC_ADMIN_NOTE_ERROR = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_ERROR;
    const E_WC_ADMIN_NOTE_WARNING = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_WARNING;
    const E_WC_ADMIN_NOTE_UPDATE = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_UPDATE;
    const E_WC_ADMIN_NOTE_INFORMATIONAL = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_INFORMATIONAL;
    const E_WC_ADMIN_NOTE_MARKETING = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_MARKETING;
    const E_WC_ADMIN_NOTE_SURVEY = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_SURVEY;
    const E_WC_ADMIN_NOTE_PENDING = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_PENDING;
    const E_WC_ADMIN_NOTE_UNACTIONED = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_UNACTIONED;
    const E_WC_ADMIN_NOTE_ACTIONED = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_ACTIONED;
    const E_WC_ADMIN_NOTE_SNOOZED = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_SNOOZED;
    const E_WC_ADMIN_NOTE_EMAIL = \Automattic\WooCommerce\Admin\Notes\Note::E_WC_ADMIN_NOTE_EMAIL;
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\Notes\Note';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '1.7.0';
    /**
     * Note constructor. Loads note data.
     *
     * @param mixed $data Note data, object, or ID.
     */
    public function __construct($data = '')
    {
    }
}