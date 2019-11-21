<?php


/**
 * WC_Geolocation Class.
 */
class WC_Geolocation
{
    /**
     * GeoLite IPv4 DB.
     *
     * @deprecated 3.4.0
     */
    const GEOLITE_DB = 'http://geolite.maxmind.com/download/geoip/database/GeoLiteCountry/GeoIP.dat.gz';
    /**
     * GeoLite IPv6 DB.
     *
     * @deprecated 3.4.0
     */
    const GEOLITE_IPV6_DB = 'http://geolite.maxmind.com/download/geoip/database/GeoIPv6.dat.gz';
    /**
     * GeoLite2 DB.
     *
     * @since 3.4.0
     */
    const GEOLITE2_DB = 'http://geolite.maxmind.com/download/geoip/database/GeoLite2-Country.tar.gz';
    /**
     * API endpoints for looking up user IP address.
     *
     * @var array
     */
    private static $ip_lookup_apis = array('ipify' => 'http://api.ipify.org/', 'ipecho' => 'http://ipecho.net/plain', 'ident' => 'http://ident.me', 'whatismyipaddress' => 'http://bot.whatismyipaddress.com');
    /**
     * API endpoints for geolocating an IP address
     *
     * @var array
     */
    private static $geoip_apis = array('ipinfo.io' => 'https://ipinfo.io/%s/json', 'ip-api.com' => 'http://ip-api.com/json/%s');
    /**
     * Check if server supports MaxMind GeoLite2 Reader.
     *
     * @since 3.4.0
     * @return bool
     */
    private static function supports_geolite2()
    {
    }
    /**
     * Check if geolocation is enabled.
     *
     * @since 3.4.0
     * @param string $current_settings Current geolocation settings.
     * @return bool
     */
    private static function is_geolocation_enabled($current_settings)
    {
    }
    /**
     * Prevent geolocation via MaxMind when using legacy versions of php.
     *
     * @since 3.4.0
     * @param string $default_customer_address current value.
     * @return string
     */
    public static function disable_geolocation_on_legacy_php($default_customer_address)
    {
    }
    /**
     * Hook in geolocation functionality.
     */
    public static function init()
    {
    }
    /**
     * Maybe trigger a DB update for the first time.
     *
     * @param  string $new_value New value.
     * @param  string $old_value Old value.
     * @return string
     */
    public static function maybe_update_database($new_value, $old_value)
    {
    }
    /**
     * Get current user IP Address.
     *
     * @return string
     */
    public static function get_ip_address()
    {
    }
    /**
     * Get user IP Address using an external service.
     * This can be used as a fallback for users on localhost where
     * get_ip_address() will be a local IP and non-geolocatable.
     *
     * @return string
     */
    public static function get_external_ip_address()
    {
    }
    /**
     * Geolocate an IP address.
     *
     * @param  string $ip_address   IP Address.
     * @param  bool   $fallback     If true, fallbacks to alternative IP detection (can be slower).
     * @param  bool   $api_fallback If true, uses geolocation APIs if the database file doesn't exist (can be slower).
     * @return array
     */
    public static function geolocate_ip($ip_address = '', $fallback = \false, $api_fallback = \true)
    {
    }
    /**
     * Path to our local db.
     *
     * @param  string $deprecated Deprecated since 3.4.0.
     * @return string
     */
    public static function get_local_database_path($deprecated = '2')
    {
    }
    /**
     * Update geoip database.
     *
     * Extract files with PharData. Tool built into PHP since 5.3.
     */
    public static function update_database()
    {
    }
    /**
     * Use MAXMIND GeoLite database to geolocation the user.
     *
     * @param  string $ip_address IP address.
     * @param  string $database   Database path.
     * @return string
     */
    private static function geolocate_via_db($ip_address, $database)
    {
    }
    /**
     * Use APIs to Geolocate the user.
     *
     * Geolocation APIs can be added through the use of the woocommerce_geolocation_geoip_apis filter.
     * Provide a name=>value pair for service-slug=>endpoint.
     *
     * If APIs are defined, one will be chosen at random to fulfil the request. After completing, the result
     * will be cached in a transient.
     *
     * @param  string $ip_address IP address.
     * @return string
     */
    private static function geolocate_via_api($ip_address)
    {
    }
}