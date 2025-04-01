<?php
    $server_ip = "localhost";
    $username = "root";
    $password = "root";

    // Correct class name to mysqli (not sql)
    $conn = new mysqli($server_ip, $username, $password);

    // Fix the condition for checking connection error
    if ($conn->connect_error) {
        die("Database connection error: " . $conn->connect_error);
    } else {
        echo "Connected successfully";
    }

    // Create database query
    // $sql = "CREATE DATABASE mydb";
    
    // if ($conn->query($sql) === TRUE) {
    //     echo "Database created successfully";
    // } else {
    //     echo "Error creating database: " . $conn->error;
    // }

    // Close connection
    // $conn->close();
?>
