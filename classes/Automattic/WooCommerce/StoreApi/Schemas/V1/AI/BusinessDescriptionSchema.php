<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1\AI;

/**
 * BusinessDescriptionSchema class.
 *
 * @internal
 */
class BusinessDescriptionSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'ai/business-description';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/business-description';
    /**
     * Business Description schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Get the Business Description response.
     *
     * @param array $item Item to get response for.
     *
     * @return array
     */
    public function get_item_response($item)
    {
    }
}