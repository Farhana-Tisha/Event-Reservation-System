<?php
include('connect.php');
session_start();
$username1=$_POST['email'];
$password1=$_POST['password'];

$sql2 = "SELECT email,password FROM event_manager where email='$username1' and password='$password1' limit 1";
	
	$result1=$con->query($sql2);
	$row1=mysqli_fetch_array($result1);


	if($row1['email']==$username1 && $row1['password']==$password1)
	{
		
		header("Location: ./view.php");
	}
else
{   
	header("Location: ./again.php");
	
	
}


?>