<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Rule processor that passes when a store's payments volume exceeds a provided amount.
 */
class TotalPaymentsVolumeProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
{
    /**
     * Compare against the store's total payments volume.
     *
     * @param object $rule         The rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool The result of the operation.
     */
    public function process($rule, $stored_state)
    {
    }
    /**
     * Validates the rule.
     *
     * @param object $rule The rule to validate.
     *
     * @return bool Pass/fail.
     */
    public function validate($rule)
    {
    }
}