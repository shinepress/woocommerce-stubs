<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes;

/**
 * PriceFilter class.
 */
class PriceFilter extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'price-filter';
    const MIN_PRICE_QUERY_VAR = 'min_price';
    const MAX_PRICE_QUERY_VAR = 'max_price';
}