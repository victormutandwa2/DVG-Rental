var cities = ["St. John's", "Halifax", "Montreal", "Toronto", "Ottawa", "Calgary", "Vancouver"];
var branches = [["Water Street", "Avalon Mall"],
				["Beaufort Ave"],
				["Rue Saint-Patrick", "Avenue des Pilage"],
				["Lower Jarvis Street", "Caledonia Drive", "Victoria Park Ave"],
				["Byward Market"],
				["Burbank Rd SE"],
				["Oak Street", "Renfrew Street"]];
		

window.addEventListener('load', function() {
	document.getElementById("btnCityPickup").value=cities[0];
	document.getElementById("btnBranchPickup").value=branches[0][0];
	document.getElementById("startDateSelect").valueAsDate=new Date();
	document.getElementById("endDateSelect").valueAsDate=new Date();

	for (var i = 0; i < cities.length; i++) {
		var city = document.createElement("a");                
		city.innerHTML=cities[i];
		city.onclick = function(event) {
			var city2 = event.target.innerHTML;
			document.getElementById("btnCityPickup").value=city2;
			document.getElementById("btnBranchPickup").value=branches[cities.indexOf(city2)][0];
			document.getElementById("btnCityReturn").value=city2;
			document.getElementById("btnBranchReturn").value=branches[cities.indexOf(city2)][0];
			document.getElementById("branchListPickup").innerHTML="";
			document.getElementById("branchListReturn").innerHTML="";
			
			for (var i = 0; i < branches[cities.indexOf(city2)].length; i++) {
				var branch = document.createElement("a");                
				branch.innerHTML=branches[cities.indexOf(city2)][i];
				branch.onclick = function(event) {
					var branch2 = event.target.innerHTML;
					document.getElementById("btnBranchPickup").value=branch2;
					if (document.getElementById("btnCityPickup").value==document.getElementById("btnCityReturn").value) {
						document.getElementById("btnBranchReturn").value=branch2;
					}
				}
				document.getElementById("branchListPickup").appendChild(branch);
			}
		}
		document.getElementById("cityListPickup").appendChild(city);
	}
	
	document.getElementById("branchListPickup").innerHTML="";
	for (var i = 0; i < branches[0].length; i++) {
		var branch = document.createElement("a");                
		branch.innerHTML=branches[0][i];
		branch.onclick = function(event) {
			var branch2 = event.target.innerHTML;
			document.getElementById("btnBranchPickup").value=branch2;
			if (document.getElementById("btnCityPickup").value==document.getElementById("btnCityReturn").value) {
				document.getElementById("btnBranchReturn").value=branch2;
			}
		}
		document.getElementById("branchListPickup").appendChild(branch);
	}
	
	document.getElementById("btnCityReturn").value=cities[0];
	document.getElementById("btnBranchReturn").value=branches[0][0];
	
	for (var i = 0; i < cities.length; i++) {
		var city = document.createElement("a");                
		city.innerHTML=cities[i];
		city.onclick = function(event) {
			var city2 = event.target.innerHTML;			
			document.getElementById("btnCityReturn").value=city2;
			document.getElementById("btnBranchReturn").value=branches[cities.indexOf(city2)][0];
			document.getElementById("branchListReturn").innerHTML="";
			
			for (var i = 0; i < branches[cities.indexOf(city2)].length; i++) {
				var branch = document.createElement("a");                
				branch.innerHTML=branches[cities.indexOf(city2)][i];
				branch.onclick = function(event) {
					var branch2 = event.target.innerHTML;
					document.getElementById("btnBranchReturn").value=branch2;
				}
				document.getElementById("branchListReturn").appendChild(branch);
			}
		}
		document.getElementById("cityListReturn").appendChild(city);
	}
	
	document.getElementById("branchListReturn").innerHTML="";
	for (var i = 0; i < branches[0].length; i++) {
		var branch = document.createElement("a");                
		branch.innerHTML=branches[0][i];
		branch.onclick = function(event) {
			var branch2 = event.target.innerHTML;
			document.getElementById("btnBranchReturn").value=branch2;
		}
		document.getElementById("branchListReturn").appendChild(branch);
	}
});