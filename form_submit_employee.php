
<?php     

include('connect.php');


session_start();


$insert_query1="insert into event_coordinator(name,address,email,contact,password) values('".$_POST['name']."', '".$_POST['address']."', '".$_POST['email']."', '".$_POST['contact']."','".$_POST['password']."')"; 
	

    	
 if ($con->query($insert_query1) === TRUE) 
{
   
} 
else 
{
    echo "Error: " . $insert_query1 . "<br>" . $con->error; 
}

	
   





mysqli_close($con);
 
?>
<html>
<head>
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<body>

<div class="bg-image" >

<div class="row">
<h1><font color="black" face="Bradley Hand ITC"><br>Successfully Signed Up!</br></font></h1>
</div>
<div class="container"> 
<div class="row_2">
                <a href="index.php" class="button-intro">Logout</a> 
        </div>



	
</div>	

</div>		
</body>
</html>
