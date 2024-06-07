<?php
include('connect.php');


session_start();


$sql= "Select pac_tperson from package ";
$result=$con->query($sql);
if($result)
	{   
		while($row=mysqli_fetch_assoc($result)){
         $per[]= $row['pac_tperson'];
		}
		
	}


$_SESSION['hall']=$_POST['hall'];


?>

<html>
<head>

<link rel="stylesheet"type="text/css"href="package.css"/>


</head>
<body>
<form method="post" action="program_details.php"> 

<div class="bg-image">

<div class="container">
<div class="row_1" > 
<h1><font color="black" face="Bradley Hand ITC">Choose Your Package</font></h1> 
</div>

 
 
 
 
 <div class="col1" >
 <img class="image" src="im/im1.jpg"/>	
	   <h2><font color="black" face="Bradley Hand ITC">Package 1</h2>	
       <p><font color="black"  face="Bradley Hand ITC"> <?php echo "For ".$per[0]." persons" ?></font></p>		
	   <p><button class="button" name="choice" type="submit" value="package-1">Select</button></p>
        </div>
    
	
 <div class="col1" > 
     
	<img class="image" src="im/im2.jpg"/>	
	<h2><font color="black" face="Bradley Hand ITC">Package 2</h2>
    <h3><font color="black"  face="Bradley Hand ITC"> <?php echo "For ".$per[1]." persons" ?></font></h3>
	<p><button class="button" name="choice" type="submit" value="package-2">Select</button></p>
     
  </div>
  
 <div class="col1" >
  
    <img class="image" src="im/im3.jpg"/>  
    <h2><font color="black" face="Bradley Hand ITC">Package 3</h2>	
    <h3><font color="black"  face="Bradley Hand ITC"> <?php echo "For ".$per[2]." persons" ?></font></h3>
	<p><button class="button" name="choice" type="submit" value="package-3">Select</button></p>
      
  </div>
  
  <div class="col1" >
  
    <img class="image" src="im/im4.jpg"/>  
    <h2><font color="black" face="Bradley Hand ITC">Package 4</h2>	
    <h3><font color="black"  face="Bradley Hand ITC"> <?php echo "For ".$per[3]." persons" ?></font></h3>
	<p><button class="button" name="choice" type="submit" value="package-4">Select</button></p>
      
  
  </div>
 
    <div class="row_2" >

       <p><a href="manual_package.php" class="button" name="choice" value="manual">Custom package</a></p>
   		</div>


  
</div> 
</form> 

</body>
</html>
