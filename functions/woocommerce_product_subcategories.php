<?php


/**
 * This is a legacy function which used to check if we needed to display subcats and then output them. It was called by templates.
 *
 * From 3.3 onwards this is all handled via hooks and the woocommerce_maybe_show_product_subcategories function.
 *
 * Since some templates have not updated compatibility, to avoid showing incorrect categories this function has been deprecated and will
 * return nothing. Replace usage with woocommerce_output_product_categories to render the category list manually.
 *
 * This is a legacy function which also checks if things should display.
 * Themes no longer need to call these functions. It's all done via hooks.
 *
 * @deprecated 3.3.1 @todo Add a notice in a future version.
 * @param array $args Arguments.
 * @return null|boolean
 */
function woocommerce_product_subcategories($args = array())
{
}