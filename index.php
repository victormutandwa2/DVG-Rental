  <?php
          $server = "mysql.cs.mun.ca";
          $name = "cs3715w17_dfm672";
          $password = "qQTgScX3";
          $database = "cs3715w17_dfm672";
            session_start();
//            $server =  "localhost";
//            $name = "root";
//            $password = "";
//            $database = "dvg";
            
            $link = new mysqli($server, $name, $password, $database);
            
            if ($link -> connect_error) 
                {
                die('Something went wrong while connecting to MSSQL');
                }
            
  
   
            ?>
        
<html>
	<head>
		<title>DVG Rental</title>

		<link rel="stylesheet" type="text/css" href="css/theme.css" />
		<link rel="stylesheet" type="text/css" href="css/homePage.css" />
		<script type="text/javascript" src="javascript/homePage.js"> </script>
		
	</head>
	
	<body>

	<div id="bar">
			<span class="header"><a href="index.php"><img src=img/logo.jpg alt="Logo" height="70"></a></span>
			<span class="right"><a href="#NOTHING">Vehicles</a></span>
			<span class="right"><a href="#NOTHING">Contact Us</a></span>

	</div>
		<div id="gap">     
			Find A Vehicle     
		</div>
        
		<div id="box" >
		
			<form action="chooseVehicle.php" method="post">
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
							$_SESSION["var1S"]=$_POST["startDate"];
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
						   $_SESSION["var2E"]=$_POST["endDate"];
						   }
							
						?>
						
					</tr>
				</table>
				</div>
			</form>	
		</div>
	</body>
</html>
