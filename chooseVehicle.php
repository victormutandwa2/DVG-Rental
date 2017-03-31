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
$city = $_GET['city'];
    
    $branchQ = mysqli_query($link, "SELECT branch_ID FROM branch WHERE city='$city'");
    while ($id = mysqli_fetch_assoc($branchQ)) {
        $branch = $id['branch_id'];
    }
  


	
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Select a Vehicle </title>
          <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" type="text/css" href="css/theme.css" />
         <link rel="stylesheet" type="text/css" href="css/chooseVehicle.css"/>
                               <script type="text/javascript" src="javascript/backgroundSlide.js"></script>
							   <script type="text/javascript" src="javascript/chooseVehicle.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    
    <body>
        
    
        
        <div id="bar">
			<span class="header"><a href="index.php"><img src=img/logo.jpg alt="Logo" height="70"></a></span>
                        <span class="right"><a href="contact.php">Contact Us</a></span>
			   <span id="test" class ="right"><a href="index.php">Home</a></span>

	</div>
        
        <div id="gap">
            
          Choose Vehicle
            
        </div>
           
        
        
            
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
</script>

        <div id="cars" >
           
            <div id="menuBar" >
       
                   
            <form method="GET">
             <input type="submit" name="type" id = "myBtn" value ="All"></input>
              <input type="submit" name="type" id = "myBtn" value ="Sedan" ></input>
               <input type="submit" name="type" id = "myBtn" value ="SUV"></input>
                <input type="submit" name="type" id = "myBtn" value ="Coupe"></input>
                <input type="submit" name="type" id = "myBtn" value ="Hatchback"></input> 

				<input type="hidden" name="city" value="<?php echo $_GET["city"] ?>">
				<input type="hidden" name="startDate" value="<?php echo $_GET["startDate"] ?>">
				<input type="hidden" name="endDate" value="<?php echo $_GET["endDate"] ?>">
            </form>
                
            </div>          
         <?php 
                
            if ($_GET['type'] == "" || $_GET['type'] == "All") {                                      
                $carQuery = mysqli_query($link,"SELECT model, type,year, img,ppd FROM cars WHERE branchid='$branch'");
            }
            else {
                $type = $_GET['type'];
				$carQuery = mysqli_query($link,"SELECT model, type,year, img,ppd FROM cars WHERE branchid='$branch' AND type='$type'");
            }
            
            ?>

         
        
            
            
            <table>
               <?php foreach ($carQuery as $cars): ?>
                 
                <tr class = "carBox">
                     <form id="carForm" method="POST" action="Extras.php">
                      <input type="hidden" name="carID" value="carID">       </input>

					    <input type="hidden" name="model" value="<?php echo $cars['model'];?>"> </input>
					   <input type="hidden" name="year" value="<?php echo $cars['year'];?>"> </input>
                     <input type="hidden" name="type" value="<?php echo $cars['type'];?>"> </input> 
                     <input type="hidden" name="ppd" value=<?php echo $cars['ppd']; ?>> </input>   
					 	<input type="hidden" name="city" value="<?php echo $_GET["city"] ?>">
					<input type="hidden" name="startDate" value="<?php echo $_GET["startDate"] ?>">
					<input type="hidden" name="endDate" value="<?php echo $_GET["endDate"] ?>">
					  

                          <td> <a class="carLink"><?php echo $cars['model']; ?><a/>                        
                        <br><a> <?php echo $cars['year']; ?> </a> </br></td>
                    <td> <a>   <?php echo $cars['type'];?> </a> </td>
                    <td> <a> $<?php echo $cars['ppd']; ?>/day </a> </td>   
                    <td>    
                            <img type="image" src="<?php echo $cars['img']; ?>" height="150" width ="200"> 
                     </td>
					 
					 <td>
						<input id="carSelect" type="submit" value="Select" />
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
