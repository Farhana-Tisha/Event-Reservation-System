<html>
<head>

<link rel="stylesheet"type="text/css"href="customerform.css"/>
</head>
<title>Eventmanagement</title>
<body>
<form method="post" action="check_date.php">
<div class="bg-image">



<div class="container">
 
<div class="row_1" > 
			<h1><font color="black" face="Bradley Hand ITC">Program Details</font></h1> 
		</div>

<div class="columns">

<div class="col_1" >
 <p> <font color="black" face="Bradley Hand ITC">Sorry we're booked on this day! Please try another date</font></p>
    
    <p><font color="black" face="Bradley Hand ITC">Program Date: <input type="date" name="program_date" min="2021-07-26" value=""required></font></p></br>
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
