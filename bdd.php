<?php
    $bd_host = "localhost";
    $bd_user = "root";
    $bd_password = "";
    $bd_name = "clinic";
    try{
         $connection = mysqli_connect($bd_host, $bd_user, $bd_password, $bd_name);
     }catch(mysqli_sql_exception ){
         echo "connection failed";
     }
?>