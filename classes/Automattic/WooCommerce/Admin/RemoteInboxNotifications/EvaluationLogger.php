<?php

namespace Automattic\WooCommerce\Admin\RemoteInboxNotifications;

/**
 * Class EvaluationLogger
 *
 * @package Automattic\WooCommerce\Admin\RemoteInboxNotifications
 */
class EvaluationLogger
{
    /**
     * Slug of the spec.
     *
     * @var string
     */
    private $slug;
    /**
     * Results of rules in the given spec.
     *
     * @var array
     */
    private $results = array();
    /**
     * Logger class to use.
     *
     * @var WC_Logger_Interface|null
     */
    private $logger;
    /**
     * Logger source.
     *
     * @var string logger source.
     */
    private $source = '';
    /**
     * EvaluationLogger constructor.
     *
     * @param string               $slug Slug of a spec that is being evaluated.
     * @param null                 $source Logger source.
     * @param \WC_Logger_Interface $logger Logger class to use.
     */
    public function __construct($slug, $source = null, \WC_Logger_Interface $logger = null)
    {
    }
    /**
     * Add evaluation result of a rule.
     *
     * @param string  $rule_type name of the rule being tested.
     * @param boolean $result result of a given rule.
     */
    public function add_result($rule_type, $result)
    {
    }
    /**
     * Log the results.
     */
    public function log()
    {
    }
}