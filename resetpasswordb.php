<?php

include('connect.php');
session_start();
$email= $_SESSION['email'];
$customer_id= $_SESSION['customer_id'];
$password=md5($_SESSION['password']);
$sql="UPDATE customer SET password='$password' where customer_id='$customer_id' and email='$email'";
if ($con->query($sql) === TRUE)  
{
    header("Location: ./pass_change_done.php");
} 
else 
{
    echo "Error: " . $sql . "<br>" . $con->error; 
}
	
mysqli_close($con);

?>