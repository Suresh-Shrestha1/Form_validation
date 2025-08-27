<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

    // Create connection to MySQL server
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die ("Connection failed: " . $conn->connect_error);
    }
    
    // Create users table
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(40) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        username VARCHAR(50) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    
    if (!$conn->query($sql)) {
        die ("Error creating table: " . $conn->error);
    }
    echo "Table 'users' created successfully<br>";

    $conn->close();
?>