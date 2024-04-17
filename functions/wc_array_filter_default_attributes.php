<?php


/**
 * Callback for array filter to get default attributes.  Will allow for '0' string values, but regard all other
 * class PHP FALSE equivalents normally.
 *
 * @since 3.1.0
 * @param mixed $attribute Attribute being considered for exclusion from parent array.
 * @return bool
 */
function wc_array_filter_default_attributes($attribute)
{
}