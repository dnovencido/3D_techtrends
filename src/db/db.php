<?php 
    $server_name = "mysql_db";
    $username = "root";
    $password = "root";
    $database_name = "db_blog";

    //Create a connection
    $conn = new mysqli($server_name, $username, $password, $database_name);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>