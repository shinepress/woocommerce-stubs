<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Install_JP_And_WCS_Plugins.
 *
 * @deprecated since 4.8.0, use InstallJPAndWCSPlugins
 */
class WC_Admin_Notes_Install_JP_And_WCS_Plugins extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Internal\Admin\Notes\InstallJPAndWCSPlugins';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '4.8.0';
}