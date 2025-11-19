<?php
$page_title = 'My Orders';
include 'header.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}

// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Query the database to get the orders
$query = "SELECT * FROM orders WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $query);

// Check if there are any orders
if (mysqli_num_rows($result) > 0) {
    // Display the orders
    echo '<section>';
    echo '<h1>My Orders</h1>';
    echo '<table>';
    echo '<tr>';
    echo '<th>Service</th>';
    echo '<th>Quantity</th>';
    echo '<th>Link</th>';
    echo '<th>Status</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['service'] . '</td>';
        echo '<td>' . $row['quantity'] . '</td>';
        echo '<td>' . $row['link'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</section>';
} else {
    // Display a message if there are no orders
    echo '<section>';
    echo '<h1>My Orders</h1>';
    echo '<p>You have no orders.</p>';
    echo '</section>';
}

include 'footer.php';
?>
