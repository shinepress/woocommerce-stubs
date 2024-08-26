<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * WCAdminActiveForProvider class
 *
 * @deprecated 8.8.0
 */
class WCAdminActiveForProvider extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\WCAdminActiveForProvider';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '8.8.0';
}