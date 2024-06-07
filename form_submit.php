
<?php     

include('connect.php');


session_start();






    $customer_id=0;
	$customer_name=$_POST['name'];
	
	
	
	$insert_query1="insert into customer(name,address,email,phone,password) values('".$_POST['name']."', '".$_POST['address']."', '".$_POST['email']."', '".$_POST['phone']."','".md5($_POST['password'])."')"; 
	

    	
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
<h1><font color="black" face="Bradley Hand ITC"><br>Thanks for signing up!</br></font></h1>
</div>
<div class="container"> 
<p>
<h2><font color="black" face="Bradley Hand ITC">We are glad that you joined us.</font></h2>
<h2><font color="black" face="Bradley Hand ITC">Please login for booking us.</font></h2>
</p>
<div class="row_2">
                <a href="login.php" class="button-intro">Login</a> 
        </div>

	
</div>	

</div>		
</body>
</html>
