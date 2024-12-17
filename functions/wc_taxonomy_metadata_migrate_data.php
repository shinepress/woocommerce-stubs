<?php


/**
 * Migrate data from WC term meta to WP term meta.
 *
 * When the database is updated to support term meta, migrate WC term meta data across.
 * We do this when the new version is >= 34370, and the old version is < 34370 (34370 is when term meta table was added).
 *
 * @param string $wp_db_version The new $wp_db_version.
 * @param string $wp_current_db_version The old (current) $wp_db_version.
 */
function wc_taxonomy_metadata_migrate_data($wp_db_version, $wp_current_db_version)
{
}