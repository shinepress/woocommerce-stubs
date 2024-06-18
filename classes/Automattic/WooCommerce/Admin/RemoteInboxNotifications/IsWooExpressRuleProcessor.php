<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Rule processor that passes (or fails) when the site is on a Woo Express plan.
 * You may optionally pass a plan name to target a specific Woo Express plan.
 *
 * @deprecated 8.8.0
 */
class IsWooExpressRuleProcessor extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\IsWooExpressRuleProcessor';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '8.8.0';
}