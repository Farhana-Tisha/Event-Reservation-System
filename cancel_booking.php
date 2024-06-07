<?php
include('connect.php');
session_start();
$booking_id= $_SESSION['booking_id'];
 $sql2= "DELETE FROM booking where booking_id='$booking_id'";	
 if ($con->query($sql2) === TRUE) 
{
   
} 
else 
{
    echo "Error: " . $sql2 . "<br>" . $con->error; 
}

 
mysqli_close($con);
?>
<html>
<head>
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<body>
<form method="post" action="comment.php">
<div class="bg-image" >

<div class="row">
<h1><font color="black" face="Bradley Hand ITC"><br>Booking is canceled!</br></font></h1>
</div>
<div class="container"> 
<p>

<h2><font color="black" face="Bradley Hand ITC">Please login again for booking us.</font></h2>
</p>
<div class="row_2">
                <a href="login.php" class="button-intro">Login</a> 
        </div>
    </br>
		<div class="row_2">
                <a href="index.php" class="button-intro">Home</a> 
        </div>
	
    

	
</div>	

</div>	
</form>	
</body>
</html>
