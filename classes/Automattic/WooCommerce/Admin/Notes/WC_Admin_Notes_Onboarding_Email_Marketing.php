<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Onboarding_Email_Marketing.
 *
 * @deprecated since 1.7.0, use OnboardingEmailMarketing
 */
class WC_Admin_Notes_Onboarding_Email_Marketing extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Admin\Notes\OnboardingEmailMarketing';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '1.7.0';
}