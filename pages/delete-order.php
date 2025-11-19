<?php
// Check if the user is an administrator
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}

// Get the order ID from the URL
$order_id = $_GET['id'];

// Query the database to delete the order
$query = "DELETE FROM orders WHERE id = '$order_id'";
$result = mysqli_query($conn, $query);

// Check if the query is successful
if ($result) {
    // Display a success message
    echo 'Order deleted successfully';
} else {
    // Display an error message
    echo 'Error deleting order';
}

// Redirect to the manage orders page
header('Location: admin-orders.php');
?>
