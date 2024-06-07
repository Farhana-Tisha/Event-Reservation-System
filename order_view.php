<html>
<head>
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<title>Event Planning Management</title>
<body>

<div class="bg-image" >
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Booked Information</font></h1> 
		</div>
<?php
include('connect.php');
session_start();
$username=$_SESSION['email'];


$sql1 = "SELECT customer_email, program_type, package, hall_no, program_date, program_time,cost FROM booking ";
	
	$result=$con->query($sql1);
$serial=1;
echo str_pad("Customer",20,"-");
echo str_pad("Event",20,"-");
echo str_pad("Package",20,"-");
echo str_pad("Hall",20,"-");
echo str_pad("Date",20,"-");
echo str_pad("Time",20,"-");
echo "Bill";


echo "<br><br><br>";

	if($result)
	{   
		while($row=mysqli_fetch_assoc($result)){
			echo " ".$serial.".  ";
		echo str_pad($row['customer_email'],20,"-"); 
		echo str_pad($row['program_type'],20,"-"); 
		echo str_pad($row['package'],20,"-");
		echo str_pad($row['hall_no'],20,"-");
		echo str_pad($row['program_date'],20,"-");
		echo str_pad($row['program_time'],20,"-");
		echo $row['cost'];
		
		echo "<br>";
		$serial++;
	}
	}


?>

<div class="row_2">
                <a href="logged_out_admin.php" class="button-intro">Logout</a> 
        </div>
		</br>
		<div class="row_2">
                <a href="index.php" class="button-intro">Home</a> 
        </div>
</div>		
</body>
</html>