<?php


/**
 * Change get terms defaults for attributes to order by the sorting setting, or default to menu_order for sortable taxonomies.
 *
 * @since 3.6.0 Sorting options are now set as the default automatically, so you no longer have to request to orderby menu_order.
 *
 * @param array $defaults   An array of default get_terms() arguments.
 * @param array $taxonomies An array of taxonomies.
 * @return array
 */
function wc_change_get_terms_defaults($defaults, $taxonomies)
{
}