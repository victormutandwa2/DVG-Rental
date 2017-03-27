<!--
Extras  page for DVG car rental 
author @Victor Mutandwa

-->

<!DOCTYPE html>	
<html>
<head>

<title>Extras:</title>
<link rel="stylesheet" type="text/css" href="theme.css">
<link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>
<style type="text/css">

div.gap1{
    font-size : 40px;
    font-family : Georgia, Serif;
    color : white;
    text-align : left;
    margin-top: 2%;
    margin-left: 5%;
    margin-right: 5%;
    background-color : maroon;
}

</style>
</head>

<body>
 <div id="bar">
<span class="header"><a href="index.php"><img src="img/logo.jpg" alt="Logo" height="70"></a></span>
						<span class="right"><a href="#NOTHING">Contact Us</a></span>
						<span class="right"><a href="#NOTHING">Vehicles</a></span>								
						<span class ="right"><a href="index.php">Home</a></span>
</div>
<?php
session_start();

?>

<div class="gap1">
Recommended extras

</div>
						<span class ="right"><a href="Checkout-proj.html"> No thanks,Proceed to checkout"</a></span>
<center>
<div class="desc"> 
<p>
<br>
<table>
	<tr>
		<h3>Navigation System </h3>
               <br>Duration:<br>
               <form name="form1" method="POST">
               <input type="Number" name="quant" min="1" max="20" value="0">
               <br>	
	               <b>$25/day</b>
		</form>
        <?php

       if(isset($_POST["checkout"])){
	 $_SESSION["var1"]=$_POST["quant"];
          
         ?>
     <p>
		<img src="C:\Users\Dr Vic\Documents\CS3715-Assignments W17\carRental\gps.jpg" height="200" width="200">	
	</p>
		Dont wanna get lost?<br>
	    Stay on track with one of the best GPSs!
	</tr>
<tr>
<h3>Car seat</h3>
<p>
<br><b>Quantity:</b><br>
<form name="form2" method="POST" >
<input type="Number" name="quant1" min="1" max="5" value="0">
<br>
</form>
<img src="carseat.jpg" height="250" width="200">
<br> <b>$45/seat</b>
</p>

   <?php

     	if(isset($_POST["checkout"])){
	 $_SESSION["var2"]=$_POST["quant1"];
          
     ?>



This provides extra protection for children<br> under the age of 5.	
</tr>
<tr>
<h3>Additional Driver</h3><br>
<form name="form3" method="POST"> 	
 <input type="Number" name="quant2" min="1" max="5" value="0">
 <br><b>$20/per driver.</b>
</form>
 <p>

   <?php

       	if(isset($_POST["checkout"])){
	 $_SESSION["var3"]=$_POST["quant2"];
          
     ?>
 <img src="keys.jpg" height="200" width="200">	
 
 </p>

 You can share the driving on<br>
 long journeys and enjoy the peace <br>
 of mind that someone else is insured<br>
  to drive if needed.
</tr>



</table>	

<br>
<div class="submitbutt">
<form action="Checkout-proj.html">
<input type="submit" name="checkout" value="Continue!">
</form>
</div>

<div id="bar1">
</div>
</p>
</center>
</body>
</html>