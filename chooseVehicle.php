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
		 <script type="text/javascript" src="javascript/chooseVehicle.js"> </script>
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
    </head>
    
    <body>
        <div id="bar">
			<span class="header"><a href="index.php"><img src=img/logo.jpg alt="Logo" height="70"></a></span>
			<span class="right"><a href="NOTHING">Vehicles</a></span>
			<span class="right"><a href="#NOTHING">Contact Us</a></span>
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
                     <?php endforeach; ?>
               
            </table>
                       
        </div>
       
      
            
      
          
        
        <?php
        // put your code her
        // 
        ?>
    </body>
</html>
