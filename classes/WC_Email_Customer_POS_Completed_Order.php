<?php


/**
 * Customer Completed Order Email.
 *
 * Order complete emails are sent to the customer when the order is marked complete and usual indicates that the order has been shipped.
 *
 * @class       WC_Email_Customer_POS_Completed_Order
 * @version     2.0.0
 * @package     WooCommerce\Classes\Emails
 * @extends     WC_Email
 */
class WC_Email_Customer_POS_Completed_Order extends \WC_Email
{
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Trigger the sending of this email.
     *
     * @param int    $order_id The order ID.
     * @param string $template_id The email template ID.
     */
    public function trigger($order_id, $template_id)
    {
    }
    /**
     * Get email subject.
     *
     * @since  3.1.0
     * @return string
     */
    public function get_default_subject()
    {
    }
    /**
     * Get email heading.
     *
     * @since  3.1.0
     * @return string
     */
    public function get_default_heading()
    {
    }
    /**
     * Get content html.
     *
     * @return string
     */
    public function get_content_html()
    {
    }
    /**
     * Get content plain.
     *
     * @return string
     */
    public function get_content_plain()
    {
    }
    /**
     * Default content to show below main email content.
     *
     * @since 3.7.0
     * @return string
     */
    public function get_default_additional_content()
    {
    }
    /**
     * Get block editor email template content.
     *
     * @return string
     */
    public function get_block_editor_email_template_content()
    {
    }
    /**
     * Enable order email actions for POS orders.
     */
    private function enable_order_email_actions_for_pos_orders()
    {
    }
    /**
     * Add actions and filters before generating email content.
     */
    private function add_pos_customizations()
    {
    }
    /**
     * Remove actions and filters after generating email content.
     */
    private function remove_pos_customizations()
    {
    }
    /**
     * Add unit price to order item meta start position.
     *
     * @param int      $item_id       Order item ID.
     * @param array    $item          Order item data.
     * @param WC_Order $order         Order object.
     */
    public function add_unit_price($item_id, $item, $order)
    {
    }
    /**
     * Add additional details to the order item totals table.
     *
     * @param array    $total_rows Array of total rows.
     * @param WC_Order $order      Order object.
     * @param string   $tax_display Tax display.
     * @return array Modified array of total rows.
     */
    public function order_item_totals($total_rows, $order, $tax_display)
    {
    }
    /**
     * Enable email template for REST API order valid templates for POS orders.
     */
    private function enable_email_template_for_pos_orders()
    {
    }
    /**
     * Add this email template to the list of valid templates for POS orders.
     *
     * @param array    $valid_template_classes Array of valid template class names.
     * @param WC_Order $order                  The order.
     * @return array Modified array of valid template class names.
     */
    public function add_to_valid_template_classes($valid_template_classes, $order)
    {
    }
}