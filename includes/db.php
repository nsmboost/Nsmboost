<?php
// Define the database connection variables
$db_host = 'localhost';
$db_username = 'your_username';
$db_password = 'your_password';
$db_name = 'your_database';

// Connect to the database
$conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
