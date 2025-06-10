<?php


/**
 * Customer Refunded Order Email.
 *
 * Order refunded emails are sent to the customer when the order is marked refunded.
 *
 * @class    WC_Email_Customer_POS_Refunded_Order
 * @version  3.5.0
 * @package  WooCommerce\Classes\Emails
 * @extends  WC_Email
 */
class WC_Email_Customer_POS_Refunded_Order extends \WC_Email
{
    /**
     * Refund order.
     *
     * @var WC_Order|bool
     */
    public $refund;
    /**
     * Is the order partial refunded?
     *
     * @var bool
     */
    public $partial_refund;
    /**
     * Constructor.
     */
    public function __construct()
    {
    }
    /**
     * Get email subject.
     *
     * @param bool $partial Whether it is a partial refund or a full refund.
     * @since  3.1.0
     * @return string
     */
    public function get_default_subject($partial = \false)
    {
    }
    /**
     * Get email heading.
     *
     * @param bool $partial Whether it is a partial refund or a full refund.
     * @since  3.1.0
     * @return string
     */
    public function get_default_heading($partial = \false)
    {
    }
    /**
     * Get email subject.
     *
     * @return string
     */
    public function get_subject()
    {
    }
    /**
     * Get email heading.
     *
     * @return string
     */
    public function get_heading()
    {
    }
    /**
     * Set email strings.
     *
     * @param bool $partial_refund Whether it is a partial refund or a full refund.
     * @deprecated 3.1.0 Unused.
     */
    public function set_email_strings($partial_refund = \false)
    {
    }
    /**
     * Full refund notification.
     *
     * @param int $order_id Order ID.
     * @param int $refund_id Refund ID.
     */
    public function trigger_full($order_id, $refund_id = \null)
    {
    }
    /**
     * Partial refund notification.
     *
     * @param int $order_id Order ID.
     * @param int $refund_id Refund ID.
     */
    public function trigger_partial($order_id, $refund_id = \null)
    {
    }
    /**
     * Trigger.
     *
     * @param int  $order_id Order ID.
     * @param bool $partial_refund Whether it is a partial refund or a full refund.
     * @param int  $refund_id Refund ID.
     */
    public function trigger($order_id, $partial_refund = \false, $refund_id = \null)
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
     * Get block editor email template content.
     *
     * @return string
     */
    public function get_block_editor_email_template_content()
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
     * Initialise settings form fields.
     */
    public function init_form_fields()
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
}