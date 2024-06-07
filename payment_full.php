<?php
include('connect.php');
session_start();
$username=$_SESSION['email'];
$otp = '';

require_once("mail_function_payment_full.php");
$mail_status = sendOTP($username,$otp);

if (($mail_status) === TRUE) 
{
	header("Location: ./payment_view.php");
}	
	else 
{
    echo "Error: " . $mail_status . "<br>" . $con->error; 
}
?>