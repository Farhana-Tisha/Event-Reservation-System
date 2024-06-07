<?php     

include('connect.php');


session_start();
$date=$_POST['program_date'];

$sql= "Select program_date from booking where program_date= '$date'";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
$_SESSION['program_date']=$_POST['program_date'];
$_SESSION['program_time']=$_POST['program_time'];


	
if($row['program_date']==$date)
	{
			header("Location: ./no_booking.php");
	
	}
	
else
{   
	
	header("Location: ./requirement.php");
	
}


mysqli_close($con);
 
 
?>
