<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Handles stored state setup for products.
 *
 * @deprecated 8.8.0
 */
class StoredStateSetupForProducts extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\RemoteSpecs\RuleProcessors\StoredStateSetupForProducts';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '8.8.0';
}