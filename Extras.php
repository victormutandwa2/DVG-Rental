<!--
Extras  page for DVG car rental 
author @Victor Mutandwa

-->

<!DOCTYPE html>	
<html>
<head>

<title>Extras</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="css/theme.css"/>
<link rel ="stylesheet" type="text/css" href="css/extras.css"/>



</head>

<body>
 <div id="bar">
<span class="header"><a href="index.php"><img src="img/logo.jpg" alt="Logo" height="70"></a></span>
						<span class="right"><a href="#NOTHING">Contact Us</a></span>
						<span class ="right"><a href="index.php">Home</a></span>
</div>


<div id="gap">
Recommended Extras

</div>
    
    
    <link rel="stylesheet" href="Checkout-proj.php">
    <form action="Checkout-proj.php" method="POST">
  <input type="submit" id="extraBtn" value="Checkout">
 

        <?php
//session_start();
include 'sqlSetup.php';

//
//$startDate1=$_SESSION["var4"];
//$endDate1=$_SESSION["var5"];
//
//
//$num_days=$endDate1-$startDate1;
$rental_fee=20*7;
//
//$quant=$_SESSION["var1"];
//$quant1=$_SESSION["var2"];
//$quant2=$_SESSION["var3"];
//

$extras=1*25+1*45+1*20;
$before_tax=0+$rental_fee;
$taxes=$extras*0.15+$rental_fee*0.15;
$total_tax=$before_tax*1.15;

echo " 
<div class='cart'>
<table>
<h3 >Cart:</h3>
<tr>
Number of days: 7; 
<br>
Price/day: $ 20.00 
</tr>
<tr><br>

Extras: $ $extras
</tr>
<tr><br>
Taxes(15%): $ $taxes <br>
<b>________________________</b>	
</tr>
<tr><br><b>TOTAL: $ $total_tax  </b></tr>
</table>
</div>
"
?>
   
        
     <div class="imageBox">
    <div class="twoColumn">
<img src="img/childSeat.jpg" alt="childSeat" width="200" height="220" style="margin-left: 5%; margin-top: 5%;">     </div>
<div class="twoColumn"> <br><br><br>
        <p> Ensure your trip is smooth by including a GPS system in your vehicle for $20 per day. <br> </p>
             <input type="checkbox" id="check" name="childSeat" value="childSeat" ></p>
    </div>
         
          <div class="twoColumn">
<img src="img/insurance.jpg" alt="insurance" width="200" height="220" align="middle" style="margin-left: 5%; margin-top:5%;">     </div>
    <div class="twoColumn"> <br><br><br>
        <p> Ensure your trip is smooth by including a GPS system in your vehicle for $20 per day. <br> </p>
             <input type="checkbox" id="check" name="insurance" value="insurance"></p>
    </div>
         
           <div class="twoColumn">
<img src="img/gps.jpg" alt="gps" width="200" height="220" align="middle" style="margin-left: 5%; margin-top:5%;">      </div>
    <div class="twoColumn"> <br><br><br>
        <p> Ensure your trip is smooth by including a GPS system in your vehicle for $20 per day. <br> </p>
<input type="checkbox" id="check" name="navigation" value="navigation">    </div>
    

    </div>
    
    </form>

   


    

        <div id="bar1">
            
        </div>
      

</body>

</html>