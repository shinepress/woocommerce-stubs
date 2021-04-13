<?php


/**
 * Handle PDT Responses from PayPal.
 */
class WC_Gateway_Paypal_PDT_Handler extends \WC_Gateway_Paypal_Response
{
    /**
     * Identity token for PDT support
     *
     * @var string
     */
    protected $identity_token;
    /**
     * Constructor.
     *
     * @param bool   $sandbox Whether to use sandbox mode or not.
     * @param string $identity_token Identity token for PDT support.
     */
    public function __construct($sandbox = \false, $identity_token = '')
    {
    }
    /**
     * Validate a PDT transaction to ensure its authentic.
     *
     * @param  string $transaction TX ID.
     * @return bool|array False or result array if successful and valid.
     */
    protected function validate_transaction($transaction)
    {
    }
    /**
     * Check Response for PDT.
     */
    public function check_response()
    {
    }
}