<?php


/**
 * Product download class.
 */
class WC_Product_Download implements \ArrayAccess
{
    /**
     * Data array.
     *
     * @since 3.0.0
     * @var array
     */
    protected $data = array('id' => '', 'name' => '', 'file' => '');
    /**
     * Returns all data for this object.
     *
     * @return array
     */
    public function get_data()
    {
    }
    /**
     * Get allowed mime types.
     *
     * @return array
     */
    public function get_allowed_mime_types()
    {
    }
    /**
     * Get type of file path set.
     *
     * @param  string $file_path optional.
     * @return string absolute, relative, or shortcode.
     */
    public function get_type_of_file_path($file_path = '')
    {
    }
    /**
     * Get file type.
     *
     * @return string
     */
    public function get_file_type()
    {
    }
    /**
     * Get file extension.
     *
     * @return string
     */
    public function get_file_extension()
    {
    }
    /**
     * Check if file is allowed.
     *
     * @return boolean
     */
    public function is_allowed_filetype()
    {
    }
    /**
     * Validate file exists.
     *
     * @return boolean
     */
    public function file_exists()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Setters
    |--------------------------------------------------------------------------
    */
    /**
     * Set ID.
     *
     * @param string $value Download ID.
     */
    public function set_id($value)
    {
    }
    /**
     * Set name.
     *
     * @param string $value Download name.
     */
    public function set_name($value)
    {
    }
    /**
     * Set previous_hash.
     *
     * @deprecated 3.3.0 No longer using filename based hashing to keep track of files.
     * @param string $value Previous hash.
     */
    public function set_previous_hash($value)
    {
    }
    /**
     * Set file.
     *
     * @param string $value File URL/Path.
     */
    public function set_file($value)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Getters
    |--------------------------------------------------------------------------
    */
    /**
     * Get id.
     *
     * @return string
     */
    public function get_id()
    {
    }
    /**
     * Get name.
     *
     * @return string
     */
    public function get_name()
    {
    }
    /**
     * Get previous_hash.
     *
     * @deprecated 3.3.0 No longer using filename based hashing to keep track of files.
     * @return string
     */
    public function get_previous_hash()
    {
    }
    /**
     * Get file.
     *
     * @return string
     */
    public function get_file()
    {
    }
    /*
    |--------------------------------------------------------------------------
    | ArrayAccess/Backwards compatibility.
    |--------------------------------------------------------------------------
    */
    /**
     * OffsetGet.
     *
     * @param string $offset Offset.
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
    }
    /**
     * OffsetSet.
     *
     * @param string $offset Offset.
     * @param mixed  $value Offset value.
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
    }
    /**
     * OffsetUnset.
     *
     * @param string $offset Offset.
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
    }
    /**
     * OffsetExists.
     *
     * @param string $offset Offset.
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
    }
}