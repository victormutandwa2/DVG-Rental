var cities = ["St. John's", "Halifax", "Montreal", "Toronto", "Ottawa", "Calgary", "Vancouver"];
var branches = [["Water Street", "Avalon Mall"],
				["Beaufort Ave"],
				["Rue Saint-Patrick", "Avenue des Pilage"],
				["Lower Jarvis Street", "Caledonia Drive", "Victoria Park Ave"],
				["Byward Market"],
				["Burbank Rd SE"],
				["Oak Street", "Renfrew Street"]];
		

window.addEventListener('load', function() {
	document.getElementById("btnCity").value="City";
	document.getElementById("btnBranch").value="Branch";
	document.getElementById("startDateSelect").value="";
	document.getElementById("endDateSelect").value="";
	for (var i = 0; i < cities.length; i++) {
		var city = document.createElement("a");                
		city.innerHTML=cities[i];
		city.onclick = function(event) {
			var city2 = event.target.innerHTML;
			document.getElementById("btnCity").value=city2;
			document.getElementById("btnBranch").value="Branch";
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