<?php
// MySQL database host (as your MySQL Docker service name)
$mysql_host = 'db-srv'; 
// MySQL user
$user = 'test_user'; 
// MySQL user password
$pass = 'db_user_pass';
// Database name 
$db_name = 'test_db'; 

// Creating a MySQLi connection object
$conn = new mysqli($mysql_host, $user, $pass, $db_name); 

if ($conn->connect_error) { 
    // Checking connection status
    die("Connection failed: " . $conn->connect_error); 
    // Show what error if the connection fails
}

echo "MySQL Database and PHP Connected successfully"; 
// Display success message if the connection is successful

$conn->close(); 
// Closing the database connection