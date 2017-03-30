<?php
//include 'sqlSetup.php';
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

	// start session
	session_start();


          $server = "mysql.cs.mun.ca";
          $name = "cs3715w17_dfm672";
          $password = "qQTgScX3";
          $database = "cs3715w17_dfm672";
//        
//            $server =  "localhost";
//            $name = "root";
//            $password = "";
//            $database = "dvg";
            
            $link = new mysqli($server, $name, $password, $database);

	// retrieve all details from POST array
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$mail = $_POST['mail'];
	$num = $_POST['phone'];
	$dob = $_POST['year']. "-". $_POST['month'] ."-". $_POST['day'];
	$address = $_POST['address'];
        $cardNo = $_POST['cardNo'];
        $expiryDate = $_POST['expiryDate'];
        
       

	
        $sql = "INSERT INTO customer (customerID, firstName, lastName, DOB, email, phone, address, cardNo, expiryDate) 
                VALUES (NULL, '$fname', '$lname',  '$dob', '$mail', '$num', '$address', '$cardNo', '$expiryDate')";
        $query = mysqli_query($link, $sql);
	// if update is successful then return true
	if($query)
	{
        $customerIDQ = "SELECT customerID from customer where firstName='$fname' AND firstName='$lname'";
        $customerID = mysqli_fetch_row($customerIDQ);
        $custID = $customerID['customerID'];
        
        $idQ = "SELECT resID from reservation where customerID='$custID'";
        $id = mysqli_fetch_row($idQ);
                $_SESSION['resID'] = $id['resID'];
		echo "true";
	}
	// otherwise return false
	else
		echo 'Could not run query: '. mysqli_error($link);
	
	// close sql connection
	$link->close();

?>



<!--session_destroy();-->
?>