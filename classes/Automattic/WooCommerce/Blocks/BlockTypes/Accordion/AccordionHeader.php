<?php

namespace Automattic\WooCommerce\Blocks\BlockTypes\Accordion;

/**
 * AccordionHeader class.
 */
class AccordionHeader extends \Automattic\WooCommerce\Blocks\BlockTypes\AbstractBlock
{
    /**
     * Block name.
     *
     * @var string
     */
    protected $block_name = 'accordion-header';
    /**
     * Get the frontend style handle for this block type.
     *
     * @return string[]|null
     */
    protected function get_block_type_style()
    {
    }
    /**
     * Get the frontend script handle for this block type.
     *
     * @see $this->register_block_type()
     * @param string $key Data to get, or default to everything.
     * @return array|string|null
     */
    protected function get_block_type_script($key = null)
    {
    }
}