<?php

namespace Automattic\WooCommerce\Admin;

/**
 * Class WCAdminHelper
 */
class WCAdminHelper
{
    /**
     * WC Admin timestamp option name.
     */
    const WC_ADMIN_TIMESTAMP_OPTION = 'woocommerce_admin_install_timestamp';
    const WC_ADMIN_STORE_AGE_RANGES = array('week-1' => array('start' => 0, 'end' => WEEK_IN_SECONDS), 'week-1-4' => array('start' => WEEK_IN_SECONDS, 'end' => WEEK_IN_SECONDS * 4), 'month-1-3' => array('start' => MONTH_IN_SECONDS, 'end' => MONTH_IN_SECONDS * 3), 'month-3-6' => array('start' => MONTH_IN_SECONDS * 3, 'end' => MONTH_IN_SECONDS * 6), 'month-6+' => array('start' => MONTH_IN_SECONDS * 6));
    /**
     * Get the number of seconds that the store has been active.
     *
     * @return number Number of seconds.
     */
    public static function get_wcadmin_active_for_in_seconds()
    {
    }
    /**
     * Test how long WooCommerce Admin has been active.
     *
     * @param int $seconds Time in seconds to check.
     * @return bool Whether or not WooCommerce admin has been active for $seconds.
     */
    public static function is_wc_admin_active_for($seconds)
    {
    }
    /**
     * Test if WooCommerce Admin has been active within a pre-defined range.
     *
     * @param string $range range available in WC_ADMIN_STORE_AGE_RANGES.
     * @param int    $custom_start custom start in range.
     * @throws \InvalidArgumentException Throws exception when invalid $range is passed in.
     * @return bool Whether or not WooCommerce admin has been active within the range.
     */
    public static function is_wc_admin_active_in_date_range($range, $custom_start = null)
    {
    }
}