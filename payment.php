<?php
include('connect.php');


session_start();
$cost= $_SESSION['cost'];
$cost1= $cost*0.5;
?>


<html>
<head>
<link rel="stylesheet"type="text/css"href="submit.css"/>
</head>
<body>
<form method="post" action="payment_submit.php">
<div class="bg-image" >

<div class="row">
<h1><font color="black" face="Bradley Hand ITC"><br>For booking confirmation you need to pay 50% advance payment Branch/online banking through BEFTN.</br></font></h1>
<div class="container">
<h1><font color="black" face="Bradley Hand ITC"><br>BEFTN Details</br></font></h1>
<p>
<h2><font color="black" face="Bradley Hand ITC"><br>Beneficiary Name/ Account Title: Event Planning Management System</br> 
Bank Name: ABC Bank Limited</br>
Account Number:1122334455667799</br>
Branch Name: Malibagh Branch</br>
Routing No:123456780</br>
Please put your email address and name in the narration field.</br></font></h2>


<h2><font color="black" face="Bradley Hand ITC">Your total cost:----- <?php echo $cost ?></font></h2>
<h2><font color="black" face="Bradley Hand ITC">Your 50% cost:----- <?php echo $cost1 ?></font></h2>
<h2><font color="black" face="Bradley Hand ITC">Provide your reference number: <input type="number" name="ref_no" minlenght= '11' value="" required ></font></h2>
 
 
 <div class="row_2">
  <label  for="img"> <font color="black" face="Bradley Hand ITC"> Upload an screenshot of payment confirmation:</label>
  <input type="file" id="img" name="img" accept="image/*" required>
  </div>

<div class="row_2">
              <input class="button" type="submit" name="submit" value="Confirm">
        </div>

</div>




</div>	

</div>	
</form>	
</body>
</html>