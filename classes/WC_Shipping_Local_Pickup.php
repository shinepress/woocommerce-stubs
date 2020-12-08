<?php


/**
 * Local Pickup Shipping Method.
 *
 * A simple shipping method allowing free pickup as a shipping method.
 *
 * @class       WC_Shipping_Local_Pickup
 * @version     2.6.0
 * @package     WooCommerce\Classes\Shipping
 */
class WC_Shipping_Local_Pickup extends \WC_Shipping_Method
{
    /**
     * Constructor.
     *
     * @param int $instance_id Instance ID.
     */
    public function __construct($instance_id = 0)
    {
    }
    /**
     * Initialize local pickup.
     */
    public function init()
    {
    }
    /**
     * Calculate local pickup shipping.
     *
     * @param array $package Package information.
     */
    public function calculate_shipping($package = array())
    {
    }
    /**
     * Init form fields.
     */
    public function init_form_fields()
    {
    }
}