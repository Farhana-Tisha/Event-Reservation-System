<?php

include('connect.php');
session_start();



?>
<html>
<head>
<title>Event Planning Management</title>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<body>

<div class="bg-image">

<form method="post" action="check_updated_date.php">
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Update Your Booking Details</font></h1> 
		</div>

<div class="col_1">

         <p><font color="black" face="Bradley Hand ITC">Choose your hall:  </font>
					 <input type="radio" name="hall_no" value="hall-1" required> <label>Hall-1 </label>
	                  <input type="radio" name="hall_no" value="hall-2"required><label>Hall-2</label>
					  <input type="radio" name="hall_no" value="hall-3"required><label>Hall-3</label></br></p>
					  
					  
					  
					  
		
		<p><font color="black" face="Bradley Hand ITC">Program Date : <input type="date" name="program_date" value=""required></font></p></br>
		<p><font color="black" face="Bradley Hand ITC">Program Time : <input type="time" name="program_time" value=""required></font></p></br>
</div>

<div class="row_2">
	<input class="button" type="submit" value="Update">
</div>

</form>
	
</div>	
	
	
	
</body>
</html>
