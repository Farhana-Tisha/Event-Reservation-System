

<html>
<head>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<title>Event Planning Management</title>
<body>
<form method="post" action="hall.php">

<div class="bg-image">
<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Brush Script MT">Choose your Program Type</font></h1> 
		</div>

<div class="columns">

		


  <div class="col_1" >
  
  <p></br>
					  <input type="radio" name="program_type" value="Birthday" required> <label>Birthday </label></br>
	                  <input type="radio" name="program_type" value="Wedding"required><label>Wedding</label></br>
					  <input type="radio" name="program_type" value="Anniversary"required><label>Anniversary</label></br>
					  <input type="radio" name="program_type" value="Engagement"required><label>Engagement</label></br>
					  <input type="radio" name="program_type" value="Party"required><label>Party</label></br>
					  <input type="radio" name="program_type" value="Get Together"required><label>Get Together</label></br>
                      <input type="radio" name="program_type" value="Conference"required><label>Conference</label></p></br> 
		
</div>
</div>

 <div class="row_2" >

       

      
		<input class="button" type="submit" value="next">  
   		</div>  
</div>
</div>
</form>
</body>
</html>
<?php
session_start();

?>