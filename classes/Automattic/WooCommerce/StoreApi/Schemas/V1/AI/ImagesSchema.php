<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1\AI;

/**
 * ImagesSchema class.
 *
 * @internal
 */
class ImagesSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\AbstractSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'ai/images';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'ai/images';
    /**
     * Images schema properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Get the Images response.
     *
     * @param array $item Item to get response for.
     *
     * @return array
     */
    public function get_item_response($item)
    {
    }
}