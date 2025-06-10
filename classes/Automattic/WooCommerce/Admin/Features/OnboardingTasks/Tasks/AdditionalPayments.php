<?php

namespace Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks;

/**
 * Payments Task
 */
class AdditionalPayments extends \Automattic\WooCommerce\Admin\Features\OnboardingTasks\Tasks\Payments
{
    /**
     * Used to cache is_complete() method result.
     *
     * @var null
     */
    private $is_complete_result = null;
    /**
     * Used to cache can_view() method result.
     *
     * @var null
     */
    private $can_view_result = null;
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
     * Action URL.
     *
     * @return string
     */
    public function get_action_url(): string
    {
    }
    /**
     * Check if there are any enabled non-PSP payment suggestions.
     *
     * @return bool True if there are enabled non-PSP payment suggestions, false otherwise.
     */
    private function has_enabled_non_psp_payment_suggestion(): bool
    {
    }
    /**
     * Get the list of payments providers as it is used on the Payments Settings page.
     *
     * @return array The list of payment providers.
     */
    private function get_payment_providers(): array
    {
    }
}