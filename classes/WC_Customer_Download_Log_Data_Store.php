<?php


/**
 * WC_Customer_Download_Log_Data_Store class.
 */
class WC_Customer_Download_Log_Data_Store implements \WC_Customer_Download_Log_Data_Store_Interface
{
    // Table name for download logs.
    const WC_DOWNLOAD_LOG_TABLE = 'wc_download_log';
    /**
     * Get the table name for download logs.
     *
     * @return string
     */
    public static function get_table_name()
    {
    }
    /**
     * Create download log entry.
     *
     * @param WC_Customer_Download_Log $download_log Customer download log object.
     */
    public function create(\WC_Customer_Download_Log &$download_log)
    {
    }
    /**
     * Method to read a download log from the database.
     *
     * @param WC_Customer_Download_Log $download_log Download log object.
     * @throws Exception Exception when read is not possible.
     */
    public function read(&$download_log)
    {
    }
    /**
     * Method to update a download log in the database.
     *
     * @param WC_Customer_Download_Log $download_log Download log object.
     */
    public function update(&$download_log)
    {
    }
    /**
     * Get a download log object.
     *
     * @param  array $data From the DB.
     * @return WC_Customer_Download_Log
     */
    private function get_download_log($data)
    {
    }
    /**
     * Get array of download log ids by specified args.
     *
     * @param  array $args Arguments to define download logs to retrieve.
     * @return array
     */
    public function get_download_logs($args = array())
    {
    }
    /**
     * Get download logs for a given download permission.
     *
     * @param int $permission_id Permission to get logs for.
     * @return array
     */
    public function get_download_logs_for_permission($permission_id)
    {
    }
    /**
     * Method to delete download logs for a given permission ID.
     *
     * @since 3.4.0
     * @param int $id download_id of the downloads that will be deleted.
     */
    public function delete_by_permission_id($id)
    {
    }
}