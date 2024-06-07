<?php
session_start();

?>


<html>
<head>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<title>Event Planning Management</title>
<body>
<form method="post" action="otp_match_payment.php">
<div class="bg-image">



<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">OTP Information</font></h1> 
		</div>

<div class="columns">

		


  <div class="col_1" >
    
    <p><font color="black" face="Bradley Hand ITC">Enter your OTP : <input type="number" name="otp" value=""required></font></p></br>
	</div>


 </div>
     
  <div class="row_2" >

       <input class="button" type="submit" value="submit">  
   		</div>
		</div>  

</div>  

</div>
</form>
</body>
</html>