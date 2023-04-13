<?php

 $host = "localhost";
 $user = "root";
 $pass = "1234";
 $db = "ecommerce";
 
 $con = mysqli_connect($host,$user,$pass,$db);
 if(!$con){
    echo "Connection Success!";
 }

 
?>
   