<html>
<head>
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<title>Event Planning Management</title>
<body>
<div class="bg-image">

<div class="row">
<h1><font color="black" face="Bradley Hand ITC"><br>Booking Details</br></font></h1>
</div>

<div class="container">
<div class="row_1">
<table border="2">
<tr>
<td>Serial</td>
<td>Customer email</td>
<td>Program Type</td>
<td>Package</td>
<td>Hall</td>
<td>Program Date</td>
<td>Program Time</td>
<td>Bill</td>
<td>S.Requirements</td>
<td>E.C Name</td>
<td>Reference No(50%)</td>
<td>Screenshot(50%)</td>
<td>Assign E.C</td>
<td>Cancel Booking</td>

<td>Notify for Payment</td>

<td>Screenshot</td>
<td>Reference Number</td>

<script>
function resizeImage(img) {
img.style.width="500px";
img.style.height="500px";
}
function resizeImage1(img) {
img.style.width="100px";
img.style.height="100px";
}
</script>
<?php
include('connect.php');
$sql= "SELECT * from payment ";
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
<td><?php echo $row['cost']; ?> </td>
<td><?php echo $row['requirement']; ?> </td>
<td><?php echo $row['event_cordinator']; ?> </td>
<td><?php echo $row['ref_no']; ?> </td>

<td> <figure id="image-box"> <img src= "/epm/im/<?php echo $row['img']; ?>" width="100" height= "100" class="image-slide" ondblclick="resizeImage1(this)"  onclick="resizeImage(this)"> </figure></td>
 <td><a href="edit.php?id=<?php echo $row['payment_id']; ?>">Assign</a></td>
    <td><a href="delete.php?id=<?php echo $row['payment_id']; ?>">Cancel</a></td>
	
	
	<td><a href="payment_full.php?id=<?php echo $row['payment_id']; ?>">Request</a>
	<a href="pay_done.php?id=<?php echo $row['payment_id']; ?>">Recieved</a>
	</td>
	<td> <figure id="image-box"> <img src= "/epm/im/<?php echo $row['img1']; ?>" width="100" height= "100" class="image-slide" ondblclick="resizeImage1(this)"  onclick="resizeImage(this)"> </figure></td>
<td><?php echo $row['ref_no1']; ?> </td>
</tr>
<?php
		}
	}
	
?>

</table>
</br>
<div class="row_2">
                <a href="logged_out.php" class="button-intro">Logout</a> 
        </div>
		</br>
		<div class="row_2">
                <a href="index.php" class="button-intro">Home</a> 
        </div>


</div>
</div>
</div>
</body>
</html>

