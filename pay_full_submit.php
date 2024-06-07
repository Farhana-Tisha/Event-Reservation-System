<?php

include('connect.php');
session_start();

	$id= $_GET['id'];

$sql1="select * from payment where payment_id='$id'";
$result=$con->query($sql1);
	$row=mysqli_fetch_array($result);
	if(isset($_POST['update']))
	{
    $img1 = $_POST['img1'];
	$ref_no1= $_POST['ref_no1'];
    
	$sql="UPDATE payment SET  img1='$img1' , ref_no1='$ref_no1' where payment_id='$id'";

	if ($con->query($sql) === TRUE)  
{
    header("Location: ./booked_list.php");
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
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<body>

<div class="bg-image" >
<form method="post">
<div class="row">

<div class="container">
<h1><font color="black" face="Bradley Hand ITC"><br>BEFTN Details</br></font></h1>
<p>
<h2><font color="black" face="Bradley Hand ITC"><br>Beneficiary Name/ Account Title: Event Planning Management System</br> 
Bank Name: ABC Bank Limited</br>
Account Number:1122334455667799</br>
Branch Name: Malibagh Branch</br>
Routing No:123456780</br>
Please put your email address and name in the narration field.</br></font></h2>


<h2><font color="black" face="Bradley Hand ITC">Provide your reference number: <input type="number" name="ref_no1" minlenght= '11' value="" required ></font></h2>
 
 
 <div class="row_2">
 <label  for="img"> <font color="black" face="Bradley Hand ITC"> Upload an screenshot of payment confirmation:</label>
  <input type="file" id="img" name="img1" accept="image/*" required>
  </div>

<div class="row_2">
             <input class="button" name="update" type="submit" value="Confirm">
        </div>

</div>




</div>	
</form>
</div>	
	
</body>
</html>