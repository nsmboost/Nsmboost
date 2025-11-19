<?php
$page_title = 'Manage Orders';
include 'header.php';

// Check if the user is an administrator
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}

// Query the database to get all orders
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);

// Check if there are any orders
if (mysqli_num_rows($result) > 0) {
    // Display the orders
    echo '<section>';
    echo '<h1>Manage Orders</h1>';
    echo '<table>';
    echo '<tr>';
    echo '<th>User ID</th>';
    echo '<th>Service</th>';
    echo '<th>Quantity</th>';
    echo '<th>Link</th>';
    echo '<th>Status</th>';
    echo '<th>Actions</th>';
    echo '</tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['user_id'] . '</td>';
        echo '<td>' . $row['service'] . '</td>';
        echo '<td>' . $row['quantity'] . '</td>';
        echo '<td>' . $row['link'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo '<td>';
        echo '<a href="update-order.php?id='"update-order.php?id=' . $row['id'] . '"'">Update</a>';
        echo '<a href="delete-order.php?id='"delete-order.php?id=' . $row['id'] . '"'">Delete</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
    echo '</section>';
} else {
    // Display a message if there are no orders
    echo '<section>';
    echo '<h1>Manage Orders</h1>';
    echo '<p>There are no orders.</p>';
    echo '</section>';
}

include 'footer.php';
?>
