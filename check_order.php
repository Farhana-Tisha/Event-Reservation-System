<html>
<head>
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<title>Event Planning Management</title>
<body>

<div class="bg-image" >
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Assigned Program</font></h1> 
		</div>
		<div class="container">
<div class="row_1">
<table border="2">
<tr>
<td>Payment no</td>
<td>Customer Email</td>
<td>Program Type</td>
<td>Package</td>
<td>Hall</td>
<td>Program Date</td>
<td>Program Time</td>
<td>Special Requirements</td>
<?php
include('connect.php');
session_start();
$username=$_SESSION['name'];


$sql= "SELECT * from payment where event_cordinator='$username' ";
$result=$con->query($sql);
if($result)
	{   
		while($row=mysqli_fetch_assoc($result)){
			
		
	

?>
<tr>
<td><?php echo $row['payment_id']; ?> </td>
<td><?php echo $row['customer_email']; ?> </td>
<td><?php echo $row['program_type']; ?> </td>
<td><?php echo $row['package']; ?> </td>
<td><?php echo $row['hall_no']; ?> </td>
<td><?php echo $row['program_date']; ?> </td>
<td><?php echo $row['program_time']; ?> </td>

<td><?php echo $row['requirement']; ?> </td>

 
</tr>
<?php
		}
	}
?>

</table>


</br>
<div class="row_2">
                <a href="logged_out_employee.php" class="button-intro">Logout</a> 
        </div>
		</br>
		<div class="row_2">
                <a href="index.php" class="button-intro">Home</a> 
        </div>
		
	
</div>		
</body>
</html>