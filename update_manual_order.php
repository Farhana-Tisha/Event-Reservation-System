<?php

include('connect.php');
session_start();
$booking_id= $_SESSION['booking_id'];
$package1=$_SESSION['package1'];
$program_date=$_SESSION['program_date'];
$program_time=$_SESSION['program_time'];
$program_type=$_SESSION['program_type'];
$hall= $_SESSION['hall_no'];
$req= $_SESSION['requirements'];


$cost1=$_SESSION['cost'];
$sql="UPDATE booking SET program_type='$program_type', package='$package1', hall_no='$hall', program_date='$program_date', program_time='$program_time', cost='$cost1', requirements='$req' where  booking_id= '$booking_id'";

if ($con->query($sql) === TRUE)  
{
    header("Location: ./sure_manual.php");
} 
else 
{
   echo "Error: " . $sql . "<br>" . $con->error; 
}


mysqli_close($con);

?>