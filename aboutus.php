<?php
include('connect.php');


session_start();


$sql= "Select about from about_us ";
$result=$con->query($sql);
$row=mysqli_fetch_assoc($result);

$wr= $row['about'];




?>



<html>
<head>
<title>Event Planning Management</title>

<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<body>

<div class="bg-image">
<div class="columns">
     
    
</div>
<div class="row">
<h1>Greetings!</h1>
</div>
<div class="row">

<p><font color="black" size ="6" face="Bradley Hand ITC"> <?php echo $wr ?></font></p>
<div class="row_2" > 
		<a href="index.php"  class="button">Home </a>
    </div>




</div>
</div>

</body>
</html>