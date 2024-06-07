<?php

include('connect.php');
session_start();

	$id= $_GET['id'];

$sql1="select * from payment where payment_id='$id'";
$result=$con->query($sql1);
	$row=mysqli_fetch_array($result);
	if(isset($_POST['update']))
	{
    $ack = $_POST['ack'];
    
	$sql="UPDATE payment SET ack='$ack' where payment_id='$id'";

	if ($con->query($sql) === TRUE)  
{
    header("Location: ./payment_view.php");
} 
else 
{
   echo "Error: " . $sql . "<br>" . $con->error; 
}

	}
mysqli_close($con);

?>
<html>
<head>
<title>Event Planning Management</title>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<body>

<div class="bg-image">

<form method="post">
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Payment confirmation</font></h1> 
		</div>

<div class="col_1">

        
					  
					  
					  
					
		
		<p><font color="black" face="Bradley Hand ITC">Input payment recieving status (yes/no) : <input type="textbox" name="ack" value="<?php echo $row['ack']?>"required></font></p></br>
		
</div>

<div class="row_2">
	<input class="button" name="update" type="submit" value="Update">
</div>

</form>
	
</div>	
	
	
	
</body>
</html>
