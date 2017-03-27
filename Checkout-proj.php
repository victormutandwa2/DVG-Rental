<!DOCTYPE html>
<html>
<head>
	<title>Checkout:</title>
<style type="text/css">

	div.cart {

	position: absolute;
	top:180px;
	right:70px;
	height: 300px;
	width: 20%;
	font-size:20px;
    color:maroon;	 
    vertical-align: text-top;
	background-color: #D1D0CE;
}

div.two{
margin-left:70px;

}
div.three{
margin-left:70px;
}

div.button {
   background-color: #4CAF50; 
   border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  border-radius: 50%;
  
}

div.gap1 {
    font-size : 40px;
    font-family : Georgia, Serif;
    color : white;
    text-align : left;
    margin-top: 2%;
    margin-left: 5%;
    margin-right: 5%;
    background-color : maroon;
}

div.button:hover {background-color: #3e8e41}

div.button:active {
  background-color: #3e8e41;
  box-shadow: 0 3px #666;
  transform: translateY(4px);
}
div.bar1.a:hover {background-color:grey

div.bar1.a:active {
  background-color: grey;
  box-shadow: 0 3px #666;
  transform: translateY(4px);
}
}

</style>
<link rel="stylesheet" type="text/css" href="theme.css">
 <link rel="stylesheet" type="text/css" href="css/chooseVehicle.css">
</head>
<body>
<div id="bar">
<span class="header"><a href="index.php"><img src="img/logo.jpg" alt="Logo" height="70"></a></span>
                       
						<span class="right"><a href="#NOTHING">Contact Us</a></span>
						<span class="right"><a href="#NOTHING">Vehicles</a></span>								
						<span class ="right"><a href="index.php">Home</a></span>

</div>

<div class="gap1">
		Place your order!
</div>


<div class="two">
<h2>1.Driver Details:</h2>
<form action="bill.php" method="POST">
First name:*<br><input type="text" maxlength="60">
<br>
Last name:*<br>
<input type="text" maxlength="60">
<br>Date of Birth*<br>
<select data-required="true" data-requiredmessage="Birth date is required">
	<option value="" selected="select">Day</option><option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
</select>

<select data-required="true" data-requiredmessage="Birth date is required">
<option value="" selected="selected">Month</option><option value="01">January</option><option value="02">February</option><option value="03">March</option><option value="04">April</option><option value="05">May</option><option value="06">June</option><option value="07">July</option><option value="08">August</option><option value="09">September</option><option value="10">October</option><option value="11">November</option><option value="12">December</option></select>

<select data-required="true" data-requiredmessage="Birth date is required">
<option value="" selected="selected">Year</option><option value="1926">1926</option><option value="1927">1927</option><option value="1928">1928</option><option value="1929">1929</option><option value="1930">1930</option><option value="1931">1931</option><option value="1932">1932</option><option value="1933">1933</option><option value="1934">1934</option><option value="1935">1935</option><option value="1936">1936</option><option value="1937">1937</option><option value="1938">1938</option><option value="1939">1939</option><option value="1940">1940</option><option value="1941">1941</option><option value="1942">1942</option><option value="1943">1943</option><option value="1944">1944</option><option value="1945">1945</option><option value="1946">1946</option><option value="1947">1947</option><option value="1948">1948</option><option value="1949">1949</option><option value="1950">1950</option><option value="1951">1951</option><option value="1952">1952</option><option value="1953">1953</option><option value="1954">1954</option><option value="1955">1955</option><option value="1956">1956</option><option value="1957">1957</option><option value="1958">1958</option><option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option></select>
<br>
Email:<br><input type="text" maxlength="60">
<br>
Confirm Email:<br> <input type="text" maxlength="60" data-required="true" data-requiredmessage="Must Match!"><br>
Phone number*:<br><input type="text" maxlength="60"><br>
Address:<br><input type="text" maxlength="60">

</form>
</div>

<div class="three">

<h2>2.Payment Details:</h2>
<form action="bill.php" method="POST">
Type of payment:<br>
<input type="radio" value="credit" name="credit" onsubmit="Submit">Debit\Credit

<input type="radio" value="pay" name="credit">Pay Later
<br>
Name on card:<br><input type="text" placeholder="Name" data-required="true" data-requiredmessage="Name is required" maxlength="60">
<br>
Card Number:<br>
<input type="text" placeholder="Card number"  data-required="true" data-requiredmessage="Card number is required" maxlength="16">
<br>Expiry Date:
<br>
<input type="date" placeholder="(MM/YY)" data-required="true" data-requiredmessage="Year is required" maxlength="5">
<br>
<br>
</form>
</div>

<?php
session_start();

<!--
NB : num of days not calculated yet!!
and price


$rental_fee=20*$num_days;
-->
$quant=$_SESSION["var1"];
$quant1=$_SESSION["var2"];
$quant2=$_SESSION["var3"];


$extras=$quant*25+$quant1*45+$quant2*20;
$before_tax=$extras+$rental_fee;
$taxes=$extras*0.15+$rental_fee*0.15;
$total_tax=$before_tax*1.15;

echo " 
<div class="cart">
<table>
<h3 >Cart:</h3>
<tr>
Number of days:TBA
<br>
Price/day:$ 20 
</tr>
<tr><br>

Extras:$ $extras
</tr>
<tr><br>
Taxes(15%):$ $taxes <br>
<b>________________________</b>	
</tr>
<tr><br><b>TOTAL: $ $total_tax  </b></tr>
</table>
</div>
"
?>


<div class="button" >
<p>
<form action="bill.php">
<button type="submit"> Submit-></button>
</p>
</form>
</div>

<div id="bar1">
<a href="Extras.php"align="left" text-color="white"> BACK</a>
</div>



</body>
</html>
