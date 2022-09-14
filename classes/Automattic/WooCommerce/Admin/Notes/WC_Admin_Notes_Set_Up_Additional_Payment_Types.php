<?php

namespace Automattic\WooCommerce\Admin\Notes;

/**
 * WC_Admin_Notes_Set_Up_Additional_Payment_Types.
 *
 * @deprecated since 1.7.0, use SetUpAdditionalPaymentTypes
 */
class WC_Admin_Notes_Set_Up_Additional_Payment_Types extends \Automattic\WooCommerce\Admin\DeprecatedClassFacade
{
    /**
     * The name of the non-deprecated class that this facade covers.
     *
     * @var string
     */
    protected static $facade_over_classname = 'Automattic\WooCommerce\Internal\Admin\Notes\SetUpAdditionalPaymentTypes';
    /**
     * The version that this class was deprecated in.
     *
     * @var string
     */
    protected static $deprecated_in_version = '1.7.0';
}