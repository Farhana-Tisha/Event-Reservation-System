<?php
include('connect.php');
session_start();
$username=$_SESSION['email'];
$otp=$_POST['otp'];
$sql= "SELECT max(otp_id) from otp";
$result=$con->query($sql);
	$row=mysqli_fetch_array($result);
$otpid=$row['max(otp_id)'];
$sql2= "SELECT otp from otp where otp_id='$otpid'";

$result2=$con->query($sql2);
	$row2=mysqli_fetch_array($result2);



	if($row2['otp']==$otp )
	{   $sql3= "Delete from otp where otp_id='$otpid'";
         if ($con->query($sql3) === TRUE) 
			{
				header("Location: ./payment.php");
			} 
	
		
	}
else
{   
	
	header("Location: ./otp_invalid_payment.php");
	
}


?>