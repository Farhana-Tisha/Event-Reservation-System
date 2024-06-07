<?php     

include('connect.php');


session_start();
$username= $_SESSION['email'];
$ref_no= $_POST ['ref_no'];
$img= $_POST['img'];

$package=$_SESSION['package'];
$hall=$_SESSION['hall'];
$program_type=$_SESSION['program_type'];
$program_date=$_SESSION['program_date'];
$program_time=$_SESSION['program_time'];
$cost= $_SESSION ['cost'];
$requirements= $_SESSION['requirements'];
$ev_name= "NULL";

$insert_query= "INSERT into payment(customer_email,program_type,package,hall_no,program_date,program_time,cost,requirement,event_cordinator,ref_no,img,ack) values ('$username','$program_type','$package','$hall','$program_date','$program_time','$cost','$requirements','$ev_name','$ref_no','$img')";
if ($con->query($insert_query) === TRUE)  
{
	header("Location: ./booking_done.php");
	
}

else 
{
    echo "Error: " . $insert_query . "<br>" . $con->error; 
}
mysqli_close($con);
?>
