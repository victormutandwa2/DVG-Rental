<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include 'sqlSetup.php';
//session_start();



?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Select a vehicle </title>
         <link rel="stylesheet" type="text/css" href="css/theme.css" />
         <link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
    </head>
    
    <body>
        <div id="bar">
			<span class="header"><a href="index.php"><img src=img/logo.jpg alt="Logo" height="70"></a></span>
                        <span class="right"><a href="#NOTHING">Contact Us</a></span>
			<span class="right"><a href="NOTHING">Vehicles</a></span>
			
                        <span class ="right"><a href="index.php">Home</a></span>

	</div>
        
        <div id="gap">
            
          Choose Vehicle
            
        </div>
            <?php 
            $carQuery = mysqli_query($link,'SELECT model, type,year, img,ppd FROM cars WHERE branchID = "1"'); ?>
        
              <div id="summary">          
                  <a> Rental Summary </a>
                  <li> </li>
                  
            </div>
        
        <div id="cars" >
            
            <div id="menuBar" >
            <a href="#All">All</a>
            <a href="#Sedan">Sedan</a>
            <a href="#4x4">4X4</a>
            <a href="#Coupe">Coupe</a>
            <a href="#Hatchback">Hatchback</a>
            </div>
         
         
            
<<<<<<< HEAD
            <script src="javascript/clickableRow.js"></script>
            <table>
               <?php foreach ($carQuery as $cars): ?>

                <tr class = 'clickableRow'> 
                    <td> <a href="carModel"> <?php echo $cars['model']; ?>  </a>
                        <br> <?php echo $cars['year']; ?> </br></td>
                    <td> <a>   <?php echo $cars['type'];?> </a> </td>
                    
                    
                    <td>    
                        <img src= "<?php echo $cars['img']; ?>" height="150" width ="200" />
                         </td>
                </tr>
=======

            
            <table>
               <?php foreach ($carQuery as $cars): ?>
                 
                <tr class = "carBox" onclick="document.location='Checkout-proj.php';">
                     <form method="POST" action="Checkout-proj.php">
                      <input type="hidden" name="carID" value="carID">

                    <td> <a href="Checkout-proj.php" name="carModel"> <?php echo $cars['model']; ?>  </a>
                        
                        <br><a name="year"> <?php echo $cars['year']; ?> </a> </br></td>
                    <td> <a name="type">   <?php echo $cars['type'];?> </a> </td>
                    <td> <a name="ppd"> $<?php echo $cars['ppd']; ?>/day </a> </td>                  
                    
                    <td>    
                            <img type="image" src="<?php echo $cars['img']; ?>" height="150" width ="200"> 
                     </td>
                     </input>
                 </form>
                </tr>
                     
              
>>>>>>> 05aa4a9d772a06343c3ad0037bf2d9e4bb809bbc
                     <?php endforeach; ?>
               
            </table>
                       
        </div>
       
      
            
      
          
        
        <?php
        // put your code her
        // 
        ?>
<div id="bar1">

</div>

		</body>
</html>
