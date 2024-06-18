<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * WooCommercePayments Task
 */
class WooCommercePayments extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Task
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
     * Badge.
     *
     * @return string
     */
    public function get_badge()
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
     * Action label.
     *
     * @return string
     */
    public function get_action_label()
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
     * Check if the WooPayments plugin was requested during onboarding.
     *
     * @return bool
     */
    public static function is_requested()
    {
    }
    /**
     * Check if the WooPayments plugin is installed.
     *
     * @return bool
     */
    public static function is_installed()
    {
    }
    /**
     * Check if the WooPayments plugin is active.
     *
     * @return bool
     */
    public static function is_wcpay_active()
    {
    }
    /**
     * Check if WooPayments is connected.
     *
     * @return bool
     */
    public static function is_connected()
    {
    }
    /**
     * Check if WooPayments needs setup.
     * Errored data or payments not enabled.
     *
     * @return bool
     */
    public static function is_account_partially_onboarded()
    {
    }
    /**
     * Check if the store is in a supported country.
     *
     * @return bool
     */
    public static function is_supported()
    {
    }
}