<?php


/**
 * WC_Admin_Dashboard_Setup Class.
 */
class WC_Admin_Dashboard_Setup
{
    /**
     * List of tasks.
     *
     * @var array
     */
    private $tasks = array('store_details' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&path=%2Fsetup-wizard'), 'products' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&task=products'), 'woocommerce-payments' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&path=%2Fpayments%2Fconnect'), 'payments' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&task=payments'), 'tax' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&task=tax'), 'shipping' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&task=shipping'), 'appearance' => array('completed' => \false, 'button_link' => 'admin.php?page=wc-admin&task=appearance'));
    /**
     * # of completed tasks.
     *
     * @var int
     */
    private $completed_tasks_count = 0;
    /**
     * WC_Admin_Dashboard_Setup constructor.
     */
    public function __construct()
    {
    }
    /**
     * Render meta box output.
     */
    public function render()
    {
    }
    /**
     * Populate tasks from the database.
     */
    private function populate_general_tasks()
    {
    }
    /**
     * Getter for $tasks
     *
     * @return array
     */
    public function get_tasks()
    {
    }
    /**
     * Return # of completed tasks
     */
    public function get_completed_tasks_count()
    {
    }
    /**
     * Get the next task.
     *
     * @return array|null
     */
    private function get_next_task()
    {
    }
    /**
     * Check to see if we should display the widget
     *
     * @return bool
     */
    private function should_display_widget()
    {
    }
    /**
     * Populate payment tasks's visibility and completion
     */
    private function populate_payment_tasks()
    {
    }
}