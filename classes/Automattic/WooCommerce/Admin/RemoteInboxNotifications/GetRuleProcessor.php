<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Class encapsulating getting the processor for a given rule type.
 *
 * @deprecated 8.8.0
 */
class GetRuleProcessor extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\GetRuleProcessor';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '8.8.0';
}