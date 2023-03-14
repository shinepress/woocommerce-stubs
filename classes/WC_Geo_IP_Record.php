<?php


/**
 * Geo IP Record class.
 */
class WC_Geo_IP_Record
{
    /**
     * Country code.
     *
     * @var string
     */
    public $country_code;
    /**
     * 3 letters country code.
     *
     * @var string
     */
    public $country_code3;
    /**
     * Country name.
     *
     * @var string
     */
    public $country_name;
    /**
     * Region.
     *
     * @var string
     */
    public $region;
    /**
     * City.
     *
     * @var string
     */
    public $city;
    /**
     * Postal code.
     *
     * @var string
     */
    public $postal_code;
    /**
     * Latitude
     *
     * @var int
     */
    public $latitude;
    /**
     * Longitude.
     *
     * @var int
     */
    public $longitude;
    /**
     * Area code.
     *
     * @var int
     */
    public $area_code;
    /**
     * DMA Code.
     *
     * Metro and DMA code are the same.
     * Use metro code instead.
     *
     * @var float
     */
    public $dma_code;
    /**
     * Metro code.
     *
     * @var float
     */
    public $metro_code;
    /**
     * Continent code.
     *
     * @var string
     */
    public $continent_code;
}