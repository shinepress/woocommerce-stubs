<?php

namespace Automattic\WooCommerce\Admin\API\Reports\Coupons;

/**
 * API\Reports\Coupons\Query
 *
 * @deprecated 9.3.0 Coupons\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
 */
class Query extends \Automattic\WooCommerce\Admin\API\Reports\Query
{
    /**
     * Valid fields for Products report.
     *
     * @deprecated 9.3.0 Coupons\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    protected function get_default_query_vars()
    {
    }
    /**
     * Get product data based on the current query vars.
     *
     * @deprecated 9.3.0 Coupons\Query class is deprecated, please use GenericQuery or \WC_Object_Query instead.
     *
     * @return array
     */
    public function get_data()
    {
    }
}