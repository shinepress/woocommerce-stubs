<?php

namespace Automattic\WooCommerce\Admin\API\Reports;

/**
 * Generic base for all Stats controllers.
 *
 * @internal
 * @extends GenericController
 */
abstract class GenericStatsController extends \Automattic\WooCommerce\Admin\API\Reports\GenericController
{
    /**
     * Get the query params for collections.
     * Adds intervals to the generic list.
     *
     * @return array
     */
    public function get_collection_params()
    {
    }
    /**
     * Get the Report's item properties schema.
     * Will be used by `get_item_schema` as `totals` and `subtotals`.
     *
     * @return array
     */
    abstract protected function get_item_properties_schema();
    /**
     * Get the Report's schema, conforming to JSON Schema.
     *
     * Please note, it does not call add_additional_fields_schema,
     * as you may want to update the `title` first.
     *
     * @return array
     */
    public function get_item_schema()
    {
    }
}