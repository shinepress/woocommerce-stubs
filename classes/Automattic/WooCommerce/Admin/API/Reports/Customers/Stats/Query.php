<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Customers\Stats;

/**
 * API\Reports\Customers\Stats\Query
 *
 * @deprecated 9.3.0 Customers\Stats\Query class is deprecated, please use Reports\Customers\Query with a custom name, GenericQuery or \WC_Object_Query instead.
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    /**
     * Valid fields for Customers report.
     *
     * @deprecated 9.3.0 Customers\Stats\Query class is deprecated, please use Reports\Customers\Query with a custom name, GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get product data based on the current query vars.
     *
     * @deprecated 9.3.0 Customers\Stats\Query class is deprecated, please use Reports\Customers\Query with a custom name, GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    public function get_data()
    {
    }
}