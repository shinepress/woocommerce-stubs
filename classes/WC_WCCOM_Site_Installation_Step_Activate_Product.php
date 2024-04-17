<?php


/**
 * WC_WCCOM_Site_Installation_Step_Activate_Product Class
 */
class WC_WCCOM_Site_Installation_Step_Activate_Product implements \WC_WCCOM_Site_Installation_Step
{
    /**
     * The current installation state.
     *
     * @var WC_WCCOM_Site_Installation_State
     */
    protected $state;
    /**
     * Constructor.
     *
     * @param array $state The current installation state.
     */
    public function __construct($state)
    {
    }
    /**
     * Run the step installation process.
     */
    public function run()
    {
    }
    /**
     * Activate plugin.
     *
     * @param int $product_id Product ID.
     * @return void
     * @throws WC_REST_WCCOM_Site_Installer_Error If plugin activation failed.
     */
    private function activate_plugin($product_id)
    {
    }
    /**
     * Activate theme.
     *
     * @param int $product_id Product ID.
     * @return void
     * @throws WC_REST_WCCOM_Site_Installer_Error If theme activation failed.
     */
    private function activate_theme($product_id)
    {
    }
    /**
     * Get WP.org product directory name.
     *
     * @return string|false
     */
    private function get_wporg_product_dir_name()
    {
    }
}