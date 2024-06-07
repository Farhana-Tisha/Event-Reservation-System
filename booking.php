<?php     

include('connect.php');


session_start();
$package=$_SESSION['package'];
$hall=$_SESSION['hall'];
$program_type=$_SESSION['program_type'];
$program_date=$_SESSION['program_date'];
$program_time=$_SESSION['program_time'];
$username= $_SESSION['email'];
$password=$_SESSION['password'];
$requirements= $_POST['requirements'];
	$person_quatity=$_SESSION['person'];
$checkbox_val=$_SESSION['checkboxName'];
$decor_cost=$_SESSION['decor'];

if($package=="manual")
{   
       $sql1 = "SELECT feature_cost FROM manual_package ";
	
	$result=$con->query($sql1);
	if($result)
	{   
		while($row=mysqli_fetch_assoc($result)){

		 $f_cost[]= $row['feature_cost'];
		}
	}
    
	$sum=0;
	$food_cost=$person_quatity*$f_cost[0];
	$sum=$sum+$food_cost;
	if(in_array("3",$checkbox_val))
	{
		$sum=$sum+ $f_cost[2];
	}
	else
	{
		$sum=$sum+0;
	}
	if(in_array("4",$checkbox_val))
	{
		$sum=$sum+ $f_cost[3];
	}
	else
	{
		$sum=$sum+0;
	}
	if(in_array("5",$checkbox_val))
	{
		$sum=$sum+ $f_cost[4];
	}
	else
	{
		$sum=$sum+0;
	}
	if(in_array("6",$checkbox_val))
	{
		$sum=$sum+ $f_cost[5];
	}
	else
	{
		$sum=$sum+0;
	}
	if(in_array("7",$checkbox_val))
	{
		$sum=$sum+ $f_cost[6];
	}
	else
	{
		$sum=$sum+0;
	}
	if(in_array("8",$checkbox_val))
	{
		$sum=$sum+ $f_cost[7];
	}
	else
	{
		$sum=$sum+0;
	}
	if(in_array("9",$checkbox_val))
	{
		$sum=$sum+ $f_cost[8];
	}
	else
	{
		$sum=$sum+0;
	}
	
	$cost=$sum+$decor_cost;
}
else
{
	$sql2 = "SELECT pac_cost FROM package where pac_name='$package' ";
	$result=$con->query($sql2);
	$row=mysqli_fetch_array($result);
    $cost=$row['pac_cost']; 
	$_SESSION['person']=0;
	$_SESSION['checkboxName']=0;
	$_SESSION['decor']=0;
	
}
	
	
	

    $insert_query="insert into booking(customer_email,program_type,package,hall_no,program_date,program_time,cost,requirements) values ('$username' ,'$program_type','$package','$hall', '$program_date', '$program_time','$cost','$requirements')";
	
if ($con->query($insert_query) === TRUE)  
{   if($package=="manual")
	{   $_SESSION['package']="manual";
		header("Location: ./sure_manual.php");}
else
{header("Location: ./sure.php");}
} 
else 
{
    echo "Error: " . $insert_query . "<br>" . $con->error; 
}

$_SESSION['cost']= $cost;
$_SESSION['requirements']=$_POST['requirements'];
mysqli_close($con);
 
?>