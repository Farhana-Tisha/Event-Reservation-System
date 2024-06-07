

<html>
<head>

<link rel="stylesheet"type="text/css"href="package.css"/>
</head>
<title>Event Planning Management</title>
<body>
<form method="post" action="package.php">

<div class="bg-image">
<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Choose your Banquet</font></h1> 
		</div>

<div class="columns">

		
<div class="col" >
   <img class="image" src="im/img1.jpg"/>	
 <p><button class="button" name="hall" type="submit" value="hall-1">Hall-1</button></p>
		
</div>

  <div class="col" >
   <img class="image" src="im/img2.jpg"/>	
 <p><button class="button" name="hall" type="submit" value="hall-2">Hall-2</button></p>
		
</div>


 <div class="col" >
   <img class="image" src="im/img3.jpg"/>	
 <p><button class="button" name="hall" type="submit" value="hall-3">Hall-3</button></p>
		
</div>
</div>

 </div>
</div>

</form>
</body>
</html>

<?php
session_start();
$_SESSION['program_type']=$_POST['program_type'];
?>