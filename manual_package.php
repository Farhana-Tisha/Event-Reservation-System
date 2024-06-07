<html>
<head>
<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<title>Event Planning Management</title>
<body>
<form method="post" action="program_details.php">
<div class="bg-image">
<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Manual Package Details</font></h1> 
		</div>

<div class="columns">

		
  <div class="col_1" >
  
  <p>Input total number of guests: <input type="number" name="person" value=""</p>
	<p>Input your Decor budget: <input type="number" name="decor" value=""></p>	
	<p>Select your required options: </p>
	<p><input type ="checkbox" name="checkboxName[]" value ="3"/>Lighting</p>
	<p><input type ="checkbox" name="checkboxName[]" value ="4"/>Music</p>
	<p><input type ="checkbox" name="checkboxName[]" value ="5"/>Dancing floor</p>
	<p><input type ="checkbox" name="checkboxName[]" value ="6"/>Photography</p>
	<p><input type ="checkbox" name="checkboxName[]" value ="7"/>Photo booth</p>
	<p><input type ="checkbox" name="checkboxName[]" value ="8"/>Videography</p>
	<p><input type ="checkbox" name="checkboxName[]" value ="9"/>Staff Service</p>
  
    </div>


 </div>
     
  <div class="row_2" >

       <input class="button" type="submit" value="choice">  
   		</div>  

</div>  

</div>  

</div>
</form>
</body>
</html>	
<?php
session_start();


?>	