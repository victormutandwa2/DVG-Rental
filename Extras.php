<!--
Extras  page for DVG car rental 
author @Victor Mutandwa

-->

<!DOCTYPE html>	
<html>
<head>

<title>Extras</title>
<link rel="stylesheet" type="text/css" href="css/theme.css"/>
<link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>


</head>

<body>
 <div id="bar">
<span class="header"><a href="index.php"><img src="img/logo.jpg" alt="Logo" height="70"></a></span>
						<span class="right"><a href="#NOTHING">Contact Us</a></span>
						<span class="right"><a href="#NOTHING">Vehicles</a></span>								
						<span class ="right"><a href="index.php">Home</a></span>
</div>


<div id="gap">
Recommended Extras

</div>
    
    
    
<!--    <span class ="right"><a href="Checkout-proj.html"> No thanks,Proceed to checkout"</a></span>
<center>-->
        
    <style> 
        #box {
    background-color: #D1D0CE;
    margin-left: 5%;
    margin-bottom: 5%;
    width: 90%;
    height: 800px;
    overflow : scroll;
        }
        </style>
    
    
    
           <div id="box">          
            
            <table>
    
                 
                <tr>
                     <form method="POST" action="Checkout-proj.php">
                         <td colspan="5" style="align-content:center;">  
                      <input type="checkbox" name="navigation" value="navigation" style="float:right;">
                      <label style="color: red; float: right;">Navigation</label>
                         </td>
                </tr>
                <tr>
                    <td style="align-content: center;">
                      <input type="checkbox" name="childSeat" value="childSeat" style="float:right;">
                      <label style="color: red; float: right;">Child Seat</label>
                    </td>
                             
                </tr>
                      
<!--                    <td> <a href="Checkout-proj.php" name="carModel">  </a>
                        
                        <br><a name="year">  </a> </br></td>
                    <td> <a name="type">  </a> </td>
                    <td> <a name="ppd"> </a> </td>                  
                    
                    <td>    
                            <img type="image" src="" height="150" width ="200"> 
                     </td>
                     </input>-->
                 </form>
                
                   
               
            </table>
                       
        </div>
    
    
<!--<div> 
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

     <p>
		<img src="img\gps.jpg" height="200" width="200">	
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
<img src="img/carseat.jpg" height="250" width="200">
<br> <b>$45/seat</b>
</p>




This provides extra protection for children<br> under the age of 5.	
</tr>
<tr>
<h3>Additional Driver</h3><br>
<form name="form3" method="POST"> 	
 <input type="Number" name="quant2" min="1" max="5" value="0">
 <br><b>$20/per driver.</b>
</form>
 <p>


 <img src="img/keys.jpg" height="200" width="200">	
 
 </p>

 You can share the driving on<br>
 long journeys and enjoy the peace <br>
 of mind that someone else is insured<br>
  to drive if needed.
</tr>



</table>	-->

<br>
<div class="submitbutt">
<form action="Checkout-proj.php">
<input type="submit" name="checkout" value="Continue!">
</form>
</div>
 <div id="bar1">

</div>

</p>
</center>
</body>

</html>
