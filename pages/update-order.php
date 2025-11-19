<?php
$page_title = 'Update Order';
include 'header.php';

// Check if the user is an administrator
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1) {
    // Redirect to the login page
    header('Location: login.php');
    exit;
}

// Get the order ID from the URL
$order_id = $_GET['id'];

// Query the database to get the order details
$query = "SELECT * FROM orders WHERE id = '$order_id'";
$result = mysqli_query($conn, $query);

// Check if the order exists
if (mysqli_num_rows($result) > 0) {
    // Get the order details
    $order = mysqli_fetch_assoc($result);
} else {
    // Display an error message
    echo 'Order not found';
    exit;
}

// Check if the form is submitted
if (isset($_POST['update'])) {
    // Get the form data
    $status = $_POST['status'];

    // Query the database to update the order
    $query = "UPDATE orders SET status = '$status' WHERE id = '$order_id'";
    $result = mysqli_query($conn, $query);

    // Check if the query is successful
    if ($result) {
        // Display a success message
        echo 'Order updated successfully';
    } else {
        // Display an error message
        echo 'Error updating order';
    }
}
?>

<section>
    <h1>Update Order</h1>
    <form action="" method="post">
        <label for="service">Service:</label>
        <input type="text" id="service" name="service" value="<?php echo $order['service']; ?>" readonly><br><br>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" value="<?php echo $order['quantity']; ?>" readonly><br><br>
        <label for="link">Link:</label>
        <input type="text" id="link" name="link" value="<?php echo $order['link']; ?>" readonly><br><br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Pending">Pending</option>
            <option value="Processing">Processing</option>
            <option value="Completed">Completed</option>
        </select><br><br>
        <input type="submit" name="update" value="Update Order">
    </form>
</section>

<?php include 'footer.php'; ?>
