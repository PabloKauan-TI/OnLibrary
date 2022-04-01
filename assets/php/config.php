<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="onlibrary";

    $con = new mysqli($host, $user, $password, $dbname);

    if($con->connect_error){
        die("Conexão está com falhas.".$con->connect_error);
    }

?>