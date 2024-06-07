<?php
include('connect.php');
session_start();
$username2=$_POST['email'];
$password2=$_POST['password'];

$sql3 = "SELECT email,password,name FROM event_coordinator where email='$username2' and password='$password2' limit 1";
	
	$result2=$con->query($sql3);
	$row2=mysqli_fetch_array($result2);


	if($row2['email']==$username2 && $row2['password']==$password2)
	{
		
		header("Location: ./check_order.php");
	}
else
{   
	header("Location: ./again_employee.php");
	
	
}

$_SESSION['name']= $row2['name'];
?>