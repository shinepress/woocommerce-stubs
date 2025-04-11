<?php

namespace Automattic\WooCommerce\StoreApi\Schemas\V1;

/**
 * ProductBrandSchema class.
 */
class ProductBrandSchema extends \Automattic\WooCommerce\StoreApi\Schemas\V1\TermSchema
{
    /**
     * The schema item name.
     *
     * @var string
     */
    protected $title = 'product-brand';
    /**
     * The schema item identifier.
     *
     * @var string
     */
    const IDENTIFIER = 'product-brand';
    /**
     * Image attachment schema instance.
     *
     * @var ImageAttachmentSchema
     */
    protected $image_attachment_schema;
    /**
     * Constructor.
     *
     * @param ExtendSchema     $extend Rest Extending instance.
     * @param SchemaController $controller Schema Controller instance.
     */
    public function __construct(\Automattic\WooCommerce\StoreApi\Schemas\ExtendSchema $extend, \Automattic\WooCommerce\StoreApi\SchemaController $controller)
    {
    }
    /**
     * Term properties.
     *
     * @return array
     */
    public function get_properties()
    {
    }
    /**
     * Convert a term object into an object suitable for the response.
     *
     * @param \WP_Term $term Term object.
     * @return array
     */
    public function get_item_response($term)
    {
    }
    /**
     * Get total number of reviews for products of a brand.
     *
     * @param \WP_Term $term Term object.
     * @return int
     */
    protected function get_brand_review_count($term)
    {
    }
}