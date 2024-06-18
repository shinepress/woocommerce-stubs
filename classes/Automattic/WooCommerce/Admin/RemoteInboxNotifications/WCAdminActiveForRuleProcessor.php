<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Rule processor for publishing if wc-admin has been active for at least the
 * given number of seconds.
 *
 * @deprecated 8.8.0
 */
class WCAdminActiveForRuleProcessor extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\WCAdminActiveForRuleProcessor';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '8.8.0';
}