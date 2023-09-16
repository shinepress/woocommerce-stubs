<?php


/**
 * WC_WCCOM_Site_Installer Class
 *
 * Contains functionalities to install products via WooCommerce.com helper connection.
 */
class WC_WCCOM_Site_Installer
{
    /**
     * Error message returned install_package if the folder already exists.
     *
     * @var string
     */
    private static $folder_exists = 'folder_exists';
    /**
     * Default state.
     *
     * @var array
     */
    private static $default_state = array('status' => 'idle', 'steps' => array(), 'current_step' => \null);
    /**
     * Represents product step state.
     *
     * @var array
     */
    private static $default_step_state = array('download_url' => '', 'product_type' => '', 'last_step' => '', 'last_error' => '', 'download_path' => '', 'unpacked_path' => '', 'installed_path' => '', 'activate' => \false);
    /**
     * Product install steps. Each step is a method name in this class that
     * will be passed with product ID arg \WP_Upgrader instance.
     *
     * @var array
     */
    private static $install_steps = array('get_product_info', 'download_product', 'unpack_product', 'move_product', 'activate_product');
    /**
     * An instance of the WP_Upgrader class to be used for installation.
     *
     * @var \WP_Upgrader $wp_upgrader
     */
    private static $wp_upgrader;
    /**
     * Get the product install state.
     *
     * @since 3.7.0
     * @param string $key Key in state data. If empty key is passed array of
     *                    state will be returned.
     * @return array Product install state.
     */
    public static function get_state($key = '')
    {
    }
    /**
     * Update the product install state.
     *
     * @since 3.7.0
     * @param string $key   Key in state data.
     * @param mixed  $value Value.
     */
    public static function update_state($key, $value)
    {
    }
    /**
     * Reset product install state.
     *
     * @since 3.7.0
     * @param array $products List of product IDs.
     */
    public static function reset_state($products = array())
    {
    }
    /**
     * Schedule installing given list of products.
     *
     * @since 3.7.0
     * @param array $products Array of products where key is product ID and
     *                        element is install args.
     * @return array State.
     */
    public static function schedule_install($products)
    {
    }
    /**
     * Install a given product IDs.
     *
     * Run via `woocommerce_wccom_install_products` hook.
     *
     * @since 3.7.0
     * @param array $products Array of products where key is product ID and
     *                        element is install args.
     */
    public static function install($products)
    {
    }
    /**
     * Finish installation by updating the state.
     *
     * @since 3.7.0
     */
    private static function finish_installation()
    {
    }
    /**
     * Install a single product given its ID.
     *
     * @since 3.7.0
     * @param int          $product_id   Product ID.
     * @param array        $install_args Install args.
     * @param \WP_Upgrader $upgrader     Core class to handle installation.
     */
    private static function install_product($product_id, $install_args, $upgrader)
    {
    }
    /**
     * Perform product installation step.
     *
     * @since 3.7.0
     * @param int          $product_id   Product ID.
     * @param array        $install_args Install args.
     * @param string       $step         Installation step.
     * @param \WP_Upgrader $upgrader     Core class to handle installation.
     */
    private static function do_install_step($product_id, $install_args, $step, $upgrader)
    {
    }
    /**
     * Get product info from its ID.
     *
     * @since 3.7.0
     * @param int $product_id Product ID.
     * @return array|\WP_Error
     */
    private static function get_product_info($product_id)
    {
    }
    /**
     * Download product by its ID and returns the path of the zip package.
     *
     * @since 3.7.0
     * @param int          $product_id Product ID.
     * @param \WP_Upgrader $upgrader   Core class to handle installation.
     * @return \WP_Error|string
     */
    private static function download_product($product_id, $upgrader)
    {
    }
    /**
     * Unpack downloaded product.
     *
     * @since 3.7.0
     * @param int          $product_id Product ID.
     * @param \WP_Upgrader $upgrader   Core class to handle installation.
     * @return \WP_Error|string
     */
    private static function unpack_product($product_id, $upgrader)
    {
    }
    /**
     * Move product to plugins directory.
     *
     * @since 3.7.0
     * @param int          $product_id Product ID.
     * @param \WP_Upgrader $upgrader   Core class to handle installation.
     * @return array|\WP_Error
     */
    private static function move_product($product_id, $upgrader)
    {
    }
    /**
     * Activate product given its product ID.
     *
     * @since 3.7.0
     * @param int $product_id Product ID.
     * @return \WP_Error|null
     */
    private static function activate_product($product_id)
    {
    }
    /**
     * Activate plugin given its product ID.
     *
     * @since 3.7.0
     * @param int $product_id Product ID.
     * @return \WP_Error|null
     */
    public static function activate_plugin($product_id)
    {
    }
    /**
     * Activate theme given its product ID.
     *
     * @since 3.7.0
     * @param int $product_id Product ID.
     * @return \WP_Error|null
     */
    private static function activate_theme($product_id)
    {
    }
    /**
     * Get installed directory of WP.org product.
     *
     * @since 3.7.0
     * @param int $product_id Product ID.
     * @return bool|string
     */
    private static function get_wporg_product_dir_name($product_id)
    {
    }
    /**
     * Get WP.org plugin's main file.
     *
     * @since 3.7.0
     * @param string $dir Directory name of the plugin.
     * @return bool|string
     */
    public static function get_wporg_plugin_main_file($dir)
    {
    }
    /**
     * Get plugin info
     *
     * @since 3.9.0
     * @param string $dir Directory name of the plugin.
     * @return bool|array
     */
    public static function get_plugin_info($dir)
    {
    }
    /**
     * Get an instance of WP_Upgrader to use for installing plugins.
     *
     * @return WP_Upgrader
     */
    public static function get_wp_upgrader()
    {
    }
}