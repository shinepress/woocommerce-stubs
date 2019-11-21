<?php

namespace MaxMind\Db;

/**
 * Instances of this class provide a reader for the MaxMind DB format. IP
 * addresses can be looked up using the <code>get</code> method.
 */
class Reader
{
    private static $DATA_SECTION_SEPARATOR_SIZE = 16;
    private static $METADATA_START_MARKER = "\xab\xcd\xefMaxMind.com";
    private static $METADATA_START_MARKER_LENGTH = 14;
    private static $METADATA_MAX_SIZE = 131072;
    // 128 * 1024 = 128KB
    private $decoder;
    private $fileHandle;
    private $fileSize;
    private $ipV4Start;
    private $metadata;
    /**
     * Constructs a Reader for the MaxMind DB format. The file passed to it must
     * be a valid MaxMind DB file such as a GeoIp2 database file.
     *
     * @param string $database
     *                         the MaxMind DB file to use
     *
     * @throws \InvalidArgumentException                   for invalid database path or unknown arguments
     * @throws \MaxMind\Db\Reader\InvalidDatabaseException
     *                                                     if the database is invalid or there is an error reading
     *                                                     from it
     */
    public function __construct($database)
    {
    }
    /**
     * Looks up the <code>address</code> in the MaxMind DB.
     *
     * @param string $ipAddress
     *                          the IP address to look up
     *
     * @throws \BadMethodCallException   if this method is called on a closed database
     * @throws \InvalidArgumentException if something other than a single IP address is passed to the method
     * @throws InvalidDatabaseException
     *                                   if the database is invalid or there is an error reading
     *                                   from it
     *
     * @return array the record for the IP address
     */
    public function get($ipAddress)
    {
    }
    private function findAddressInTree($ipAddress)
    {
    }
    private function startNode($length)
    {
    }
    private function ipV4StartNode()
    {
    }
    private function readNode($nodeNumber, $index)
    {
    }
    private function resolveDataPointer($pointer)
    {
    }
    /*
     * This is an extremely naive but reasonably readable implementation. There
     * are much faster algorithms (e.g., Boyer-Moore) for this if speed is ever
     * an issue, but I suspect it won't be.
     */
    private function findMetadataStart($filename)
    {
    }
    /**
     * @throws \InvalidArgumentException if arguments are passed to the method
     * @throws \BadMethodCallException   if the database has been closed
     *
     * @return Metadata object for the database
     */
    public function metadata()
    {
    }
    /**
     * Closes the MaxMind DB and returns resources to the system.
     *
     * @throws \Exception
     *                    if an I/O error occurs
     */
    public function close()
    {
    }
}