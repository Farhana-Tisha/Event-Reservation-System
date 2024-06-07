<?php
include('connect.php');
session_start();
$username=$_SESSION['email'];
$otp = rand(100000,999999);
require_once("mail_function_payment.php");
$mail_status = sendOTP($username,$otp);
$insert_query = "INSERT INTO otp(otp,customer_email) VALUES ('" . $otp . "', '" . $username. "')";
if ($con->query($insert_query) === TRUE) 
{
	header("Location: ./otp_insert_payment.php");
}	
	else 
{
    echo "Error: " . $insert_query . "<br>" . $con->error; 
}