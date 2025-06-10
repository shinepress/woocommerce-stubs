<?php

namespace Automattic\WooCommerce\Blocks\Domain\Services\CheckoutFieldsSchema;

/**
 * Service class validating checkout field schema.
 */
class Validation
{
    /**
     * Meta schema.
     *
     * @var string
     */
    private static $meta_schema_json = '';
    /**
     * Get the field schema with context.
     *
     * @param string $field_id The field ID.
     * @param array  $field_schema The field schema.
     * @param string $context The context.
     * @return array
     */
    public static function get_field_schema_with_context($field_id, $field_schema, $context)
    {
    }
    /**
     * Validate the field rules.
     *
     * @param DocumentObject $document_object The document object to validate.
     * @param array          $rules The rules to validate against.
     * @return bool|WP_Error
     */
    public static function validate_document_object(\Automattic\WooCommerce\Blocks\Domain\Services\CheckoutFieldsSchema\DocumentObject $document_object, $rules)
    {
    }
    /**
     * Check if the fields have defined schema.
     *
     * @param array $fields The fields.
     * @return bool
     */
    public static function has_field_schema($fields)
    {
    }
    /**
     * Validate meta schema for field rules.
     *
     * @param mixed $rules The rules to validate.
     * @return bool|WP_Error True if the field options are valid, a WP_Error otherwise.
     */
    public static function is_valid_schema($rules)
    {
    }
}