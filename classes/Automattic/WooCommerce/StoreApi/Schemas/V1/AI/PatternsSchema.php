<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1\AI;

/**
 * PatternsSchema class.
 *
 * @internal
 */
class PatternsSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'ai/patterns';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/patterns';
    /**
     * Patterns schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Get the Patterns response.
     *
     * @param array $item Item to get response for.
     *
     * @return array
     */
    public function get_item_response($item)
    {
    }
}