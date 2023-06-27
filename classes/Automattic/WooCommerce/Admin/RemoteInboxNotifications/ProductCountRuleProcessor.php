<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Rule processor that performs a comparison operation against the number of
 * products.
 */
class ProductCountRuleProcessor implements \Automattic\WooCommerce\Admin\RemoteInboxNotifications\RuleProcessorInterface
{
    /**
     * Constructor.
     *
     * @param object $product_query The product query.
     */
    public function __construct($product_query = null)
    {
    }
    /**
     * Performs a comparison operation against the number of products.
     *
     * @param object $rule         The specific rule being processed by this rule processor.
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