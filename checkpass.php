<?php
session_start();
$password1=$_POST['password'];
$password2=$_POST['confpassword'];
$_SESSION['password']=$_POST['password'];
if($password1==$password2)
	{
		header("Location: ./resetpasswordb.php");
	}
else
{   
	
	header("Location: ./enteragain.php");
	
}

?>