<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\Accordion;

/**
 * AccordionHeader class.
 */
class AccordionHeader extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'accordion-header';
}