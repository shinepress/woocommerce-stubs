<?php


/**
 * WC_Admin_Dashboard Class.
 */
class WC_Admin_Dashboard
{
    /**
     * Hook in tabs.
     */
    public function __construct()
    {
    }
    /**
     * Init dashboard widgets.
     */
    public function init()
    {
    }
    /**
     * Register the network order dashboard widget.
     */
    public function register_network_order_widget()
    {
    }
    /**
     * Check to see if we should display the widget.
     *
     * @return bool
     */
    private function should_display_widget()
    {
    }
    /**
     * Get top seller from DB.
     *
     * @return object
     */
    private function get_top_seller()
    {
    }
    /**
     * Get sales report data.
     *
     * @return object
     */
    private function get_sales_report_data()
    {
    }
    /**
     * Show status widget.
     */
    public function status_widget()
    {
    }
    /**
     * Show order data is status widget.
     */
    private function status_widget_order_rows()
    {
    }
    /**
     * Show stock data is status widget.
     *
     * @param bool $is_wc_admin_disabled if woocommerce admin is disabled.
     */
    private function status_widget_stock_rows($is_wc_admin_disabled)
    {
    }
    /**
     * Recent reviews widget.
     */
    public function recent_reviews()
    {
    }
    /**
     * Network orders widget.
     */
    public function network_orders()
    {
    }
    /**
     * Gets the sales performance data from the new WooAdmin store.
     *
     * @return stdClass|WP_Error|WP_REST_Response
     */
    private function get_wc_admin_performance_data()
    {
    }
    /**
     * Overwrites the original sparkline to use the new reports data if WooAdmin is enabled.
     * Prepares a sparkline to show sales in the last X days.
     *
     * @param  WC_Admin_Report $reports old class for getting reports.
     * @param  bool            $is_wc_admin_disabled If WC Admin is disabled or not.
     * @param  int             $id ID of the product to show. Blank to get all orders.
     * @param  string          $type Type of sparkline to get. Ignored if ID is not set.
     * @return string
     */
    private function sales_sparkline($reports, $is_wc_admin_disabled = \false, $id = '', $type = 'sales')
    {
    }
}