<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//
include 'sqlSetup.php';
//
////$branch = $_POST['branchID'];
    $branchLoc = $_POST["branchPickup"];
    
    $branchQ = mysqli_query($link, "SELECT branchID FROM branch WHERE streetaddress='$branchLoc'");
    while ($id = $branchQ) {
        $branch = $id;
    }
    
    
    $startDate = $_POST["startDate"];
    $endDate = $_POST["endDate"];
    print_r($branch);
    "<br>";
    print_r($endDate);
    //    $type = "sedan";
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Select a vehicle </title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="css/theme.css" />
         <link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>
<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>-->
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
           
<!--              <div id="summary">          
                  <a> Rental Summary </a>
                  <li> </li>
                  
            </div>-->
        
        
<!--            
 <script type="text/javascript">
   function showCarType() 
    {
        $.ajax({
            url: "",
            type: "",
            data: { 'type': type},                   
            success: function()
                        {
                            alert("Success");                                    
                        }
        });
    }
    
    success: function(data){
   alert(data); // this will print you any php / mysql error as an alert                                    
}
</script>-->

        <div id="cars" >
           
            <div id="menuBar" >
       
                   
            <form>
             <input type="submit" name="type" id = "myBtn" value ="All"></input>
              <input type="submit" name="type" id = "myBtn" value ="Sedan" ></input>
               <input type="submit" name="type" id = "myBtn" value ="SUV"></input>
                <input type="submit" name="type" id = "myBtn" value ="Coupe"></input>
                <input type="submit" name="type" id = "myBtn" value ="Hatchback"></input>              
            </form>
                
            </div>          
         <?php 
                
            if ($_GET['type'] == "" || $_GET['type'] == "All") {                                      
                $carQuery = mysqli_query($link,"SELECT model, type,year, img,ppd FROM cars WHERE branch='$branch'");
            }
            else {
                $type = $_GET['type'];
                $carQuery = mysqli_query($link,"SELECT model, type,year, img,ppd FROM cars WHERE branchID='$branch' AND type='$type'");
            }
            
            ?>

         
        
            
            
            <table>
               <?php foreach ($carQuery as $cars): ?>
                 
                <tr class = "carBox" onclick="document.location='Extras.php';">
                     <form method="POST" action="Extras.php">
                      <input type="hidden" name="carID" value="carID">       </input>

                    <td> <input href="Extras.php" name="carModel" value="<?php echo $cars['model']; ?>" readonly>  </input>
                        
                        <br><input name="year" value="<?php echo $cars['year'];?>" readonly> </input> </br></td>
                    <td> <input name="type" value="<?php echo $cars['type'];?>" readonly> </input> </td>
                    <td> <input name="ppd" value="$".<?php echo $cars['ppd']; ?>."/day" readonly> </input> </td>                  
                    
                    <td>    
                            <img type="image" src="<?php echo $cars['img']; ?>" height="150" width ="200"> 
                     </td>

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
