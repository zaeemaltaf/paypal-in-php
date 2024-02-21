<?php
/*
Author: Javed Ur Rehman
Website: https://www.allphptricks.com
*/

// Database Configuration 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'allphptricks'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', ''); 

// PayPal Configuration
define('PAYPAL_EMAIL', 'Your PayPay bussiness Email'); 
define('RETURN_URL', 'return.php'); 
define('CANCEL_URL', 'cancel.php'); 
define('NOTIFY_URL', 'notify.php'); 
define('CURRENCY', 'USD'); 
define('SANDBOX', TRUE); // TRUE or FALSE 
define('LOCAL_CERTIFICATE', FALSE); // TRUE or FALSE

if (SANDBOX === TRUE){
	$paypal_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";
}else{
	$paypal_url = "https://www.paypal.com/cgi-bin/webscr";
}
// PayPal IPN Data Validate URL
define('PAYPAL_URL', $paypal_url);