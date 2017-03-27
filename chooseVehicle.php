<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php

include 'sqlSetup.php';
//session_start();

//$branch = $_POST['branchID'];
    $branch = 1;
    $type = "sedan";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Select a vehicle </title>
         <link rel="stylesheet" type="text/css" href="css/theme.css" />
         <link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
         <script src="javascript/btnAction.js" type="text/javascript"></script>
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
            $carQuery = mysqli_query($link,"SELECT model, type,year, img,ppd FROM cars WHERE branchID = '$branch'"); ?>
        
<!--              <div id="summary">          
                  <a> Rental Summary </a>
                  <li> </li>
                  
            </div>-->
        
        <div id="cars" >
            
            <div id="menuBar" >
            <a href=chooseVehicle.php id ="myBtn" value="All">All</a>           
            <a href="#Sedan" id = "myBtn" value = "Sedan">Sedan</a>
            <a href="#4x4" id = "myBtn" value = "SUV">SUV</a>
            <a href="#Coupe" id = "myBtn" value = "Coupe">Coupe</a>
            <a href="#Hatchback" id = "myBtn" value ="Hatchback">Hatchback</a>
            </div>
         
         
            
            <script type="text/javascript" src="javascript/clickableRow.js"></script>
            <table>
               <?php foreach ($carQuery as $cars): ?>
                  <form method="POST" action="Extras.php">
                <tr class = 'clickableRow'> 
                    <td> <a href="carModel" name="carModel"> <?php echo $cars['model']; ?>  </a>
                        
                        <br><a name="year"> <?php echo $cars['year']; ?> </a> </br></td>
                    <td> <a name="type">   <?php echo $cars['type'];?> </a> </td>
                    <td> <a name="ppd"> $<?php echo $cars['ppd']; ?> </a> </td>                  
                    
                    <td>    
                      
                            <input value="SELECT" type="submit"  style="float: right">
                             <input type="hidden" name="carID" value="carID">

                       
                        <img src= "<?php echo $cars['img']; ?>" height="150" width ="200" />
                     </td>
                </tr>
                 </form>
                     <?php endforeach; ?>
               
            </table>
                       
        </div>
       
      
            
      
          
        
        <?php
        // put your code her
        // 
        ?>
    </body>
</html>
