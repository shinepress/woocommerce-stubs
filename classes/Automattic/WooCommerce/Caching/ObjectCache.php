<?php

namespace Automattic\WooCommerce\Caching;

/**
 * Base class for caching objects (or associative arrays) that have a unique identifier.
 * At the very least, derived classes need to implement the 'get_object_type' method,
 * but usually it will be convenient to override some of the other protected members.
 *
 * The actual caching is delegated to an instance of CacheEngine. By default WpCacheEngine is used,
 * but a different engine can be used by either overriding the get_cache_engine_instance method
 * or capturing the wc_object_cache_get_engine filter.
 *
 * Objects are identified by ids that are either integers or strings. The actual cache keys passed
 * to the cache engine will be prefixed with the object type and a random string. The 'flush' operation
 * just forces the generation a new prefix and lets the old cached objects expire.
 */
abstract class ObjectCache
{
    private const CACHE_PREFIX_OPTION_NAME = 'wp_object_cache_key_prefix_';
    /**
     * Expiration value to be passed to 'set' to use the value of $default_expiration.
     */
    public const DEFAULT_EXPIRATION = -1;
    /**
     * Maximum expiration time value, in seconds, that can be passed to 'set'.
     */
    public const MAX_EXPIRATION = MONTH_IN_SECONDS;
    /**
     * This needs to be set in each derived class.
     *
     * @var string
     */
    private $object_type;
    /**
     * Default value for the duration of the objects in the cache, in seconds
     * (may not be used depending on the cache engine used WordPress cache implementation).
     *
     * @var int
     */
    protected $default_expiration = HOUR_IN_SECONDS;
    /**
     * Temporarily used when retrieving data in 'get'.
     *
     * @var array
     */
    private $last_cached_data;
    /**
     * The cache engine to use.
     *
     * @var CacheEngine
     */
    private $cache_engine = null;
    /**
     * The prefix to use for cache keys to pass to the cache engine.
     *
     * @var string
     */
    private $cache_key_prefix = null;
    /**
     * The name of the option used to store the cache prefix.
     *
     * @var string
     */
    private $cache_key_prefix_option_name;
    /**
     * Gets an identifier for the types of objects cached by this class.
     * This identifier will be used to compose the keys passed to the cache engine,
     * to the name of the option that stores the cache prefix, and the names of the hooks used.
     * It must be unique for each class inheriting from ObjectCache.
     *
     * @return string
     */
    abstract public function get_object_type(): string;
    /**
     * Creates a new instance of the class.
     *
     * @throws CacheException If get_object_type returns null or an empty string.
     */
    public function __construct()
    {
    }
    /**
     * Get the default expiration time for cached objects, in seconds.
     *
     * @return int
     */
    public function get_default_expiration_value(): int
    {
    }
    /**
     * Get the cache engine to use and cache it internally.
     *
     * @return CacheEngine
     */
    private function get_cache_engine(): \Automattic\WooCommerce\Caching\CacheEngine
    {
    }
    /**
     * Get the current cache prefix to use, generating one if none is in use yet.
     *
     * @return string
     */
    private function get_cache_key_prefix(): string
    {
    }
    /**
     * Generate a prefix for the cache keys to use, containing the object type and a random string,
     * and store it persistently using an option.
     *
     * @return string The generated prefix.
     * @throws CacheException Can't store the generated prefix.
     */
    private function create_cache_key_prefix(): string
    {
    }
    /**
     * Add an object to the cache, or update an already cached object.
     *
     * @param int|string|null $id Id of the object to be cached, if null, get_object_id will be used to get it.
     * @param object|array    $object The object to be cached.
     * @param int             $expiration Expiration of the cached data in seconds from the current time, or DEFAULT_EXPIRATION to use the default value.
     * @return bool True on success, false on error.
     * @throws CacheException Invalid parameter, or null id was passed and get_object_id returns null too.
     */
    public function set($id = null, $object, int $expiration = self::DEFAULT_EXPIRATION): bool
    {
    }
    /**
     * Check if the given expiration time value is valid, throw an exception if not.
     *
     * @param int $expiration Expiration time to check.
     * @return void
     * @throws CacheException Expiration time is negative or higher than MAX_EXPIRATION.
     */
    private function verify_expiration_value(int $expiration): void
    {
    }
    /**
     * Retrieve a cached object, and if no object is cached with the given id,
     * try to get one via get_from_datastore method or by supplying a callback and then cache it.
     *
     * If you want to provide a callable but still use the default expiration value,
     * pass "ObjectCache::DEFAULT_EXPIRATION" as the second parameter.
     *
     * @param int|string    $id The id of the object to retrieve.
     * @param int           $expiration Expiration of the cached data in seconds from the current time, used if an object is retrieved from datastore and cached.
     * @param callable|null $get_from_datastore_callback Optional callback to get the object if it's not cached, it must return an object/array or null.
     * @return object|array|null Cached object, or null if it's not cached and can't be retrieved from datastore or via callback.
     * @throws CacheException Invalid id parameter.
     */
    public function get($id, int $expiration = self::DEFAULT_EXPIRATION, callable $get_from_datastore_callback = null)
    {
    }
    /**
     * Remove an object from the cache.
     *
     * @param int|string $id The id of the object to remove.
     * @return bool True if the object is removed from the cache successfully, false otherwise (because the object wasn't cached or for other reason).
     */
    public function remove($id): bool
    {
    }
    /**
     * Remove all the objects from the cache.
     * This is done by forcing the generation of a new cache key prefix
     * and leaving the old cached objects to expire.
     *
     * @return void
     */
    public function flush(): void
    {
    }
    /**
     * Is a given object cached?
     *
     * @param int|string $id The id of the object to check.
     * @return bool True if there's a cached object with the specified id.
     */
    public function is_cached($id): bool
    {
    }
    /**
     * Get the id of an object. This is used by 'set' when a null id is passed.
     * If the object id can't be determined the method must return null.
     *
     * @param array|object $object The object to get the id for.
     * @return int|string|null
     */
    protected function get_object_id($object)
    {
    }
    /**
     * Validate an object before it's cached.
     *
     * @param array|object $object Object to validate.
     * @return array|null An array with validation error messages, null or an empty array if there are no errors.
     */
    protected function validate($object): ?array
    {
    }
    /**
     * Convert an object to a serialized form suitable for caching.
     * If a class overrides this method it should override 'deserialize' as well.
     *
     * @param array|object $object The object to serialize.
     * @return array The serialized object.
     */
    protected function serialize($object): array
    {
    }
    /**
     * Deserializes a set of object data after having been retrieved from the cache.
     * If a class overrides this method it should override 'serialize' as well.
     *
     * @param array $serialized Serialized object data as it was returned by 'validate_and_serialize'.
     * @return object|array Deserialized object, ready to be returned by 'get'.
     */
    protected function deserialize(array $serialized)
    {
    }
    /**
     * Get an object from an authoritative data store.
     * This is used by 'get' if the object isn't cached and no custom object retrieval callback is suupplied.
     *
     * @param int|string $id The id of the object to get.
     * @return array|object|null The retrieved object, or null if it's not possible to retrieve an object by the given id.
     */
    protected function get_from_datastore($id)
    {
    }
    /**
     * Get the instance of the cache engine to use.
     *
     * @return CacheEngine
     */
    protected function get_cache_engine_instance(): \Automattic\WooCommerce\Caching\CacheEngine
    {
    }
    /**
     * Get a random string to be used to compose the cache key prefix.
     * It should return a different string each time.
     *
     * @return string
     */
    protected function get_random_string(): string
    {
    }
}