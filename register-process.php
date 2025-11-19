<?php
// Include the database file
require_once 'includes/db.php';

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm-password'])) {
    // Get the form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if the passwords match
    if ($password != $confirm_password) {
        // Display an error message
        echo 'Passwords do not match';
    } else {
        // Query the database
        $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $query);

        // Check if the query is successful
        if ($result) {
            // Display a success message
            echo 'Registration successful';
        } else {
            // Display an error message
            echo 'Error registering user';
        }
    }
} else {
    // Display an error message
    echo 'Please fill in all fields';
}
?>
