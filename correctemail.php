<html>
<?php
session_start();

?>
<head>
<title>Event PLanning Management</title>

<link rel="stylesheet"type="text/css"href="login.css"/>
</head>
<body>
<form method="post" action="checkemail.php">



<div class="bg-image-intro">

<div class="container">  

<div class="row_1" > 
			<h2><font color="black" face="Bradley Hand ITC">Enter a correct email address!</font></h2> 
		</div>

        <div class="row_1">
	          <p><font color="black" face="Bradley Hand ITC">Username : <input type="email" name="email" placeholder="Enter your email address"value=""></font></p></br>
			  
              	  
        </div>
          
        <div class="row_2">
                <input class="button" type="submit" value="Next">  
        </div>
		 
  </div>	


</div>

</form>
</body>
</html>
