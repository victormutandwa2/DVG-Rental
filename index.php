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
		
			<div id="menuBar" >
			<form action="chooseVehicle.php" method="post">
				<table>
					<tr>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnCity" readOnly/>
							<div class="list" id="cityList">

							</div>
						</div>
						</td>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnBranch" readOnly/>
							<div class="list" id="branchList">

							</div>
						</div>
						</td>
						<td> <input id="startDateSelect" type="date" class="btn" placeholder="YYYY-MM-DD (Start)"/> </td>
						<td> <input id="endDateSelect" type="date" class="btn" placeholder="YYYY-MM-DD (End)"/> </td>
						<td colspan=2> <input type="submit" value="Search" id="submit"/> </td> 
					</tr>
				</table>
			</form>	
			</div>
		</div>
	</body>
</html>
