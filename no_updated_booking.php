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

 <h1> <font color="black" face="Bradley Hand ITC">Sorry we're booked on this day! Please try another date</font></h1>
			<h1><font color="black" face="Bradley Hand ITC">Update Your Booking Details</font></h1> 
		</div>

<div class="col_1">

         <p><font color="black" face="Bradley Hand ITC">Choose your hall:  </font>
					 <input type="radio" name="hall_no" value="hall-1" required> <label>Hall-1 </label>
	                  <input type="radio" name="hall_no" value="hall-2"required><label>Hall-2</label>
					  <input type="radio" name="hall_no" value="hall-3"required><label>Hall-3</label></br></p>
					  
					  
					  
					  <p><font color="black" face="Bradley Hand ITC">Choose your package:  </font></br>
					 <input type="radio" name="package" value="package-1" required> <label>Package-1 (for 100 people) </label></br>
	                  <input type="radio" name="package" value="package-2"required><label>Package-2 (for 100 people)</label></br>
					  <input type="radio" name="package" value="package-3"required><label>Package-3 (for 100 people)</label></br>
					  <input type="radio" name="package" value="package-4"required><label>Package-4 (for 100 people)</label></br></p></br>
		
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