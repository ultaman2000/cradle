<?php

    $host="localhost";
    $hostuser="root";
    $hostpass="";
    $database="cradle";


$con=mysqli_connect($host,$hostuser,$hostpass,$database);
$selectdb=mysqli_select_db($con, $database);

mysqli_query($con,"SET character_set_results=utf8");
mysqli_query($con,"SET character_set_client=utf8");
mysqli_query($con,"SET character_set_connection=utf8");

?>
