<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//
include 'sqlSetup.php';
////session_start();
//
////$branch = $_POST['branchID'];
    $branch = 1;
//    $type = "sedan";
//?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Select a vehicle </title>
                        <meta name="viewport" content="width=device-width, initial-scale=1">

         <link rel="stylesheet" type="text/css" href="css/theme.css" />
         <link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
         <script src="javascript/btnAction.js" type="text/javascript"></script>
    </head>
    
    <body>
        
    
        
        <div id="bar">
			<span class="header"><a href="index.php"><img src=img/logo.jpg alt="Logo" height="70"></a></span>
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
         
         
            

            
            <table>
               <?php foreach ($carQuery as $cars): ?>
                 
                <tr class = "carBox" onclick="document.location='Extras.php';">
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
                     
              
                     <?php endforeach; ?>
               
            </table>
                       
        </div>
       
      
                <div id="bar1">
            
        </div>
      
          
        
        <?php
        // put your code her
        // 
        ?>
    </body>
</html>
