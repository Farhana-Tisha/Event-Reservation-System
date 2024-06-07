<?php

include('connect.php');
session_start();
$booking_id= $_SESSION['booking_id'];
$package=$_SESSION['package'];
$program_date=$_SESSION['program_date'];
$program_time=$_SESSION['program_time'];
$program_type=$_SESSION['program_type'];
$hall= $_SESSION['hall_no'];
$req= $_SESSION['requirements'];
$sql2 = "SELECT pac_cost FROM package where pac_name='$package' ";
	$result=$con->query($sql2);
	$row=mysqli_fetch_array($result);
    $cost=$row['pac_cost']; 
$sql="UPDATE booking SET program_type='$program_type', package='$package', hall_no='$hall', program_date='$program_date', program_time='$program_time', cost='$cost', requirements='$req' where  booking_id= '$booking_id'";

if ($con->query($sql) === TRUE)  
{
    header("Location: ./sure.php");
} 
else 
{
   echo "Error: " . $sql . "<br>" . $con->error; 
}


mysqli_close($con);

?>