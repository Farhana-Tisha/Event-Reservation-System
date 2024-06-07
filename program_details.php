<html>
<head>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<title>Event Planning Management</title>
<body>
<form method="post" action="check_date.php">
<div class="bg-image">



<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Program Details</font></h1> 
		</div>

<div class="columns">

<div class="col_1" >
 
    
    <p><font color="black" face="Bradley Hand ITC">Program Date: <input type="date" name="program_date" value=""required></font></p></br>
	<p><font color="black" face="Bradley Hand ITC">Program Time: <input type="time" name="program_time" value=""required></font></p></br>
	 
  			  
  </div>
</div>
<div class="row_2" >

       <input class="button" type="submit" value="Book">  
   		</div>      
</div>
</div>
  </form>
</body>
</html>
<?php
session_start();
if (isset($_POST['choice']))
{
$_SESSION['package']=$_POST['choice'];
}
else{$_SESSION['package']="manual";}
if(isset($_POST['checkboxName']))
{ 
    $_SESSION['checkboxName'] = $_POST['checkboxName'];
}
else
{
	 $_SESSION["checkboxName"]=0;
}


$_SESSION['person']=$_POST['person'];
$_SESSION['decor']=$_POST['decor'];



?>