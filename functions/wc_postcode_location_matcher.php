<?php


/**
 * Used by shipping zones and taxes to compare a given $postcode to stored
 * postcodes to find matches for numerical ranges, and wildcards.
 *
 * @since 2.6.0
 * @param string $postcode           Postcode you want to match against stored postcodes.
 * @param array  $objects            Array of postcode objects from Database.
 * @param string $object_id_key      DB column name for the ID.
 * @param string $object_compare_key DB column name for the value.
 * @param string $country            Country from which this postcode belongs. Allows for formatting.
 * @return array Array of matching object ID and matching values.
 */
function wc_postcode_location_matcher($postcode, $objects, $object_id_key, $object_compare_key, $country = '')
{
}