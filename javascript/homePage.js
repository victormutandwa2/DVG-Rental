
function showCity(value) {
    
			var city2 = value;
			document.getElementById("btnCity").value=city2;
			document.getElementById("branchListPickup").innerHTML="";
			
			for (var i = 0; i < branches[cities.indexOf(city2)].length; i++) {
				var branch = document.createElement("a");                
				branch.onclick = function(event) {

				}
				document.getElementById("branchListPickup").appendChild(branch);
			}
              }
                        
