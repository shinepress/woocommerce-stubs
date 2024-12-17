<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Downloads;

/**
 * API\Reports\Downloads\Query
 *
 * @deprecated 9.3.0 Downloads\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    /**
     * Valid fields for downloads report.
     *
     * @deprecated 9.3.0 Downloads\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get downloads data based on the current query vars.
     *
     * @deprecated 9.3.0 Downloads\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    public function get_data()
    {
    }
}