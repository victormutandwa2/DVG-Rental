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
            
            echo "Connected successfully";
//            $queryCity = mysqli_query($link, 'SELECT city FROM branch');
//            while($cityrow = mysqli_fetch_assoc($queryCity)) {
//                $city[] = $cityrow["city"];
//            }
//            $queryBranch = mysqli_query($link, 'SELECT streetAddress from branch');
//            while ($brrow = mysqli_fetch_assoc($queryBranch)) {
//                $branch[] = $brrow["streetAddress"];
//            }
//            
//            print_r($branch);
//            print_r($city);
   
            ?>
        