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
                      <script type="text/javascript" src="javascript/backgroundSlide.js"></script>




</head>

<body>
 <div id="bar">
<span class="header"><a href="index.php"><img src="img/logo.jpg" alt="Logo" height="70"></a></span>
                                                <span class="right"><a href="contact.php">Contact Us</a></span>
						<span class ="right"><a href="index.php">Home</a></span>
</div>


<div id="gap">
Recommended Extras

</div>
    
    
    <link rel="stylesheet" href="Checkout-proj.php">
    <form action="Checkout-proj.php" method="POST">
  <input type="submit" id="extraBtn" value="Checkout">
 
      <?php

	  include 'sqlSetup.php';

    $startDate1=$_POST["startDate"];
    $endDate1=$_POST["endDate"];
   
     $car_price=0.0;
		$type_of_car=$_POST["var3"];
		
if ($type_of_car == "Sedan"){
	$car_price=20;
}
 	else if($type_of_car=="HatchBack"){
		$car_price=15;
	}
	else if($type_of_car=="SUV"){
		$car_price=25;
	}
	
	$extras=0.0;
    $num_days=$endDate1-$startDate1;

    $rental_fee=$car_price*$num_days;



?>
   
        
     <div class="imageBox">
    <div class="twoColumn">
<img src="img/childSeat.jpg" alt="childSeat" width="200" height="220" style="margin-left: 5%; margin-top: 5%;">     </div>
<div class="twoColumn"> <br><br><br>
        <p> Ensure your trip is smooth by including a GPS system in your vehicle for $20 per day. <br> </p>
   
        <form action="Checkout-proj.php" method="POST" >
        <input type="checkbox" id="check" name="childSeat" value="childSeat" ></p>
       </form> 
        </div>
         <?php
             function IsChecked($chkname,$value)
    {
        if(!empty($_POST[$chkname]))
        {
            foreach($_POST[$chkname] as $chkval)
            {
                if($chkval == $value)
                {
                    return true;
                }
            }
        
            return false;
         }
      
    }
    if(isset($_POST["childSeat"])){
          $extras+=20;
        }
       else{
              $extras+=0;
            echo" Testing";
        }
            
            ?>
          <div class="twoColumn">
<img src="img/insurance.jpg" alt="insurance" width="200" height="220" align="middle" style="margin-left: 5%; margin-top:5%;">     </div>
    <div class="twoColumn"> <br><br><br>
        <p> Ensure your trip is smooth by including a GPS system in your vehicle for $20 per day. <br> </p>
               
        <form action="Checkout-proj.php" method="POST" > 
         <input type="checkbox" id="check" name="insurance" value="insurance"></p>
         <form>
             <?php
     
    if(IsChecked('insurance','insurance'))
    {
     $extras+=20;
    }
    else{
        $extras+=0;
    }
    
    ?>
    </div>
         
           <div class="twoColumn">
<img src="img/gps.jpg" alt="gps" width="200" height="220" align="middle" style="margin-left: 5%; margin-top:5%;">      </div>
    <div class="twoColumn"> <br><br><br>
        <p> Ensure your trip is smooth by including a GPS system in your vehicle for $20 per day. <br> </p>

        <form action="Checkout-proj.php" method="POST" >
        <input type="checkbox" id="check" name="navigation" value="navigation">    </div>
          </form>
         
    </div>
          <?php
    if(isset($_POST["navigation"])){
          $extras+=20;
     	 
          }
       else{
              $extras+=0;

        }
             
                  
          ?>
         
    </form>
<?php

$before_tax=$extras+$rental_fee;
$taxes=$extras*0.15+$rental_fee*0.15;
$total_tax=$before_tax*1.15;

echo " 
<div class='cart'>
<table>
<h3 >Cart:</h3>
<tr>
Number of days: $num_days 
<br>
Price/day: $ $car_price
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


    

        <div id="bar1">
            
        </div>
      

</body>

</html>