<?php
// Start the session
session_start();

// Include the database file
require_once 'includes/db.php';

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
    // Get the username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query the database
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        // Set the session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];

        // Redirect to the dashboard
        header('Location: dashboard.php');
    } else {
        // Display an error message
        echo 'Invalid username or password';
    }
} else {
    // Display an error message
    echo 'Please fill in all fields';
}
?>

