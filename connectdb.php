<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "saledb";
    $conn = new mysqli($servername,$username,$password,$databasename);
    if($conn->connect_error){
        die("Cannot connect database!");
    }
?>