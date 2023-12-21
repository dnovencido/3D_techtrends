<?php
    $servername = "mysql_db";
    $username = "root";
    $passw0rd = "root";
    $databasename = "db_blog";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $databasename);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }