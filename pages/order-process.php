<?php
// Include the database file
require_once 'includes/db.php';

// Check if the form is submitted
if (isset($_POST['service']) && isset($_POST['quantity']) && isset($_POST['link'])) {
    // Get the form data
    $service = $_POST['service'];
    $quantity = $_POST['quantity'];
    $link = $_POST['link'];

    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Query the database to insert the order
    $query = "INSERT INTO orders (user_id, service, quantity, link) VALUES ('$user_id', '$service', '$quantity', '$link')";
    $result = mysqli_query($conn, $query);

    // Check if the query is successful
    if ($result) {
        // Display a success message
        echo 'Order placed successfully';
    } else {
        // Display an error message
        echo 'Error placing order';
    }
} else {
    // Display an error message
    echo 'Please fill in all fields';
}
?>
