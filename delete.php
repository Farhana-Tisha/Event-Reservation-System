
<?php

include('connect.php');
session_start();

	$id= $_GET['id'];

$sql1="select * from payment where payment_id='$id'";
$result=$con->query($sql1);
	$row=mysqli_fetch_array($result);
	
    
    
	$sql="delete from payment where payment_id='$id'";

	if ($con->query($sql) === TRUE)  
{
    header("Location: ./payment_view.php");
} 
else 
{
   echo "Error: " . $sql . "<br>" . $con->error; 
}

	
mysqli_close($con);

?>

