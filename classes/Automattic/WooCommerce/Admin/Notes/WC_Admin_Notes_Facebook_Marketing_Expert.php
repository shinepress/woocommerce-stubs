<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Facebook_Marketing_Expert.
 *
 * @deprecated since 1.7.0, use FacebookMarketingExpert
 */
class WC_Admin_Notes_Facebook_Marketing_Expert extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\Notes\FacebookMarketingExpert';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '1.7.0';
}