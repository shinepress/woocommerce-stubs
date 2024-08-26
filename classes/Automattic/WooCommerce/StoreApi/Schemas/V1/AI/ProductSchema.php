<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1\AI;

/**
 * ProductSchema class.
 *
 * @internal
 */
class ProductSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'ai/product';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/product';
    /**
     * Patterns schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Get the Product response.
     *
     * @param array $item Item to get response for.
     *
     * @return array
     */
    public function get_item_response($item)
    {
    }
}