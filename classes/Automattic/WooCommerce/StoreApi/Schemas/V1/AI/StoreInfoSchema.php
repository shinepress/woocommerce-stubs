<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1\AI;

/**
 * StoreInfoSchema class.
 *
 * @internal
 */
class StoreInfoSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'ai/store-info';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/store-info';
    /**
     * Store Info schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
}