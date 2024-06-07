<?php     

include('connect.php');
$username= $_SESSION['email'];
$comment=$_POST['comment'];
session_start();
	
	$insert_query1="insert into survey (comment) values('$comment')"; 
	

    	
 if ($con->query($insert_query1) === TRUE) 
{
   header("Location: ./index.php");
} 
else 
{
    echo "Error: " . $insert_query1 . "<br>" . $con->error; 
}


mysqli_close($con);
 
?>