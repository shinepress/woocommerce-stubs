<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Rule processor that passes.
 */
class PassRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
{
    /**
     * Passes the rule.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
     * @param object $stored_state Stored state.
     *
     * @return bool Always true.
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