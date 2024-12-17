<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Payments Task
 */
class Payments extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
{
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;
    /**
     * ID.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Title.
     *
     * @return string
     */
    public function get_title()
    {
    }
    /**
     * Content.
     *
     * @return string
     */
    public function get_content()
    {
    }
    /**
     * Time.
     *
     * @return string
     */
    public function get_time()
    {
    }
    /**
     * Task completion.
     *
     * @return bool
     */
    public function is_complete()
    {
    }
    /**
     * Task visibility.
     *
     * @return bool
     */
    public function can_view()
    {
    }
    /**
     * Check if the store has any enabled gateways.
     *
     * @return bool
     */
    public static function has_gateways()
    {
    }
}