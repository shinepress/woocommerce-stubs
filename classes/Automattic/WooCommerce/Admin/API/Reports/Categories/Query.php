<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Categories;

/**
 * API\Reports\Query
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    const REPORT_NAME = 'report-categories';
    /**
     * Valid fields for Categories report.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get categories data based on the current query vars.
     *
     * @return array
     */
    public function get_data()
    {
    }
}