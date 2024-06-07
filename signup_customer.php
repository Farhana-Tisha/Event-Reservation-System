<?php
session_start();

?>


<html>
<head>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<title>Event Planning Management</title>
<body>
<form method="post" action="form_submit.php">
<div class="bg-image">



<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Customer's Information</font></h1> 
		</div>

<div class="columns">

		


  <div class="col_1" >
    
    <p><font color="black" face="Bradley Hand ITC">Your Name : <input type="text" name="name" value=""required></font></p></br>
	<p><font color="black" face="Bradley Hand ITC">Address : <input type="text" name="address" value=""></font></p></br>
	<p><font color="black" face="Bradley Hand ITC">Phone Number : <input type="tel" name="phone" placeholder="01XXXXXXXXX" pattern="[0-9]{11}" value=""required></font></p></br> 
	
	<p><font color="black" face="Bradley Hand ITC">Email : <input type="email" name="email" value=""required></font></p></br>   
	<p><font color="black" face="Bradley Hand ITC">Password : <input type="password" name="password" placeholder="6 digit password" minlength="6" value=""required></font></p></br>

	
	
	
  </div>


 </div>
     
  <div class="row_2" >

       <input class="button" type="submit" value="submit">  
   		</div>      
	<div class="row_1">
                <a href="login.php" class="button-intro">Already have an account? Login</a> 
        
      

   		</div>     

</div>  

</div>  

</div>
</form>
</body>
</html>
