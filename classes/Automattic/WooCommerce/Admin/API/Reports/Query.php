<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Admin\API\Reports\Query
 */
abstract class Query extends \WC_Object_Query
{
    /**
     * Get report data matching the current query vars.
     *
     * @return array|object of WC_Product objects
     */
    public function get_data()
    {
    }
}