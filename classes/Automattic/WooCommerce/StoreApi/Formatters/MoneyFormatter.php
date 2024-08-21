<?php

namespace Automattic\WooCommerce\StoreApi\Formatters;

/**
 * Money Formatter.
 *
 * Formats monetary values using store settings.
 */
class MoneyFormatter implements \Automattic\WooCommerce\StoreApi\Formatters\FormatterInterface
{
    /**
     * Format a given value and return the result.
     *
     * @param mixed $value Value to format.
     * @param array $options Options that influence the formatting.
     * @return mixed
     */
    public function format($value, array $options = [])
    {
    }
}