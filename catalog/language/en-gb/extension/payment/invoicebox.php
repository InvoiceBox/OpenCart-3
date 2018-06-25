<?php
// Heading
$_['heading_title']      = 'Invoicebox';
$_['text_title']         = 'Invoicebox';
$_['text_testmode']      = 'Warning: The payment gateway is in \'Sandbox Mode\'. Your account will not be charged.';
// Text
$_['text_payment']       = 'Payment';
$_['text_success']       = 'Success!';
$_['button_save']        = 'Save';
$_['button_cancel']      = 'Cancel';

// Entry
$_['invoicebox_participant_id']       = 'Shop ID (issued by the Invoicebox):';
$_['invoicebox_participant_ident']         = 'Region ID (issued by the Invoicebox):';
$_['invoicebox_api_key']        = 'Secret key (issued by the Invoicebox):';
$_['invoicebox_testmode']        = 'Test mode:';
$_['description']        = 'Payment description:';
$_['status']             = 'Status:';
$_['status_success']     = 'Order status after successfull payment:';
$_['status_failed']      = 'Order status after failed payment:';

// Error
$_['error_permission']   = 'Warning: You do not have permission to modify Invoicebox Bank account!';
$_['error_invoicebox_participant_id'] = 'Enter Shop ID!';
$_['error_invoicebox_participant_ident']   = 'Enter Region ID!';
$_['error_invoicebox_api_key']  = 'Enter Secret key!';

// Payment
$_['pay_button']         = 'Pay';

$_['text_message']  = '<p>There was a problem processing your payment and the order did not complete.</p>

<p>Possible reasons are:</p>
<ul>
  <li>Insufficient funds</li>
  <li>Verification failed</li>
</ul>

<p>Please try to order again using a different payment method.</p>

<p>If the problem persists please <a href="%s">contact us</a> with the details of the order you are trying to place.</p>

';
$_['text_order_description']      = 'Payment order №%s, Amount: %s (%s)';

$_['text_comment']                = 'Invoicebox. Amount: %s.';
$_['text_description']            = 'Possible methods of payment: <br/><img src="%scatalog/view/theme/default/image/invoicebox.png" title="methods of payment" alt="methods of payment"/>';
$_['text_Invoicebox_onpay']           = 'Please pay clicking on the link: %s';

$_['text_error_post']             = 'The response from the gateway is not a POST';
$_['text_error_m_sign']           = 'Incorrect signature of the message from the payment gateway';
$_['text_error_order_not_found']  = 'Order #%s not found';
$_['error_fail_checkout_extension'] = 'Current checkout extension is not supported payment module!';
?>