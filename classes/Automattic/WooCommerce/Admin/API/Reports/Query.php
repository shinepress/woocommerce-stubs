<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Admin\API\Reports\Query
 *
 * @deprecated 9.3.0 Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
 */
abstract class Query extends \WC_Object_Query
{
    /**
     * Get report data matching the current query vars.
     *
     * @deprecated 9.3.0 Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array|object of WC_Product objects
     */
    public function get_data()
    {
    }
}