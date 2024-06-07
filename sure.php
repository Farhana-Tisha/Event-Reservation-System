<?php
include('connect.php');


session_start();
$username=$_SESSION['email'];

$sql= "SELECT booking_id from booking where customer_email='$username'";
$result=$con->query($sql);
if($result)
	{   
		while($row=mysqli_fetch_assoc($result)){
			
		$val[]=$row['booking_id'];

			
		}
	}
$max_booking_id= max($val);
$sql1="SELECT program_type, package, hall_no, program_date, program_time,cost FROM booking where customer_email='$username' and booking_id= '$max_booking_id'"; 
$result1=$con->query($sql1);
$row1=mysqli_fetch_assoc($result1);
$package=$row1['package'];
$program_date=$row1['program_date'];
$program_time=$row1['program_time'];
$program_type=$row1['program_type'];
$hall= $row1['hall_no'];
$cost= $row1['cost'];

$_SESSION['cost']=$cost;
$_SESSION['booking_id']=$max_booking_id; 
?>
<html>
<head>
<title>Event Planning Management</title>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>

<body>

<div class="bg-image">
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Booking Details</font></h1> 
		</div>
		
<div class="container">
  
	<div class="container"> 
  <div class="col_1" >
            <p><font color="black" face="Bradley Hand ITC">Program Type:------ <?php echo $program_type ?></font></p>
			<p><font color="black" face="Bradley Hand ITC">Program Location:----- <?php echo $hall ?></font></p>
			<p><font color="black" face="Bradley Hand ITC">Package Type:----- <?php echo $package ?></font></p>
			<p><font color="black" face="Bradley Hand ITC">Program Date:----- <?php echo $program_date ?></font></p>
			<p><font color="black" face="Bradley Hand ITC">Program Time:----- <?php echo $program_time ?></font></p>
			<p><font color="black" face="Bradley Hand ITC">Total cost:----- <?php echo $cost ?></font></p>
			 
			
			
  </div>
  <div class="row_2">
                <a href="update_form.php" class="button">Make Change</a> 
        </div>
		</br>
		<div class="row_2">
                <a href="sure_cancel_booking.php" class="button">Cancel Booking</a> 
        </div>
		</br>
<div class="row_2">
                <a href="otp_payment.php" class="button">Confirm</a> 
        </div>
		</br>	
	</div>  
</div>  	
</div>
</body>
</html>




