<?php
include('connect.php');
session_start();

$username=$_SESSION['email'];

$sql="SELECT customer_id,email FROM customer where email = '$username' LIMIT 1";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
$customer_id=$row['customer_id'];
$_SESSION['customer_id']=$customer_id;
?>
<html>
<head>
<title>Event Planning Management</title>

<link rel="stylesheet"type="text/css"href="login.css"/>
</head>
<body>

<div class="bg-image-intro">

<form method="post" action="checkpass.php">

<div class="row_1">
		<p><font color="black" face="Bradley Hand ITC">New Password : <input type="password" name="password" placeholder="6 digit password" minlength="6" value=""required></font></p></br>
		<p><font color="black" face="Bradley Hand ITC">Confirm Password : <input type="password" name="confpassword" placeholder="6 digit password" minlength="6" value=""required></font></p></br>
		
		
</div>

<div class="row_2">
	<input class="button" type="submit" value="Reset">
</div>

</form>
	
</div>	
	
	
	
</body>
</html>
