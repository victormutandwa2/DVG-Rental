<?php
	$server = "mysql.cs.mun.ca";
	$name = "cs3715w17_dfm672";
	$password = "qQTgScX3";
	$database = "cs3715w17_dfm672";
	session_start();
            
	$link = new mysqli($server, $name, $password, $database);
	$queryCity = mysqli_query($link, 'SELECT DISTINCT city FROM branch');
	
	while($cityrow = mysqli_fetch_assoc($queryCity)) {
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
 
		<script type="text/javascript">		
			
			var cities= "<?php echo $js_cities ;?>";

			var branches = [["Water Street", "Avalon Mall"],
				["Beaufort Ave"],
				["Rue Saint-Patrick", "Avenue des Pilage"],
				["Lower Jarvis Street", "Caledonia Drive", "Victoria Park Ave"],
				["Byward Market"],
				["Burbank Rd SE"],
				["Oak Street", "Renfrew Street"]];
		

			window.addEventListener('load', function() {
				document.getElementById("btnCity").value=cities[0];
				document.getElementById("btnBranch").value=branches[0][0];
				document.getElementById("startDateSelect").valueAsDate=new Date();
				document.getElementById("endDateSelect").valueAsDate=new Date();

				for (var i = 0; i < 3; i++) {
					var city = document.createElement("a");                
					city.innerHTML=cities[i];
					city.onclick = function(event) {
					var city2 = event.target.innerHTML;
					document.getElementById("btnCity").value=city2;
					document.getElementById("btnBranch").value=branches[cities.indexOf(city2)][0];
					document.getElementById("branchList").innerHTML="";
			
					for (var i = 0; i < branches[cities.indexOf(city2)].length; i++) {
						var branch = document.createElement("a");                
						branch.innerHTML=branches[cities.indexOf(city2)][i];
						branch.onclick = function(event) {
						var branch2 = event.target.innerHTML;
						document.getElementById("btnBranch").value=branch2;
					}
				document.getElementById("branchList").appendChild(branch);
			}
		}
		document.getElementById("cityList").appendChild(city);
	}
});

			

		

		
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
							<input class="btn" id="btnCity" name="city"readOnly/>
							<div class="list" id="cityList">

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
						
						<!--
						Start date #PHP
						-->
						<?php
                           if(isset($_POST["submit"])){
							$_SESSION["var4"]=$_POST["startDate"];
						   }
						?>
						
								<td> <input id="endDateSelect" type="date" class="btn" name="endDate"/> </td>
						<!--
						END date #PHP

						-->
						<?php
                           if(isset($_POST["submit"])){
						   $_SESSION["var5"]=$_POST["endDate"];
						   }
						?>
						
						<td colspan=2> <input type="submit" value="Search" id="submit" name="submit"/> </td> 	
					</tr>
				</table>
				</div>
			</form>	
		</div>
		</body>
</html>
