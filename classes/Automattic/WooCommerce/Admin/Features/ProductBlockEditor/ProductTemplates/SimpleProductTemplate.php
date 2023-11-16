<?php

namespace Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates;

/**
 * Simple Product Template.
 */
class SimpleProductTemplate extends \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\AbstractProductFormTemplate implements \Automattic\WooCommerce\Admin\Features\ProductBlockEditor\ProductTemplates\ProductFormTemplateInterface
{
    /**
     * The context name used to identify the editor.
     */
    const GROUP_IDS = array('GENERAL' => 'general', 'ORGANIZATION' => 'organization', 'PRICING' => 'pricing', 'INVENTORY' => 'inventory', 'SHIPPING' => 'shipping', 'VARIATIONS' => 'variations');
    /**
     * SimpleProductTemplate constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get the template ID.
     */
    public function get_id(): string
    {
    }
    /**
     * Get the template title.
     */
    public function get_title(): string
    {
    }
    /**
     * Get the template description.
     */
    public function get_description(): string
    {
    }
    /**
     * Adds the group blocks to the template.
     */
    private function add_group_blocks()
    {
    }
    /**
     * Adds the general group blocks to the template.
     */
    private function add_general_group_blocks()
    {
    }
    /**
     * Adds the organization group blocks to the template.
     */
    private function add_organization_group_blocks()
    {
    }
    /**
     * Adds the pricing group blocks to the template.
     */
    private function add_pricing_group_blocks()
    {
    }
    /**
     * Adds the inventory group blocks to the template.
     */
    private function add_inventory_group_blocks()
    {
    }
    /**
     * Adds the shipping group blocks to the template.
     */
    private function add_shipping_group_blocks()
    {
    }
    /**
     * Adds the variation group blocks to the template.
     */
    private function add_variation_group_blocks()
    {
    }
}