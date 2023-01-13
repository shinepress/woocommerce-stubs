<?php

namespace Automattic\WooCommerce\Admin;

/**
 * ReportsSync Class.
 */
class ReportsSync
{
    /**
     * Hook in sync methods.
     */
    public static function init()
    {
    }
    /**
     * Get classes for syncing data.
     *
     * @return array
     * @throws \Exception Throws exception when invalid data is found.
     */
    public static function get_schedulers()
    {
    }
    /**
     * Returns true if an import is in progress.
     *
     * @return bool
     */
    public static function is_importing()
    {
    }
    /**
     * Regenerate data for reports.
     *
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip exisiting records.
     * @return string
     */
    public static function regenerate_report_data($days, $skip_existing)
    {
    }
    /**
     * Update the import stat totals and counts.
     *
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip exisiting records.
     */
    public static function reset_import_stats($days, $skip_existing)
    {
    }
    /**
     * Get stats for current import.
     *
     * @return array
     */
    public static function get_import_stats()
    {
    }
    /**
     * Get the import totals for all syncs.
     *
     * @param int|bool $days Number of days to import.
     * @param bool     $skip_existing Skip exisiting records.
     * @return array
     */
    public static function get_import_totals($days, $skip_existing)
    {
    }
    /**
     * Clears all queued actions.
     */
    public static function clear_queued_actions()
    {
    }
    /**
     * Delete all data for reports.
     *
     * @return string
     */
    public static function delete_report_data()
    {
    }
    /**
     * Clear the count cache when products are added or updated, or when
     * the no/low stock options are changed.
     *
     * @param int $id Post/product ID.
     */
    public static function clear_stock_count_cache($id)
    {
    }
}