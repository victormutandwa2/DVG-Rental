  <?php
  
    include 'sqlSetup.php';
    $cityQ = 'SELECT DISTINCT(city) FROM branch';
       $branchQ = 'SELECT streetaddress FROM branch';

   $queryCity = mysqli_query($link, $cityQ);
   $queryBranch = mysqli_query($link, $branchQ);

   $arrayC = array();
   $arrayB = array();


   while ($row = mysqli_fetch_array($queryCity)) {
       $arrayC[] = $row['city'];
   }
   
//   while ($row1 = mysqli_fetch_array($queryBranch)) {
       for ($init = 0; $init < count($arrayC); $init++) {
           
           $query = "SELECT streetAddress FROM branch WHERE city='$arrayC[$init]'";
           $queryResult = mysqli_query($link, $query);
           
           while ($row2 = mysqli_fetch_array($queryResult)) {
                      $arrayB[][] = array($arrayC[$init] => $row2['streetAddress']);
           }
           
//           $arrayB[] = $row1[array($queryResult)];
       }
//       $arrayB[] = $row1['streetaddress'];
//   }
//   print_r($arrayB);
//  print_r(count($arrayC));
   
   ?>
<html>
	<head>
		<title>DVG Rental</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/theme.css" />
		<link rel="stylesheet" type="text/css" href="css/homePage.css" />
		<script type="text/javascript" src="javascript/homePage.js"> 
                        //                    <?php 
//                    $js_cities = json_encode($arrayC);
//                    $js_branches = json_encode($arrayB);
//                    
//                    echo "var cities = ". $js_cities.";";
//                    echo "var branches = ". $js_branches.";"; ?>//
//                    
                </script>
		
	</head>
	
	<body>

	<div id="bar">
			<span class="header"><a href="index.php"><img src=img/logo.jpg alt="Logo" height="70"></a></span>
                        <span class="right"><a href="#NOTHING">Contact Us</a></span>
			<span class="right"><a href="#NOTHING">Home</a></span>
			

	</div>
		<div id="gap">     
			Find A Vehicle     
		</div>
        
		<div id="box" >
		
			<form action="chooseVehicle.php" method="POST">
				<div class="menuBar" >
				<table>
					<tr>
						<td class="label">Pick Up:</td>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnCityPickup" name="cityPickup"readOnly/>
							<div class="list" id="cityListPickup">

							</div>
						</div>
						</td>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnBranchPickup" name="branchPickup" readOnly/>
							<div class="list" id="branchListPickup">

							</div>
						</div>
						</td>
						
						<td> <input id="startDateSelect" type="date" class="btn" name="startDate"/> </td>
						<td colspan=2> <input type="submit" value="Search" id="submit" name="submit"/> </td> 	
						
						
						<!--
						Start date #PHP
						-->
						<?php
                           if(isset($_POST["submit"])){
							$_SESSION["var4"]=$_POST["startDate"];
						   }
						?>
					</tr>
				</table>
				</div>
				<div class="menuBar">
				<table>
					<tr>
					<td class="label">&nbsp;Return:</td>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnCityReturn" name="cityReturn" readOnly/>
				
								
								<div class="list" id="cityListReturn">

							</div>
						</div>
						</td>
						<td>
						<div class="dropdown">
							<input class="btn" id="btnBranchReturn" name="branchReturn" readOnly/>
							<div class="list" id="branchListReturn">

							</div>
						</div>
						</td>
						<td> <input id="endDateSelect" type="date" class="btn" name="endDate"/> </td>
						<!--
						END date #PHP

						-->
						<?php
                           if(isset($_POST["submit"])){
						   $_SESSION["var5"]=$_POST["endDate"];
						   }
							
						?>
						
					</tr>
				</table>
				</div>
			</form>	
		</div>
		<div id="bar1">

		</div>

		</body>
</html>
