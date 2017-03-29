<?php
	include 'sqlSetup.php';
        session_start();
        
	$link = new mysqli($server, $name, $password, $database);
	$cityQuery = mysqli_query($link, 'SELECT DISTINCT city FROM branch');
	
	while($cityrow = mysqli_fetch_assoc($cityQuery)) {
		$city[] = $cityrow["city"];
	}
		
	$js_cities = json_encode($city);
	print_r($js_cities);
?>

<html>
	<head>
		<title>DVG Rental</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/theme.css" />
		<link rel="stylesheet" type="text/css" href="css/homePage.css" />
                <script type="text/javascript" src="javascript/homePage.js">            
                               </script>
                
                <script type="text/javascript">
                var cities = <?php echo json_encode($city); ?>;
                for (var i = 0; i < cities.length; i++) {
                    push(cities[i]);
                }
                document.getElementById("btnCity") = cities[0];
                
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
		
                    

                    
                    
  
			<form action="chooseVehicle.php?type=All" method="POST">
				<div class="menuBar" >
				<table>
					<tr>
						<td class="label">Location:</td>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnCity" name="city"readOnly echo value="<?php echo $city[0] ?>"/>
							<div class="list" id="cityList">
                                                            <?php foreach ($cityQuery as $city) : ?>
                                                            
                                                <a name="city" id="<?php echo $city['city']; ?>" onclick="showCity(this.id)"> <?php echo $city['city']; ?> </a> 
                                                            
                                                            
                                                            <?php endforeach ?>
							</div>
						</div>
						</td>
						<td> 			 
						<div class="dropdown">
							<input class="btn" id="btnBranch" name="branch" readOnly/>
							<div class="list" id="branchList">

							</div>
						</div>
						</td>
						
						<td class="label">Pickup/Return:</td>
						<td> <input id="startDateSelect" type="date" class="btn" name="startDate"/> </td>
			
								<td> <input id="endDateSelect" type="date" class="btn" name="endDate"/> </td>
				
				
						
						<td colspan=2> <input type="submit" value="Search" id="submit" name="submit"/> </td> 	
					</tr>
				</table>
				</div>
			</form>	
		</div>
		</body>
</html>
