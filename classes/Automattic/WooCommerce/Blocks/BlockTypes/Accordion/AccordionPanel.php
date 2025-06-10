<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\Accordion;

/**
 * AccordionPanel class.
 */
class AccordionPanel extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    use \Automattic\WooCommerce\Blocks\BlockTypes\EnableBlockJsonAssetsTrait;
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'accordion-panel';
}