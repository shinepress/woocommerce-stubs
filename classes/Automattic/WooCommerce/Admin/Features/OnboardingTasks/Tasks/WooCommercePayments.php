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
     * Additional data.
     *
     * @return mixed
     */
    public function get_additional_data()
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
     * Check if the store is in a WooPayments supported country.
     *
     * @return bool
     */
    public static function is_supported()
    {
    }
    /**
     * Get the WooPayments gateway.
     *
     * @return \WC_Payments|null
     */
    private static function get_gateway()
    {
    }
    /**
     * Check if the store has any enabled ecommerce gateways, other than WooPayments.
     *
     * We exclude offline payment methods from this check.
     *
     * @return bool
     */
    public static function has_other_ecommerce_gateways(): bool
    {
    }
}