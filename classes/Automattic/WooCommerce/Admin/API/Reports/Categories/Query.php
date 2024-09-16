<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Categories;

/**
 * API\Reports\Categories\Query
 *
 * @deprecated 9.3.0 Categories\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    const REPORT_NAME = 'report-categories';
    /**
     * Valid fields for Categories report.
     *
     * @deprecated 9.3.0 Categories\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get categories data based on the current query vars.
     *
     * @deprecated 9.3.0 Categories\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    public function get_data()
    {
    }
}