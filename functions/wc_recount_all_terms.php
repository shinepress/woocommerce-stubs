<?php


/**
 * Recounts all terms for product categories and product tags.
 *
 * @since 5.2
 *
 * @param bool $include_callback True to update the standard term counts in addition to the product-specific counts,
 *                               which will cause a lot more queries to run.
 *
 * @return void
 */
function wc_recount_all_terms(bool $include_callback = \true)
{
}