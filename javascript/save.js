/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
	// attach function to execute on click of submit button
	$().click(function(e) {
		// prevent form from submitting data and resetting fields
		e.preventDefault();
		var firstName = document.getElementByName("firstName").value;
                var lastName = document.getElementByName("lastName").value;
                var mail = document.getElementByName("mail").value;
                var num = document.getElementByName("phone").value;
                var address = document.getElementByName("address").value;
                var cardNo = document.getElementByName("cardNo").value;
                var expiryDate = document.getElementByName("expiryDate").value;
                var year = document.getElementByName("year");
                var month = document.getElementByName("month");
                var day = document.getElementByName("day");

                 var syear = year[year.selectedIndex].value;  
                 var smonth = month[month.selectedIndex].value; 
                 var sday = day[day.selectedIndex].value; 

               	$.ajax({
				type: "POST",
				url:  saveReservation.php,
				data: {firstName: firstName, lastName: lastName, mail: mail, phone: num, 
					   cardNo: cardNo, expiryDate: expiryDate, year: syear, month: smonth, day: sday, 
					   address: address},
				success: function(data){
					// for debugging
					console.log(data);
                                    }
			});
               
               
               
            
            	});
        });
