<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

        <?php
        
        $server =  "localhost";
            $name = "root";
            $password = "";
            $database = "dvg";
            
            $link = new mysqli($server, $name, $password, $database);
                
        if ($_POST['type']) {
//          echo  $carQuery = mysqli_query($link,"SELECT model, type,year, img,ppd FROM cars WHERE branchID='$branch'");
            $type = $_POST['type'];
            $_POST[$type];
        }
       
        
        mysqli_close($link);
        
                ?>

