<?php
//Mpesa variables initialization
$consumer_key = '';
$consumer_secret = '';
$business_code = '';
$Passkey = '';
$Transaction_type = '';
$Token_URL = '';
$phone_number = $_POST[''];
$OnlinePayment = '';
$amount = $_POST[''];
$callBackURL = '';
$Time_stamp = date("Ymdhis");
$password = base64_encode($business_code . $Passkey. $Time_stamp);
?>
