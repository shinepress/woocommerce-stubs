<?php


/**
 * Main function for returning products, uses the WC_Product_Factory class.
 *
 * This function should only be called after 'init' action is finished, as there might be taxonomies that are getting
 * registered during the init action.
 *
 * @since 2.2.0
 *
 * @param mixed $the_product Post object or post ID of the product.
 * @param array $deprecated Previously used to pass arguments to the factory, e.g. to force a type.
 * @return WC_Product|null|false
 */
function wc_get_product($the_product = \false, $deprecated = array())
{
}