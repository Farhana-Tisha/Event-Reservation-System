<?php
include('connect.php');
session_start();
$username=$_POST['email'];

$sql1 = "SELECT email FROM customer where email='$username'";
	
	$result=$con->query($sql1);
	$row=mysqli_fetch_array($result);

$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];


	if($row['email']==$username )
	{
		header("Location: ./otp.php");
	}
else
{   
	
	header("Location: ./correctemail.php");
	
}


?>