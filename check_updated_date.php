<?php     

include('connect.php');


session_start();
$date=$_POST['program_date'];
$id= $_SESSION['booking_id'];
$sql= "Select program_date from booking where booking_id= '$id'";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
$sql2= "Select program_date from booking where program_date= '$date'";
$result2=$con->query($sql2);
$row2=mysqli_fetch_array($result2);
if($row2['program_date']==$date)
	{       if ($date==$row['program_date'])
				{ if ($_SESSION['package']=="manual")
						{header("Location: ./update_manual_order.php");}
					else
					{ header("Location: ./update_order.php");}
				}
	    else
		{if ($_SESSION['package']=="manual")
			{header("Location: ./no_updated_manual_booking.php");}
		else
		{header("Location: ./no_updated_booking.php");}
	}
	}	
else
{   if ($_SESSION['package']=="manual")
						{header("Location: ./update_manual_order.php");}
					else
					{ header("Location: ./update_order.php");}
	
	
	
}

$_SESSION['package']=$_POST['package'];
$_SESSION['program_date']=$_POST['program_date'];
$_SESSION['program_time']=$_POST['program_time'];
$_SESSION['hall_no']=$_POST['hall_no'];
mysqli_close($con);
 
 
?>
